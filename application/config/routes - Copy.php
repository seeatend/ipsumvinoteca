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
$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['authenticate'] = 'auth/authenticate_login';
//$route['admin'] = 'auth';
$route['admin/login'] = 'auth/login';
$route['admin/dashboard'] = 'auth/dashboard';
$route['admin/yoga-center-add']='auth/yoga_center_add';
$route['admin/yoga-instructors-add']='auth/yoga_instructors_add';
$route['admin/yoga-testimonials-add']='auth/yoga_testimonials_add';
$route['admin/yoga-reviews-add']='auth/yoga_reviews_add';
$route['admin/yoga-center-view']='auth/yoga_center_view';
$route['admin/yoga-instructors-view/(.*)']='auth/yoga_instructors_view/$1';
$route['admin/yoga-instructors-view']='auth/yoga_instructors_view';
$route['admin/yoga-testimonials-view']='auth/yoga_testimonials_view';
$route['admin/yoga-testimonials-view/(.*)']='auth/yoga_testimonials_view/$1';
$route['admin/yoga-reviews-view']='auth/yoga_reviews_view';
$route['admin/yoga-reviews-view/(.*)']='auth/yoga_reviews_view/$1';
//delete yoga retreat  admin
$route['admin/yoga-center-delete']='auth/yoga_center_delete';
$route['admin/yoga-center-delete/(.*)']='auth/yoga_center_delete/$1';
$route['admin/yoga-instructors-delete']='auth/yoga_instructors_delete';
$route['admin/yoga-instructors-delete/(.*)']='auth/yoga_instructors_delete/$1';
$route['admin/yoga-reviews-delete']='auth/yoga_reviews_delete';
$route['admin/yoga-reviews-delete/(.*)']='auth/yoga_reviews_delete/$1';
$route['admin/yoga-testimonials-delete']='auth/yoga_testimonials_delete';
$route['admin/yoga-testimonials-delete/(.*)']='auth/yoga_testimonials_delete/$1';
//update yoga retreat  admin
$route['admin/yoga-reviews-add/(.*)']='auth/yoga_reviews_add/$1';
$route['admin/yoga-testimonials-add/(.*)']='auth/yoga_testimonials_add/$1';
$route['admin/yoga-instructors-add/(.*)']='auth/yoga_instructors_add/$1';
$route['admin/yoga-center-add/(.*)']='auth/yoga_center_add/$1';
//logout admin
$route['admin/logout']='auth/logout';
//admin profile
$route['admin/profile']='auth/profile';

// Yoga Retreate Details
$route['admin/yoga-retreateview']='admin/Yoga_retreateview/index';
$route['admin/yoga-retreateview/add']='admin/Yoga_retreateview/add';
$route['yogaretreate_submit'] = 'admin/Yoga_retreateview/yogaretreate_submit';
$route['admin/yoga-retreateview/edit/(.*)']='admin/Yoga_retreateview/edit/$1';
$route['yogaretreate_editsubmit'] = 'admin/Yoga_retreateview/yogaretreate_editsubmit';


//deatil page yoga admin
$route['admin/yoga-detail/(.*)']='auth/yoga_detail/$1';

