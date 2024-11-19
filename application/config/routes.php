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
$route['default_controller'] = 'Front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'Front/about';
$route['pediatrics'] = 'Front/pediatrics';
$route['gynaecology'] = 'Front/gynaecology';
$route['DrManuPortfolio'] = 'Front/DrManuPortfolio';
$route['DrShefaliPortfolio'] = 'Front/DrShefaliPortfolio';
$route['service'] = 'Front/service';
$route['appointment'] = 'Front/appointment';
$route['web-development'] = 'Front/web_development';
$route['mobile-app-development'] = 'Front/mobile_app_development';
$route['ui-ux-design'] = 'Front/ui_ux_design';
$route['digital-marketing'] = 'Front/digital_marketing';
$route['ott-campaigns'] = 'Front/ott_campaigns';
$route['portfollio'] = 'Front/portfollio';
$route['contact'] = 'Front/contact';
$route['rafhtaar'] = 'Front/rafhtaar';
$route['acharya-classes'] = 'Front/acharyaclasses';
$route['ujjawal-bhawisya'] = 'Front/ujjawalbhawisya';




/***************Admin*************/
$route['admin'] = 'login_panel/login';
$route['admin/dashboard'] = 'Admin_panel/dashboard';
$route['admin/post_blog'] = 'Admin_panel/post_blog';
$route['admin/manage-blog'] = 'Admin_panel/manage_blog';
$route['admin/edit_pass'] = 'Admin_panel/edit_password';
$route['admin/blog-category'] = 'Admin_panel/blog_category';
$route['admin/category-edit/(:any)'] = 'Admin_panel/category_edit/$1';
$route['admin/edit-blog/(:any)'] = 'Admin_panel/edit_blog/$1';


/* --------------- Crop ROute --------- */
$route['my-form'] = "MyFormController";
$route['my-form-upload'] = "MyFormController/post";

/*================= Seo ============== */
$route['seo'] = 'Seo/seo_login';
$route['seo-admin/dashboard'] = 'SeoAccount/index';
$route['seo-admin/change-password'] = 'SeoAccount/change_password';
$route['seo-admin/add-pages'] = 'SeoAccount/add_pages';
$route['seo-admin/add-pages/(:any)'] = 'SeoAccount/add_pages/$1';
$route['seo-admin/add-pages-action'] = 'SeoAccount/add_pages_action';
$route['seo-admin/manage-pages'] = 'SeoAccount/manage_pages';
$route['seo-admin/update-pages-action'] = 'SeoAccount/update_pages_action';
$route['seo-admin/delete/(:any)'] = 'SeoAccount/delete/$1';

/*=================front Seo ============== */
$route['blog'] = 'Front/blog';
$route['(:any)'] = 'Front/blog_detail/$1';

$route['blog/(:num)'] = 'Front/blog/$1';
$route['blog-detail/(:any)'] = 'Front/blog_detail/$1';
