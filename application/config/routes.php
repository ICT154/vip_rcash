<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

///////// CSRF TOKEN REFRESH //////////
$route['refresh-csrf-token'] = 'server/csrf/refresh_csrf_token';

////// MEMBER //////
$route['dashboard'] = 'member/dashboard/dashboard';
$route['landing'] = 'member/dashboard/landing';
$route['logout'] = 'member/dashboard/logout';



////// DEPOSIT //////
$route['deposit-baru'] = 'deposit/depo/deposit_baru';
// $route['deposit-baru-sv'] = 'deposit/depo/deposit_baru_sv'; /// ini versi smm & ppob disatuin
$route['deposit-baru-sv'] = 'deposit/depo/deposit_baru_sv_v2'; /// ini versi smm & ppob dipisah
$route['riwayat-deposit'] = 'deposit/depo/riwayat_deposit';
$route['riwayat-deposit/table'] = 'deposit/depo/view_data_where';
$route['deposit-delete'] = 'deposit/depo/batalkan_deposit';
$route['deposit-send'] = 'deposit/depo/detail_send_bukti';
$route['hit-depo-bonus-rate'] = 'deposit/depo/hitung_bonus_rate';
$route['get-deposit-rate'] = 'deposit/depo/get_deposit_rate';
$route['get-deposit-bonus'] = 'deposit/depo/get_deposit_bonus';


////// SERVER //////
// wget -O /dev/null https://rcash.me/service-prepaid >/dev/null 2>&1
$route['service-prepaid'] = 'server/vip/service_prepaid';
$route['service-sosmed'] = 'server/vip/service_sosmed';
$route['service-game'] = 'server/vip/service_game';
$route['get-layanan-smm'] = 'server/medanpedia/get_layanan';

////// MEDANPEDIA //////
$route['check_update_status_medanpedia'] = 'server/medanpedia/get_status_pesanan';
// $route['get-layanan-smm'] = 'server/medanpedia/get_layanan_smm';

////// HARGA //////
$route['load_kategori'] = 'harga/harga/load_kategori';
$route['get-harga'] = 'harga/harga/get_harga';
$route['load-detail-prod'] = 'harga/harga/get_detail_layanan';
$route['daftar-harga'] = 'harga/harga/list_harga';
$route['daftar-harga-produk'] = 'harga/harga/list_harga_produk';
$route['get-prepaid'] = 'harga/harga/service_list';

////// PEMESANAN //////
$route['pemesanan-sosmed'] = 'pemesanan/pesan/pesanan';
$route['get-layanan'] = 'pemesanan/pesan/layanan';
$route['get-layanan-detail'] = 'pemesanan/pesan/layanan_detail';
$route['order-smm-single'] = 'pemesanan/pesan/order_smm_single';
$route['hit-total-pesanan'] = 'pemesanan/pesan/hitung_total_pesanan';


///// MIGRASI DATA /////
$route['_migrate_user'] = 'migrate_data/migrate/users';


//// RIWAYAT PESANAN //////
$route['riwayat-pesanan'] = 'pemesanan/pesan/riwayat_pesanan';
$route['riwayat-pesanan/tabel'] = 'pemesanan/pesan/riwayat_smm_table';
$route['riwayat-pesanan/detail'] = 'pemesanan/pesan/riwayat_smm_detail';
$route['riwayat-pesanan/komplain'] = 'pemesanan/pesan/riwayat_smm_komplain';
$route['komplain-smm'] = 'pemesanan/pesan/komplain_smm';


//// TIKET //////////
$route['tiket'] = 'pusatbantuan/tiket/index';
$route['tiket-sv'] = 'pusatbantuan/tiket/tiket_sv';
$route['data-tiket/tabel'] = 'pusatbantuan/tiket/data_tiket_table';
$route['tiket/m/(:any)'] = 'pusatbantuan/tiket/tiket_detail/$1';
$route['tiket-reply-sv'] = 'pusatbantuan/tiket/tiket_reply_sv';


////////// MONITORING ///////////
$route['monitoring-layanan'] = "pusatbantuan/monitoring/index";
$route['monitoring-layanan/tabel'] = "pusatbantuan/monitoring/tabel_monitoring";



///////// PAGE LUAR ///////////////
$route['term-of-service'] = 'page_luar/term_of_service';
