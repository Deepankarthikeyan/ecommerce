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
$route['website'] = 'website_landing/Landing_controller/website';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'panel/panel_controller/login_page';
$route['create_account_page'] = 'panel/panel_controller/create_account_page';
$route['create_account'] = 'panel/panel_controller/create_account';
$route['login_account'] = 'panel/panel_controller/login_account';
$route['dasboard'] = 'panel/panel_controller/dasboard';
$route['logout'] = 'panel/panel_controller/logout';
$route['change_password_page'] = 'panel/panel_controller/change_password_page';
$route['change_password'] = 'panel/panel_controller/change_password';
$route['header'] = 'panel/panel_controller/header';
$route['sidebar'] = 'panel/panel_controller/sidebar';
$route['our_product_page'] = 'panel/panel_controller/our_product_page';
$route['our_product'] = 'panel/panel_controller/our_product';
$route['our_product_List'] = 'panel/panel_controller/our_product_List';
$route['view_our_product_list/(:any)'] = 'panel/panel_controller/view_our_product_list/$1';
$route['edit_our_products'] = 'panel/panel_controller/edit_our_products';
$route['delete_our_product/(:any)'] = 'panel/panel_controller/delete_our_product/$1';
$route['feature_product_page'] = 'panel/panel_controller/feature_product_page';
$route['feature_product'] = 'panel/panel_controller/feature_product';
$route['feature_product_list'] = 'panel/panel_controller/feature_product_list';
$route['delete_feature_product/(:any)'] = 'panel/panel_controller/delete_feature_product/$1';
$route['feature_product_details/(:any)'] = 'panel/panel_controller/feature_product_details/$1';
$route['edit_feature_product'] = 'panel/panel_controller/edit_feature_product';
$route['get_cart_detail'] = 'website_landing/Landing_controller/get_cart_detail';
$route['get_cart_datas'] = 'website_landing/Landing_controller/get_cart_datas';
$route['reduce_product_count'] = 'website_landing/Landing_controller/reduce_product_count';
$route['increase_product_count'] = 'website_landing/Landing_controller/increase_product_count';
$route['delete_cart_item'] = 'website_landing/Landing_controller/delete_cart_item';
$route['view_cart_page'] = 'website_landing/Landing_controller/view_cart_page';
$route['get_product_detail'] = 'website_landing/Landing_controller/get_product_detail';
$route['add_to_cart'] = 'website_landing/Landing_controller/add_to_cart';
$route['reduce_count_in_view'] = 'website_landing/Landing_controller/reduce_count_in_view';
$route['get_whislist_detail'] = 'website_landing/Landing_controller/get_whislist_detail';
$route['Testimonial_page'] = 'panel/panel_controller/Testimonial_page';
$route['insert_testimonial'] = 'panel/panel_controller/insert_testimonial';
$route['Testimonial_list'] = 'panel/panel_controller/Testimonial_list';
$route['delete_testimonial/(:any)'] = 'panel/panel_controller/delete_testimonial/$1';
$route['view_testimonial_details/(:any)'] = 'panel/panel_controller/view_testimonial_details/$1';
$route['update_testimonial'] = 'panel/panel_controller/update_testimonial';
$route['whislist_list'] = 'website_landing/Landing_controller/whislist_list';
$route['delete_whislist'] = 'website_landing/Landing_controller/delete_whislist';
$route['get_whislist_datas'] = 'website_landing/Landing_controller/get_whislist_datas';
$route['search_whislist'] = 'website_landing/Landing_controller/search_whislist';
$route['add_cart_and_delete_whis'] = 'website_landing/Landing_controller/add_cart_and_delete_whis';
$route['search_cartlist'] = 'website_landing/Landing_controller/search_cartlist';
$route['coupon_form'] = 'panel/panel_controller/coupon_form';
$route['insert_coupon'] = 'panel/panel_controller/insert_coupon';
$route['coupon_list'] = 'panel/panel_controller/coupon_list';
$route['view_coupon_details/(:any)'] = 'panel/panel_controller/view_coupon_details/$1';
$route['delete_coupon/(:any)'] = 'panel/panel_controller/delete_coupon/$1';
$route['update_coupon'] = 'panel/panel_controller/update_coupon';
$route['login_website'] = 'website_landing/Landing_controller/login_website';
$route['login_into_website'] = 'website_landing/Landing_controller/login_into_website';
$route['create_account'] = 'website_landing/Landing_controller/create_account';
$route['create_account_page'] = 'website_landing/Landing_controller/create_account_page';
$route['logout'] = 'website_landing/Landing_controller/logout';
$route['send_email_to_subscribe'] = 'website_landing/Landing_controller/send_email_to_subscribe';
$route['apply_coupon_datas'] = 'website_landing/Landing_controller/apply_coupon_datas';
$route['get_update_coupon'] = 'website_landing/Landing_controller/get_update_coupon';
$route['remove_coupon_by_id'] = 'website_landing/Landing_controller/remove_coupon_by_id';
$route['get_applied_list'] = 'website_landing/Landing_controller/get_applied_list';
$route['get_min_coupon_price'] = 'website_landing/Landing_controller/get_min_coupon_price';







// $route['']