<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('user/list', 'User::list');
$routes->get('user/(:segment)', 'User::index/$1');
