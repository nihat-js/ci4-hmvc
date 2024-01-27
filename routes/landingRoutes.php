<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group("",[],static function ($routes){
    $routes->get('/', [\modules\landing\Controllers\HomeController::class,"index"]);
});








