<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map.js URI requests to specific controller functions.
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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'users/home';
$route['home'] = 'users/home/index';
$route['about'] = 'users/about/index';
$route['athletes']='users/athletes/index';
$route['athletes/(:any)'] = 'users/athletes/index/$1';
$route['video']='users/video/index';
$route['contact']='users/contact/index';
$route['team']='users/team/index';
$route['calendar']='users/calendar/index';
$route['myteam']='users/myteam/index';
$route['statistics']='users/statistics/index';
$route['registerevent']='coach/registerevent/index';
$route['singup']='users/userregister/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']='login/login/index';
$route['logout']='login/logout/index';
$route['verify']='login/verify/index';
$route['admin']='admin/admin/index';
$route['registerevent/(:any)'] = 'coach/registerevent/index/$1';
$route['editevent/(:any)']='coach/addEvent/update/$1';
$route['delevent/(:any)']='coach/addEvent/delete_event/$1';
$route['delteam/(:any)']='admin/admin/delete_team/$1';
$route['editteam/(:any)']='admin/admin/update_team/$1';
$route['event']='coach/addEvent/index';
$route['eventscomeing']='admin/admin/add_event';
$route['adminedit/(:any)']='admin/admin/update_events/$1';
$route['deleventadmin/(:any)']='admin/admin/delete_events/$1';
$route['descriptionath']='admin/admin/add_description';
$route['descriptionhome']='admin/admin/description_home';
$route['adminstatistic']='admin/admin/add_statistics';
$route['startlist/(:any)']='coach/RegisterEvent/startlist/$1';
$route['myteam']='coach/addathletes/index';


