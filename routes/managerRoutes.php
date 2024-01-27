<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group("",["subdomain" => "manager"],static function ($routes){
    $routes->get('/', [\modules\manager\Controllers\HomeController::class,"index"]);
});








