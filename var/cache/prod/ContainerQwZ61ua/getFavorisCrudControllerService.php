<?php

namespace ContainerQwZ61ua;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFavorisCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\FavorisCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\FavorisCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\FavorisCrudController'] = $instance = new \App\Controller\Admin\FavorisCrudController();

        $instance->setContainer(($container->privates['.service_locator.7Gh9pQb'] ?? $container->load('get_ServiceLocator_7Gh9pQbService'))->withContext('App\\Controller\\Admin\\FavorisCrudController', $container));

        return $instance;
    }
}