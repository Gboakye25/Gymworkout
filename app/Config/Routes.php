<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/workouts', 'Workouts::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/about', 'Pages::about');
$routes->post('/contact/submit', 'Contact::submit');
$routes->get('/workouts/(:segment)', 'Workouts::show/$1');
$routes->get('/api/exercise-idea', 'Api::exerciseIdea');