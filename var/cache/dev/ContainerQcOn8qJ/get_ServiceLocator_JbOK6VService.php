<?php

namespace ContainerQcOn8qJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JbOK6VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jbOK6_V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jbOK6_V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contratRepository' => ['privates', 'App\\Repository\\ContratRepository', 'getContratRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'contratRepository' => 'App\\Repository\\ContratRepository',
            'serializer' => '?',
        ]);
    }
}
