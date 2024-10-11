<?php

namespace ContainerN2LLgSN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jx4Da1fService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jx4Da1f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jx4Da1f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chauffeurRepository' => ['privates', 'App\\Repository\\ChauffeurRepository', 'getChauffeurRepositoryService', true],
        ], [
            'chauffeurRepository' => 'App\\Repository\\ChauffeurRepository',
        ]);
    }
}
