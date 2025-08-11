<?php

namespace ScpEasyvisionPlentymarkets7\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Modules\Template\Contracts\TemplateContainerContract;
use Plenty\Modules\System\Modules\IO\IOEvents\IOEvents;

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

    public function boot(Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen(IOEvents::IO_RESOURCES_IMPORT, function (TemplateContainerContract $container) {
            // This event is fired to import resources into the theme.
            // We use the addScriptTemplate method to inject our script.
            $container->addScriptTemplate('ScpEasyvisionPlentymarkets7::ScpEasyvisionPlentymarkets7.twig');
        });
    }
}
