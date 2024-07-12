<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'RentalController::index');
$routes->get('/pages', 'RentalController::index');
$routes->get('/pages/create', 'RentalController::create');
$routes->post('/pages/store', 'RentalController::store');
$routes->get('/pages/edit/(:num)', 'RentalController::edit/$1');
$routes->post('/pages/update/(:num)', 'RentalController::update/$1');
$routes->get('/pages/delete/(:num)', 'RentalController::delete/$1');
$routes->get('/pages/searchResults', 'RentalController::search');
