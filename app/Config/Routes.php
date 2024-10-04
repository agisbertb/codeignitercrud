<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::index');
$routes->get('create', 'UserController::create');
$routes->post('store', 'UserController::store');

