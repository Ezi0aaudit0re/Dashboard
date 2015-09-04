<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['404_override'] = '';
$route['register'] = 'users/register';
$route['signin'] = 'users/signin';
$route['dashboard'] = 'users/dashboard';
$route['adduser'] = 'users/adduserbyadmin';
$route['message'] = 'users/message';
$route['comment/(:any)'] = 'users/comments/$1';

//end of routes.php