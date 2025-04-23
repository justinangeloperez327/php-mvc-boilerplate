<?php

use App\Controllers\PageController;

return FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', [PageController::class, 'home']);
    $r->addRoute('GET', '/about', [PageController::class, 'about']);
    $r->addRoute('GET', '/contact', [PageController::class, 'contact']);
});
