<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('coming', 'Home::coming');

// mail
$routes->get('contact', 'Contact::index');
$routes->post('contact/send', 'Contact::send');

$routes->get('email-test', 'Contact::tesEmail');
