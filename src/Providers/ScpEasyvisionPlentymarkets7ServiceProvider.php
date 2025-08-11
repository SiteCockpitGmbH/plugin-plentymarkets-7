<?php

namespace ScpEasyvisionPlentymarkets7\Providers;

use Plenty\Plugin\ServiceProvider;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use IO\Extensions\Functions\Partial;

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

    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container) {
            // The style is imported in the <head> on the PageDesign.twig of plentyShop LTS
            $container->addStyleTemplate('ScpEasyvisionPlentymarkets7::ScpEasyvisionPlentymarkets7');
        }, self::PRIORITY);

        $eventDispatcher->listen('IO.init.templates', function (Partial $partial) {
            $partial->set('header', 'ScpEasyvisionPlentymarkets7::ScpEasyvisionPlentymarkets7');
        }, self::PRIORITY);
    }
}
