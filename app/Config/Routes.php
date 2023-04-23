<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');

//Admin

$routes->get('/admin/index', 'AdminController::index');

//AT
$routes->get('/admin/at', 'AdminController::ATview');
$routes->get('/admin/create_at', 'AdminController::ATcreate');

//KT
$routes->get('/admin/kt', 'AdminController::KTview');
$routes->get('/admin/create_kt', 'AdminController::KTcreate');

//NKP
$routes->get('/admin/nkp', 'AdminController::NKPview');
$routes->get('/admin/create_nkp', 'AdminController::NKPcreate');

// NKT
$routes->get('/admin/nkt', 'AdminController::NKTview');
$routes->get('/admin/create_nkt', 'AdminController::NKTcreate');

//PJ
$routes->get('/admin/pj', 'AdminController::PJview');
$routes->get('/admin/create_pj', 'AdminController::PJcreate');

//PT
$routes->get('/admin/pt', 'AdminController::PTview');
$routes->get('/admin/create_pt', 'AdminController::PTcreate');

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
