<?php

use App\Controllers\AuthController;
use App\Controllers\PageController;
use App\Controllers\UserController;

return FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', [PageController::class, 'home']);
    $r->addRoute('GET', '/about', [PageController::class, 'about']);
    $r->addRoute('GET', '/contact', [PageController::class, 'contact']);

    $r->addRoute('GET', '/dashboard', [PageController::class, 'dashboard']);

    // Authentication routes
    $r->addRoute('GET', '/login', [AuthController::class, 'login']);
    $r->addRoute('POST', '/login', [AuthController::class, 'authenticate']);
    $r->addRoute('GET', '/register', [AuthController::class, 'register']);
    $r->addRoute('POST', '/register', [AuthController::class, 'storeUser']);
    $r->addRoute('GET', '/logout', [AuthController::class, 'logout']);

    // User CRUD
    $r->addRoute('GET', '/users', [UserController::class, 'index']);
    $r->addRoute('GET', '/users/create', [UserController::class, 'create']);
    $r->addRoute('POST', '/users/store', [UserController::class, 'store']);
    $r->addRoute('GET', '/users/edit/{id:\d+}', [UserController::class, 'edit']);
    $r->addRoute('POST', '/users/update/{id:\d+}', [UserController::class, 'update']);
    $r->addRoute('GET', '/users/delete/{id:\d+}', [UserController::class, 'delete']);
    
});
