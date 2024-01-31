<?php

namespace ContainerYeNE5sZ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2xuQBlmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2xuQBlm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2xuQBlm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'jwt' => ['privates', 'App\\Service\\JWTService', 'getJWTServiceService', true],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'em' => '?',
            'jwt' => 'App\\Service\\JWTService',
            'usersRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
