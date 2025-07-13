<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('coming', 'Home::coming');
$routes->get('service', 'Home::service');
$routes->get('detail-about-us', 'Home::detail_about_us');


// service
$routes->get('layanan-hukum-probono', 'Home::probono');
$routes->get('layanan-hukum-litigasi', 'Home::litigasi');
$routes->get('layanan-hukum-keluarga', 'Home::keluarga');
$routes->get('layanan-hukum-korporasi', 'Home::korporasi');
$routes->get('layanan-hukum-properti', 'Home::properti');
$routes->get('layanan-hukum-pajak', 'Home::pajak');

// mail
$routes->get('contact', 'Contact::index');
$routes->post('contact/send', 'Contact::send');
$routes->post('contact/send-service', 'Contact::send_2');
$routes->get('email-test', 'Contact::tesEmail');
