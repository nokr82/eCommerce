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
$routes->get('/home/product_detail', 'Home::product_detail');
$routes->get('/home/shoping_cart', 'Home::shoping_cart');
$routes->get('/home/about', 'Home::about');
$routes->get('/home/blog', 'Home::blog');
$routes->get('/home/blog_detail', 'Home::blog_detail');
$routes->get('/home/contact', 'Home::contact');
$routes->get('/home/login', 'Home::login');
$routes->get('/home/join', 'Home::join');
$routes->post('/home/ajax_join', 'Home::ajax_join');
