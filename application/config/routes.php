<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'users';
$route['404_override'] = 'users';
$route['translate_uri_dashes'] = FALSE;
$route['register'] = 'users/register';
$route['login'] = 'users/login';
$route['userprofile/(:any)'] = 'users/userprofile/$1';

$route['bookprofile/(:any)']='books/bookprofile/$1';
$route['welcomeUser']='users/welcomeuser';
$route['logoff']='users/logoff';