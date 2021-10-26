<?php

namespace ContainerMwC78Cu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PjAOekmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PjAOekm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PjAOekm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'placeRepository' => ['privates', 'App\\Repository\\PlaceRepository', 'getPlaceRepositoryService', true],
        ], [
            'placeRepository' => 'App\\Repository\\PlaceRepository',
        ]);
    }
}
