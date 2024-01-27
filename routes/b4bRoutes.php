<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group("",["subdomain" => "b4b"],static function ($routes){
    $routes->get('/', [\modules\b4b\Controllers\HomeController::class,"index"]);
    $routes->get('/products', [\modules\landing\Controllers\HomeController::class,"index"]);
    $routes->get('/customers', [\modules\landing\Controllers\HomeController::class,"index"]);
    $routes->get('/entries', [\modules\landing\Controllers\HomeController::class,"index"]);
});








