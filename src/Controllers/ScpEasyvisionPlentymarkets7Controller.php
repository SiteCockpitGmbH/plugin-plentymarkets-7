<?php

namespace ScpEasyvisionPlentymarkets7\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ScpEasyvisionPlentymarkets7Controller extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('ScpEasyvisionPlentymarkets7::Index');
    }
}