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


//// http://localhost/restful/trunk/index.php/api/books_articles/index/2/22
///*
//| -------------------------------------------------------------------------
//| Sample REST API Routes
//| -------------------------------------------------------------------------
//*/
// 重新定义路由规则了 可选 根据控制器中获取的参数 将不规则的路由 重新定义成规则的路由
//$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4 , api/example/users/3 转换成 api/example/users/id/3 形式
//$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8

// qiaokun test restful api
//$route['api/([a-z0-9]+)/(\d+)'] = "api/$1/index/$2";
//$route['api/([a-z0-9]+)/(\d+)/([a-z0-9]+)'] = "api/$1_$3/index/$2";
//$route['api/([a-z0-9]+)/(\d+)/([a-z0-9]+)/(\d+)'] = "api/$1_$3/index/$2/$4";
//$route['api/([a-z0-9]+)/(\d+)'] = "api/$1/index/$2";