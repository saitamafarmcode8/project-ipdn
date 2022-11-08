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
$route['default_controller'] = 'auth';
$route['404_override'] = 'pageerror';
$route['translate_uri_dashes'] = FALSE;
$route['logout'] = 'auth/logout';
$route['news_dashboard_panel_system_xml'] = 'dashboard';
$route['news_home_panel_xml'] = 'home';
$route['news_kategori_berita_system_xml'] = 'kategori';
$route['news_profile_data_xml'] = 'users';
$route['news_profile_session_xml'] = 'users/profilesession';
$route['news_profile_perbarui_xml/(:num)'] = 'users/edit/$1';
$route['news_profile_hapus_data_xml/(:num)'] = 'users/hapus/$1';
$route['news_profile_detail_data_xml/(:num)'] = 'users/detail/$1';
$route['news_activate_profile_data_xml/(:num)'] = 'users/activate/$1';
$route['news_deactivate_profile_data_xml/(:num)'] = 'users/deactivate/$1';
$route['news_profile_rules_system_data_xml'] = 'users/usersrule';
$route['news_profile_access_change'] = 'users/accessgivelimit';
$route['news_profile_rules_system_access_data_xml/(:num)'] = 'users/access/$1';
$route['news_profile_changepass_data_xml'] = 'users/changepassword';
$route['news_halaman_berita_data_xml'] = 'berita';
$route['news_halaman_berita_hapus_data_xml/(:num)'] = 'berita/beritahapus/$1';
$route['news_halaman_berita_draft_xml'] = 'berita/draftberita';
$route['news_halaman_berita_addnew_xml'] = 'berita/addnewberita';
$route['news_halaman_berita_simpanbaru_xml'] = 'berita/simpandataberita';
$route['news_halaman_berita_sebelumnya_xml'] = 'berita/beritasebelumnya';
$route['halaman_tampil_berita_detail/(:num)'] = 'berita/detailberita/$1';
$route['news_halaman_berita_perbarui_xml'] = 'berita/perbaruiberita';
$route['news_halaman_kelolamenu_data_xml'] = 'menu';
$route['news_kelolamenu_edit_data_xml/(:num)'] = 'menu/edit/$1';
$route['news_kelolamenu_hapus_data_xml/(:num)'] = 'menu/hapus/$1';
$route['news_halaman_journal_data_xml'] = 'journal';
$route['proses_perbarui_profile_foto'] = 'users/perbaruifotoprofile';
$route['proses_perbarui_profile'] = 'users/perbaruiprofile';
$route['home_tampilkan_berita_xml'] = 'berita/tampilkanberitahome';
$route['home_berita_write_xml'] = 'berita/nulisberitabaru';
$route['home_berita_write_draft_xml'] = 'berita/nulisberitadraft';
