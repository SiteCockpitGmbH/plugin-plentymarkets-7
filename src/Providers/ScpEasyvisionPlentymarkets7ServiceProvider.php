<?php

namespace ScpEasyvisionPlentymarkets7\Providers;

use Plenty\Plugin\Templates\Twig;

class ScpEasyvisionPlentymarkets7ServiceProvider
{
    public function call(Twig $twig)
    {
        return $twig->render('ScpEasyvisionPlentymarkets7::ScpEasyvisionPlentymarkets7');
    }
}
