<?php

namespace ScpEasyvisionPlentymarkets7\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class ScpEasyvisionPlentymarkets7RouteServiceProvider
 * @package ScpEasyvisionPlentymarkets7\Providers
 */
class ScpEasyvisionPlentymarkets7RouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','ScpEasyvisionPlentymarkets7\Controllers\ScpEasyvisionPlentymarkets7Controller@getHelloWorldPage');
    }
}