<?php

namespace App\Helpers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View
{
    public static function render(string $template, array $data = [])
    {
        static $twig = null;

        if (!$twig) {
            $loader = new FilesystemLoader(__DIR__ . '/../Views');
            $twig = new Environment($loader, [
                'cache' => false // set a path here if you want caching
            ]);
        }

        echo $twig->render($template . '.twig', $data);
    }
}
