<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('/', 'Home::index');
$routes->add('/a', 'Home::aa');
$routes->add('/s', 'Home::sub1');
$routes->add('/cal', 'Home::cal');

// if not sure to use $routes->get or $routes->post just use dual compatible $routes->add
