<?php

namespace ContainerQcOn8qJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QmTBU0TService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qmTBU0T' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qmTBU0T'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chauffeur' => ['privates', '.errored..service_locator.qmTBU0T.App\\Entity\\Chauffeur', NULL, 'Cannot autowire service ".service_locator.qmTBU0T": it references class "App\\Entity\\Chauffeur" but no such service exists.'],
            'chauffeurRepository' => ['privates', 'App\\Repository\\ChauffeurRepository', 'getChauffeurRepositoryService', true],
        ], [
            'chauffeur' => 'App\\Entity\\Chauffeur',
            'chauffeurRepository' => 'App\\Repository\\ChauffeurRepository',
        ]);
    }
}
