<?php

namespace ContainerN2LLgSN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A5dHgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a5d_Hg_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a5d_Hg_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'authenticator' => ['privates', 'security.user_authenticator', 'getSecurity_UserAuthenticatorService', true],
            'formAuthenticator' => ['privates', 'App\\Security\\LoginFormAuthenticator', 'getLoginFormAuthenticatorService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'authenticationUtils' => '?',
            'authenticator' => '?',
            'formAuthenticator' => 'App\\Security\\LoginFormAuthenticator',
            'userPasswordHasher' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
