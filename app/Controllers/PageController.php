<?php

namespace App\Controllers;

class PageController {
    public function home() {
        require __DIR__ . '/../Views/home.php';
    }

    public function about() {
        require __DIR__ . '/../Views/about.php';
    }

    public function contact() {
        require __DIR__ . '/../Views/contact.php';
    }
}