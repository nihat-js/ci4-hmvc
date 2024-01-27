<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group("",["subdomain" => "api"],static function ($routes){
    $routes->get('/', [\modules\api\Controllers\HomeController::class,"index"]);
    $routes->get("/login",[\modules\api\Controllers\AuthController::class,"login"]);
});








