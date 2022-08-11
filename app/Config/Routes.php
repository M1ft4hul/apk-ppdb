<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('C_Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/*
 * --------------------------------------------------------------------
 * tampilan web PPDB (Frontend)
 * --------------------------------------------------------------------
 */
$routes->get('/home', 'C_Home::index'); //sudah selesai
$routes->get('/about', 'C_Home::about');
$routes->get('/pengumuman', 'C_Home::pengumuman');

/*
 * --------------------------------------------------------------------
 * Admin web PPDB (backend)
 * --------------------------------------------------------------------
 */
$routes->get('/AdminPPDB', 'C_Admin::index');
$routes->get('/UserLogin', 'C_Auth::LoginUser');
$routes->get('/pekerjaan', 'C_Pekerjaan::index');
$routes->get('/pendidikan', 'C_Pendidikan::index');
$routes->get('/agama', 'C_Agama::index');
$routes->get('/user', 'C_User::index');

/*
 * --------------------------------------------------------------------
 * Login dan pendaftaran Siswa Baru
 * --------------------------------------------------------------------
 */
$routes->get('/loginSiswa', 'C_Auth::index');
$routes->get('/pendaftaranSiswa', 'C_Auth::pendaftaran');

/*
 * --------------------------------------------------------------------
 * Dashboard pilihan sekolah dan jurusan
 * --------------------------------------------------------------------
 */
$routes->get('/homepage', 'Home_Pertama::index');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
