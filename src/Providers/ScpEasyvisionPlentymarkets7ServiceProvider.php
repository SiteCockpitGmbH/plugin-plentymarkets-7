<?php

namespace ScpEasyvisionPlentymarkets7\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class ScpEasyvisionPlentymarkets7ServiceProvider
 * @package ScpEasyvisionPlentymarkets7\Providers
 */
class ScpEasyvisionPlentymarkets7ServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(ScpEasyvisionPlentymarkets7RouteServiceProvider::class);
    }
}