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
$route['default_controller']    = 'C_Home';
$route['home']                  = 'C_Home';
$route['dashboard']             = 'C_Dashboard/index/$1';
$route['dashboard/(:any)']      = 'C_Dashboard/index/$1';
$route['login']                 = 'C_Login';
$route['login/auth']            = 'C_Login/auth';
$route['logout']                = 'C_Login/logout';
$route['forget_pass']           = 'C_Login/forget';
$route['login/forget_auth']     = 'C_Login/forget_auth';
$route['signup']                = 'C_Signup';
$route['signup/confirm']        = 'C_Signup/confirm';
$route['explore']               = 'C_List';
$route['explore/search']        = 'C_List/search';
$route['explore/advancedsearch']= 'C_List/advancedsearch';
$route['contact']               = 'C_Contactus';
$route['profile']               = 'C_Profile';
$route['inbox']                 = 'C_Inbox';
$route['stuffs/add']            = 'C_Stuff/add_stuffs';
$route['profile/(:any)']        = 'C_Profile/index/$1';
$route['inbox/(:any)']          = 'C_Inbox/index/$1';
$route['stuffs/add/(:any)']     = 'C_Stuff/add_stuffs/$1';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

