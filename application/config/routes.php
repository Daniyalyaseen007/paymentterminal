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
$route['default_controller'] = 'Main';
$route['404_override'] = 'Errors/notfound';
$route['translate_uri_dashes'] = FALSE;


$route['login/process'] = 'Login/process';
$route['sign-out'] = 'Login/sign_out';
$route['dashboard'] = 'Home/dashboard';


$route['merchants/list'] = 'Merchants/list';
$route['merchants/edit/(:any)'] = 'Merchants/edit/$1';


$route['brands/list'] = 'Brands/list';
$route['services/list'] = 'Services/list';
$route['services/edit/(:any)'] = 'Services/edit/$1';

$route['brands/edit/(:any)'] = 'Brands/edit/$1';



$route['roles/list'] = 'Roles/list';
$route['users/list'] = 'Users/list';

$route['login/auth'] = 'Login/auth';
$route['login/error/(:any)'] = 'Login/error/$1';


$route['links/create'] = 'Links/create';
$route['links/paid-list'] = 'Links/paid_list';




$route['forgot-password'] = 'Login/forgot_password';

$route['forgot-password/otp'] = 'Login/forgot_otp';

$route['forgot-password/(:any)'] = 'Login/forgot_password';

$route['reports/sales-sheet'] = 'Report/sales_sheet';









