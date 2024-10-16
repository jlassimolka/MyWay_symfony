<?php

namespace ContainerN2LLgSN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HrRtIXpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HrRtIXp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HrRtIXp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contrat' => ['privates', '.errored..service_locator.HrRtIXp.App\\Entity\\Contrat', NULL, 'Cannot autowire service ".service_locator.HrRtIXp": it references class "App\\Entity\\Contrat" but no such service exists.'],
            'contratRepository' => ['privates', 'App\\Repository\\ContratRepository', 'getContratRepositoryService', true],
        ], [
            'contrat' => 'App\\Entity\\Contrat',
            'contratRepository' => 'App\\Repository\\ContratRepository',
        ]);
    }
}
