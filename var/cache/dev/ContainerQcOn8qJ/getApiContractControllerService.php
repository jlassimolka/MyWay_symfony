<?php

namespace ContainerQcOn8qJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiContractControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApiContractController' shared autowired service.
     *
     * @return \App\Controller\ApiContractController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ApiContractController.php';

        $container->services['App\\Controller\\ApiContractController'] = $instance = new \App\Controller\ApiContractController(($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\ApiContractController', $container));

        return $instance;
    }
}
