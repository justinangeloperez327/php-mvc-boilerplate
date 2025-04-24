<?php

namespace App\Controllers;

use App\Helpers\View;

class PageController {
    public function home() {
        View::render('home', [
            'title' => 'Welcome Home',
            'message' => 'This is the homepage'
        ]);
    }

    public function about() {
        View::render('about', [
            'title' => 'About Us'
        ]);
    }

    public function contact() {
        View::render('contact', [
            'title' => 'Contact Page'
        ]);
    }
}
