<?php

namespace ContainerQcOn8qJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NX2vl8VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NX2vl8V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NX2vl8V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ligne' => ['privates', '.errored..service_locator.NX2vl8V.App\\Entity\\Ligne', NULL, 'Cannot autowire service ".service_locator.NX2vl8V": it references class "App\\Entity\\Ligne" but no such service exists.'],
        ], [
            'ligne' => 'App\\Entity\\Ligne',
        ]);
    }
}
