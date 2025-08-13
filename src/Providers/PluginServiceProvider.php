<?php

namespace ScpEasyvisionPlentymarkets7\Providers;

use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class PluginServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {

    }

    /**
     * Boot a template for the basket that will be displayed in the template plugin instead of the original basket.
     */
    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container)
        {
            // The script is imported in the Footer.twig of plentyShop LTS
            $container->addScriptTemplate('ScpEasyvisionPlentymarkets7::Script');
        });
    }
}
