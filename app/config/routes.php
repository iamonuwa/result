<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin/accounts/(:num)'] = 'accounts/edit/$1';
$route['admin/accounts/delete/(:num)'] = 'accounts/delete/$1';

$route['admin/accounts/activate/(:num)'] = 'accounts/unban/$1';
$route['admin/accounts/deactivate/(:num)'] = 'accounts/ban/$1';


$route['admin/accounts/create'] = 'accounts/create';

$route['accounts/(:num)'] = 'application/search/$1';

$route['application/seat/(:num)'] = 'application/send_not_found_mail/$1';
$route['application/mail/(:num)'] = 'application/found_mail/$1';