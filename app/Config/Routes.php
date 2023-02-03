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

$routes->get('/', 'Home::index');
$routes->add('home/login', 'Home::login');
$routes->add('home/logout', 'Home::logout');
$routes->add('dashboard', 'Dashboard::index');
$routes->add('mahasiswa', 'Mahasiswa::index');
$routes->add('mahasiswa/data_mahasiswa_json', 'Mahasiswa::data_mahasiswa_json');
$routes->add('mahasiswa/add', 'Mahasiswa::add');
$routes->add('mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->add('mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
$routes->add('mahasiswa/pro_add', 'Mahasiswa::pro_add');
$routes->add('mahasiswa/pro_edit', 'Mahasiswa::pro_edit');

$routes->add('grafik_gender', 'Grafik_gender::index');
$routes->add('grafik_gender/grafik_gender_json', 'Grafik_gender::grafik_gender_json');

$routes->add('grafik_agama', 'Grafik_agama::index');
$routes->add('grafik_agama/grafik_agama_json', 'Grafik_agama::grafik_agama_json');

$routes->add('grafik_provinsi', 'Grafik_provinsi::index');
$routes->add('grafik_provinsi/grafik_provinsi_json', 'Grafik_provinsi::grafik_provinsi_json');

$routes->add('grafik_prodi', 'Grafik_prodi::index');
$routes->add('grafik_prodi/grafik_prodi_json', 'Grafik_prodi::grafik_prodi_json');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
