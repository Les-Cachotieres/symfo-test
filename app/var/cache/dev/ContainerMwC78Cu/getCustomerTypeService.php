<?php

namespace ContainerMwC78Cu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CustomerType' shared autowired service.
     *
     * @return \App\Form\CustomerType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CustomerType.php';

        return $container->privates['App\\Form\\CustomerType'] = new \App\Form\CustomerType();
    }
}
