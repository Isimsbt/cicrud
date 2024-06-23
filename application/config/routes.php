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
|	https://codeigniter.com/user_guide/general/routing.html
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
/**************ROUTES DE PAGES CLIENTS************* */
$route['user/index'] = 'user/index';
$route['user/add'] = 'user/add';
$route['user/edit/(:num)'] = 'user/edit/$1';
$route['user/delete/(:num)'] = 'user/delete/$1';
/**************ROUTES DE PAGES TAXIS************* */
$route['taxi'] = 'taxi/index'; // Afficher la liste des taxis
$route['taxi/add'] = 'taxi/add'; // Afficher le formulaire d'ajout d'un taxi
$route['taxi/edit/(:any)'] = 'taxi/edit/$1'; // Afficher le formulaire d'édition d'un taxi
$route['taxi/delete/(:any)'] = 'taxi/delete/$1'; 
/**************ROUTES DE PAGES AGENCES************* */
$route['agence/index'] = 'agence/index';
$route['agence/add'] = 'agence/add';
$route['agence/edit/(:num)'] = 'agence/edit/$1';
$route['agence/delete/(:num)'] = 'agence/delete/$1';
/**************ROUTES DE PAGES PAIMENT************* */
$route['paiement'] = 'paiement/index';
$route['paiement/view/(:num)'] = 'paiement/view/$1';
$route['paiement/create'] = 'paiement/create';
$route['paiement/edit/(:num)'] = 'paiement/edit/$1';
$route['paiement/delete/(:num)'] = 'paiement/delete/$1';
/**************ROUTES DE PAGES RESERVATION************* */
$route['reservation/index'] = 'reservation/index';
$route['reservation/add'] = 'reservation/add';
$route['reservation/edit/(:num)'] = 'reservation/edit/$1';
$route['reservation/delete/(:num)'] = 'reservation/delete/$1';
   
$route['default_controller'] = 'frontend/page/index';

$route['frontend'] = 'frontend/page/index';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/********************************************************** */
$route['index'] = 'frontend/page/index';
$route['contact'] = 'frontend/page/contact';
$route['login'] = 'frontend/page/espace_client';
$route['reservation'] = 'frontend/page/reservation';
$route['taxi'] = 'frontend/page/listing';
$route['agence'] = 'frontend/page/agence';
$route['propos'] = 'frontend/page/about;
