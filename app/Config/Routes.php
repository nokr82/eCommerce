<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/index', 'Home::index');
$routes->get('/home/index2', 'Home::index2');
$routes->get('/home/index3', 'Home::index3');


$routes->get('/home/product', 'Home::product');
