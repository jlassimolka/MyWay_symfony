<?php

namespace ContainerN2LLgSN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YRqPluqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yRqPluq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yRqPluq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reponse' => ['privates', '.errored..service_locator.yRqPluq.App\\Entity\\Reponse', NULL, 'Cannot autowire service ".service_locator.yRqPluq": it references class "App\\Entity\\Reponse" but no such service exists.'],
            'reponseRepository' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
        ], [
            'reponse' => 'App\\Entity\\Reponse',
            'reponseRepository' => 'App\\Repository\\ReponseRepository',
        ]);
    }
}
