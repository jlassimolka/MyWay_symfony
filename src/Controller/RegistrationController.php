<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\LoginFormAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

use Twilio\Rest\Client;

use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;


class RegistrationController extends AbstractController
{

    private $verifyEmailHelper;
    private $mailer;

    public function __construct(VerifyEmailHelperInterface $verifyEmailHelper, MailerInterface $mailer)
    {
        $this->verifyEmailHelper = $verifyEmailHelper;
        $this->mailer = $mailer;
    }

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        UserAuthenticatorInterface $authenticator,
        LoginFormAuthenticator $formAuthenticator,
    ): Response {
        $user = new User();
        $role = new Role();
        // $twilio = new Client("ACad6e3e838193ff96889c94752d07d530", "43207e2bbb7fbc1d27d406ffe28c8e67");

        if ($this->getUser()) {
            return $this->redirectToRoute('app_login');
        }


        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // set user role
            $role->setRole('ROLE_USER');
            $role->setUser($user);

            $user->setRole($role);

            // set user image
            $imageFile = $form->get('image')->getData();
            $originalName = $imageFile->getClientOriginalName();
            $extension = $imageFile->guessExtension();
            $hashedName = password_hash($originalName, PASSWORD_DEFAULT) . '.' . $extension;

            $imageFile->move(
                $this->getParameter('images_directory'),
                $hashedName
            );

            $user->setImage(basename($hashedName));

            // set account status
            $user->setIsActive(true);
            $user->setEmailVerified(false);

            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );




            $entityManager->persist($user);
            $entityManager->flush();



            $signatureComponents = $this->verifyEmailHelper->generateSignature(
                'registration_confirmation_route',
                $user->getId(),
                $user->getEmail()
            );

            $signedUrl = $signatureComponents->getSignedUrl();

            $email = new Email();
            $email->from('fatma@admin.xyz');
            $email->to($user->getEmail());
            $email->html('<a href="' . $signedUrl . '">Click here to confirm your registration</a>');

            $this->mailer->send($email);



            // authenticate the user
            $authenticator->authenticateUser(
                $user,
                $formAuthenticator,
                $request,
            );

            /*
            $twilio->messages->create(
                "+21658061835",
                array(
                    "from" => "+12765218103",
                    "body" => "Hello " . $user->getNom() . " Welcome to our website",
                )
            );
            */

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }


    #[Route('/verify', name: 'registration_confirmation_route')]
    public function verifyUserEmail(Request $request, UserRepository $userRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        // Do not get the User's Id or Email Address from the Request object
        try {
            $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getId(), $user->getEmail());
        } catch (VerifyEmailExceptionInterface $e) {
            $this->addFlash('verify_email_error', $e->getReason());

            return $this->redirectToRoute('app_register');
        }

        // Mark your user as verified. e.g. switch a User::verified property to true

        $this->addFlash('success', 'Your e-mail address has been verified.');

        $user->setEmailVerified(true);
        $userRepository->save($user, true);



        return $this->redirectToRoute('app_login');
    }
}
