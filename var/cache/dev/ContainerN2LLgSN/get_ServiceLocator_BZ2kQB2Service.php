<?php

namespace ContainerN2LLgSN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BZ2kQB2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BZ2kQB2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BZ2kQB2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'moyentpRepository' => ['privates', 'App\\Repository\\MoyentpRepository', 'getMoyentpRepositoryService', true],
        ], [
            'moyentpRepository' => 'App\\Repository\\MoyentpRepository',
        ]);
    }
}
