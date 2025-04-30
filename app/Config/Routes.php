<?php

namespace Config;

use CodeIgniter\Router\Router;

$routes = Services::routes();

$routes->get('/', 'AuthController::login');
$routes->post('/login', 'AuthController::loginProcess');
$routes->get('/logout', 'AuthController::logout');

$routes->group('admin', ['filter' => 'authcheck:admin'], function($routes) {
    $routes->get('/', 'DashboardController::adminDashboard');
});

$routes->group('user', ['filter' => 'authcheck:user'], function($routes) {
    $routes->get('/', 'DashboardController::userDashboard');
});

$routes->setAutoRoute(true);
