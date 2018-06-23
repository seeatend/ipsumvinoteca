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
/*
 * Start Admin(Backend) Routing
 */
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['authenticate'] = 'auth/authenticate_login';
//$route['/'] = 'auth/login';
$route['admin'] = 'auth/login';
$route['admin/login'] = 'auth/login';
$route['admin/dashboard'] = 'auth/dashboard';
$route['admin/logout']='auth/logout';
$route['admin/profile']='auth/profile';
$route['admin/ipsum-onlinebooking-view']='auth/view_onlinebooking';
$route['admin/ipsum-onlinebooking-detail/(.*)']='auth/view_bookingdetail/$1';
$route['admin/ipsum-onlinebooking-delete']='auth/deleteonlinebooking';
$route['admin/ipsum-onlinebooking-delete/(.*)']='auth/deleteonlinebooking/$1';
$route['admin/ipsum-contactquery-view']='auth/view_contact';
$route['admin/ipsum-contactquery-detail/(.*)']='auth/view_contactdetail/$1';
$route['admin/ipsum-contactquerey-delete']='auth/deletecontactquery';
$route['admin/ipsum-contactquerey-delete/(.*)']='auth/deletecontactquery/$1';
//start routing front


//$route['contact_us']='Home/contact_us';
$route['contact-us']='Home/contact_us';
$route['welcome']='Home/welcome';
$route['our-story']='Home/our_story';
$route['restaurant']='Home/restaurant';
$route['winebar']='Home/wine_bar';
$route['events']='Home/events';
$route['front/onlinebooking']='Home/onlinebooking';
$route['saverequst']='Home/saveRequstNewuser';


