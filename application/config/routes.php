<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['currency'] = 'currency/index';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['client/add'] = 'clients/create';
$route['clients/store'] = 'clients/store';
$route['clients/update/(:num)'] = 'clients/update/$1';
$route['clients/(:any)'] = 'clients/view/$1';
$route['clients'] = 'clients/index';
$route['client/(:num)/edit'] = 'clients/edit/$1';


$route['project/add'] = 'projects/create';
$route['projects/store'] = 'projects/store';
$route['projects/update/(:num)'] = 'projects/update/$1';
$route['projects/(:any)'] = 'projects/view/$1';
$route['projects'] = 'projects/index';
$route['project/(:num)/add-milestone'] = 'projects/addMilestone/$1';
$route['project/(:num)/edit'] = 'projects/edit/$1';
$route['project/(:num)/view'] = 'projects/view/$1';
$route['project/(:num)/milestone/edit/(:num)'] = 'projects/milestoneEdit/$1/$2';
$route['project/(:num)/milestone/update/(:num)'] = 'projects/milestoneUpdate/$1/$2';
$route['project/(:num)/milestone/delete/(:num)'] = 'projects/milestoneDestroy/$1/$2';
