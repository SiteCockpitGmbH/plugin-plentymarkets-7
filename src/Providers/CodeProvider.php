<?php

namespace ScpEasyvisionPlentymarkets7\Providers;

use Plenty\Plugin\Templates\Twig;

class CodeProvider
{
    public function call(Twig $twig)
    {
        return $twig->render('ScpEasyvisionPlentymarkets7::Script');
    }
}
