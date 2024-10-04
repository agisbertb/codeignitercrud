<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::index');
$routes->get('/create', 'UserController::create');
$routes->post('/store', 'UserController::store');
$routes->get('/edit/(:num)', 'UserController::edit/$1');
$routes->post('/update/(:num)', 'UserController::update/$1');

