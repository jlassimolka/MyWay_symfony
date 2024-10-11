<?php

namespace ContainerN2LLgSN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SNoe1udService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SNoe1ud' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SNoe1ud'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'reclamationRepository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
            'reponseRepository' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
        ], [
            'doctrine' => '?',
            'reclamationRepository' => 'App\\Repository\\ReclamationRepository',
            'reponseRepository' => 'App\\Repository\\ReponseRepository',
        ]);
    }
}
