<?php

namespace App\Helpers;

class View
{
    public static function render(string $view, array $data = [])
    {
        extract($data); // Convert array keys to variables
        $viewPath = __DIR__ . '/../Views/' . $view . '.php';

        if (!file_exists($viewPath)) {
            http_response_code(500);
            echo "View file not found: {$viewPath}";
            exit;
        }

        require __DIR__ . '/../Views/layouts/header.php';
        require $viewPath;
        require __DIR__ . '/../Views/layouts/footer.php';
    }
}
