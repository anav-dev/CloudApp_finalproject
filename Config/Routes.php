<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->add('index', 'Mycontroller::index');
$routes->add('session', 'Mycontroller::session');
$routes->add('profile', 'Mycontroller::profile');
$routes->add('logout', 'Mycontroller::logout');
$routes->add('login', 'Mycontroller::login');
$routes->add('register', 'Mycontroller::register');
$routes->add('about', 'Mycontroller::about');
$routes->add('books', 'Mycontroller::books');
$routes->add('contact', 'Mycontroller::contact');

$routes->add('signup', 'SignUp_Controller::signup');
$routes->post('/submitNewUser', 'SignUp_Controller::addNewUser');
$routes->add('/signup-view', 'SignUp_Controller::signUpView');
$routes->add('/update/(:num)', 'SignUp_Controller::update/$1');
$routes->add('/update1', 'SignUp_Controller::update1');
$routes->add('/delete/(:num)', 'SignUp_Controller::delete/$1');

$routes->add('reserve-book-add', 'ReservationController::create');
$routes->post('/submitReserv', 'ReservationController::store');
$routes->add('/reserve-book-view', 'ReservationController::reserveView');
$routes->add('/updateReservation/(:num)', 'ReservationController::updateReservation/$1');
$routes->add('/update1Reservation/(:num)', 'ReservationController::update1Reservation/$1');
$routes->add('/deleteReservation/(:num)', 'ReservationController::deleteReservation/$1');

$routes->add('book-reg-create', 'BookController::create');
$routes->post('/submit', 'BookController::store');
$routes->add('/book-reg-view', 'BookController::bookView');
$routes->add('/updateBook/(:num)', 'BookController::updateBook/$1');
$routes->add('/update1Book', 'BookController::update1Book');
$routes->add('/deleteBook/(:num)', 'BookController::deleteBook/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
