<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['masuk'] = 'auth/login';
$route['keluar']['POST'] = 'auth/logout';

$route['anggota'] = 'member/index';
$route['anggota/tambah'] = 'member/create';
$route['anggota/ubah/(:any)'] = 'member/update/$1';
$route['anggota/hapus']['POST'] = 'member/delete';
$route['anggota/laporan'] = 'member/report';

$route['buku'] = 'book/index';
$route['buku/tambah'] = 'book/create';
$route['buku/ubah/(:any)'] = 'book/update/$1';
$route['buku/hapus']['POST'] = 'book/delete';
$route['buku/laporan'] = 'book/report';

$route['peminjaman'] = 'booklending/index';
$route['peminjaman/tambah'] = 'booklending/create';
$route['peminjaman/ubah/(:any)'] = 'booklending/update/$1';
$route['peminjaman/hapus']['POST'] = 'booklending/delete';
$route['peminjaman/laporan'] = 'booklending/report';

$route['pengembalian'] = 'bookreturn/index';
$route['pengembalian/tambah'] = 'bookreturn/create';
$route['pengembalian/ubah/(:any)'] = 'bookreturn/update/$1';
$route['pengembalian/hapus']['POST'] = 'bookreturn/delete';
$route['pengembalian/laporan'] = 'bookreturn/report';

$route['profil'] = 'user/index';
$route['pengaturan'] = 'setting/index';

$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
