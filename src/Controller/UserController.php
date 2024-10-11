<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RoleUpdateFormType;
use App\Form\SearchUserType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET', 'POST'])]
    public function index(UserRepository $userRepository, Request $request): Response
    {
        $currentUser = $this->getUser();


        if (!$currentUser) {
            return $this->redirectToRoute('app_login');
        }

        if ($userRepository->findOneBy(['email' => $currentUser->getEmail()])->getRole()->getRole() !== 'ROLE_ADMIN') {
            return $this->redirectToRoute('app_home');
        }



        $form = $this->createForm(SearchUserType::class);
        $users = [];

        if ($request->getMethod() === 'POST') {
            $form->handleRequest($request);

            if ($form->isValid() && $form->isSubmitted()) {
                $data = $form->get('field_name')->getData();

                if ($data) {
                    $users = $userRepository->findUserByARgument($data);
                } else {
                    $users = $userRepository->createQueryBuilder('u')
                        ->where('u.id != :currentUserId')
                        ->setParameter('currentUserId', $currentUser->getId())
                        ->getQuery()
                        ->getResult();
                }
                return $this->render('user/index.html.twig', [
                    'users' => $users,
                    'form' => $form->createView(),
                ]);
            }
        } else {
            $users = $userRepository->createQueryBuilder('u')
                ->where('u.id != :currentUserId')
                ->setParameter('currentUserId', $currentUser->getId())
                ->getQuery()
                ->getResult();
        }

        return $this->render('user/index.html.twig', [
            'users' => $users,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository,     UserPasswordHasherInterface $userPasswordHasher,): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

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

            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/disable', name: 'app_user_disable', methods: ['GET', 'POST'])]
    public function disable(User $user, UserRepository $userRepository, MailerInterface $mailer): Response
    {

        if ($user->isIsActive()) {
            $user->setIsActive(false);
            $email = (new Email())
                ->from('fatma@admin.xyz')
                ->to($user->getEmail())
                ->subject('Account Has Been Created')
                ->text($user->getNom() . ', your account has been disabled.');
        } else {
            $user->setIsActive(true);
            $email = (new Email())
                ->from('fatma@admin.xyz')
                ->to($user->getEmail())
                ->subject('Account Has Been Created')
                ->text($user->getNom() . ', your account has been activated.');
        }

        $userRepository->save($user, true);
        $mailer->send($email);

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/privilege', name: 'app_user_role', methods: ['GET', 'POST'])]
    public function role(User $user, UserRepository $userRepository, int $id, Request $request, MailerInterface $mailer): Response
    {

        $form = $this->createForm(RoleUpdateFormType::class, $user->getRole());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $role = $user->getRole();
            $role->setRole($form->get('role')->getData());

            $user->setRole($role);

            $userRepository->save($user, true);

            $email = (new Email())
                ->from('fatma@admin.xyz')
                ->to($user->getEmail())
                ->subject('Account Has Been Created')
                ->text($user->getNom() . ', you have been granted ' . $user->getRole()->getRole() . ' privileges.');

            $mailer->send($email);


            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }


        return $this->render('user/role.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/pdf', name: 'app_user_pdf', methods: ['GET', 'POST'])]
    public function createPdf(User $user): Response
    {
        $tableHtml = '
        <table style="width:100%; border-collapse:collapse;">
            <tr>
                <td style="padding:10px; border:1px solid #000;">Nom:</td>
                <td style="padding:10px; border:1px solid #000;">' . $user->getNom() . '</td>
            </tr>
            <tr>
                <td style="padding:10px; border:1px solid #000;">Prénom:</td>
                <td style="padding:10px; border:1px solid #000;">' . $user->getPrenom() . '</td>
            </tr>
            <tr>
                <td style="padding:10px; border:1px solid #000;">Téléphone:</td>
                <td style="padding:10px; border:1px solid #000;">' . $user->getPhone() . '</td>
            </tr>
            <tr>
                <td style="padding:10px; border:1px solid #000;">Email:</td>
                <td style="padding:10px; border:1px solid #000;">' . $user->getEmail() . '</td>
            </tr>
            <tr>
                <td style="padding:10px; border:1px solid #000;">Rôle:</td>
                <td style="padding:10px; border:1px solid #000;">' . $user->getRole()->getRole() . '</td>
            </tr>
            <tr>
                <td style="padding:10px; border:1px solid #000;">Statut:</td>
                <td style="padding:10px; border:1px solid #000;">' . $user->isIsActive() . '</td>
            </tr>
        </table>
        ';

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($pdfOptions);
        $dompdf->loadHtml($tableHtml);

        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdfContent = $dompdf->output();

        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="location.pdf"'
        ]);
    }
}
