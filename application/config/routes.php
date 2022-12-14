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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'login';
$route['proses'] = 'login/aksi';
$route['logout'] = 'login/keluar';
$route['manual/(:any)'] = 'cetak/permohonan/$1';
$route['registrasi/(:any)'] = 'cetak/permohonan1/$1';


$route['dashboard'] = 'be/home';
$route['pengguna'] = 'be/home/pengguna';
$route['error'] = 'be/home/error';
$route['nomor'] = 'be/home/nomor';
$route['ttd'] = 'be/home/ttd';
$route['rekomproposal'] = 'be/home/rekomproposal';
$route['rekomkerja'] = 'be/home/rekomkerja';
$route['prekomkerja'] = 'be/home/pengantar_rkerja';
$route['kehilangan'] = 'be/home/pengantar_hilang';
$route['skck'] = 'be/home/skck';
$route['usaha'] = 'be/home/usaha';
$route['domisili'] = 'be/home/domisili';
$route['pindah'] = 'be/home/pindah';
$route['menikah'] = 'be/home/pengantar_nikah';
$route['kematian'] = 'be/home/mati';
$route['kelahiran'] = 'be/home/lahir';
$route['tidak_mampu'] = 'be/home/tmampu';
$route['tolak'] = 'be/home/tolak';
$route['onproses'] = 'be/home/proses';
$route['cek_permohonan'] = 'be/home/daftar_permohonan';
$route['lihat_surat/(:any)'] = 'be/home/lihat_surat/$1';
$route['cetak_rekom_proposal/(:any)'] = 'be/cetak_be/proposal/$1';
$route['cetak_rekom_kerja/(:any)'] = 'be/cetak_be/kerja/$1';
$route['cetak_pengantar_rkerja/(:any)'] = 'be/cetak_be/rkerja/$1';
$route['cetak_ket_domisili/(:any)'] = 'be/cetak_be/domisili/$1';
$route['cetak_ket_lahir/(:any)'] = 'be/cetak_be/lahir/$1';
$route['cetak_ket_mati/(:any)'] = 'be/cetak_be/mati/$1';
$route['cetak_ket_pindah/(:any)'] = 'be/cetak_be/pindah/$1';
$route['cetak_ket_usaha/(:any)'] = 'be/cetak_be/usaha/$1';
$route['cetak_ket_sktm/(:any)'] = 'be/cetak_be/sktm/$1';
$route['cetak_p_skck/(:any)'] = 'be/cetak_be/skck/$1';
$route['cetak_p_hilang/(:any)'] = 'be/cetak_be/hilang/$1';
$route['cetak_nikah_1/(:any)'] = 'be/cetak_be/nikah1/$1';
$route['cetak_nikah_2/(:any)'] = 'be/cetak_be/nikah2/$1';
$route['cetak_nikah_3/(:any)'] = 'be/cetak_be/nikah3/$1';
$route['buku_reg'] = 'be/cetak_be/buku';
$route['catat_surat'] = 'be/home/catat_surat';
$route['arsip_manual'] = 'be/home/arsip_manual';


$route['layanan'] = 'welcome/layanan';
$route['sukses/(:any)'] = 'welcome/sukses/$1';
// $route['periksa/(:any)'] = 'welcome/periksa/$1';
