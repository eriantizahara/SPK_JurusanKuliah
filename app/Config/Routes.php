<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');

$routes->get('/', 'landingpage::index');
$routes->get('/mulai', 'landingpage::mulai');
$routes->post('/proses', 'SPK::proses');
$routes->post('/proses/pdf', 'SPK::pdf');
