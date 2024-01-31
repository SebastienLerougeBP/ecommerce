<?php

namespace ContainerYeNE5sZ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XYfIMA2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XYfIMA2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XYfIMA2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'pictureService' => ['privates', 'App\\Service\\PictureService', 'getPictureServiceService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'manager' => '?',
            'pictureService' => 'App\\Service\\PictureService',
            'slugger' => '?',
        ]);
    }
}
