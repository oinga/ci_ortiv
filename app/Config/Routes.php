<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/tutorials', 'Tutorials::index');

$routes->post('/', 'Home::index');


