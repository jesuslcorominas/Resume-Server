<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['service/academic_training/(:num)'] = 'service/get_academic_training/$1';
$route['service/experience/(:num)'] = 'service/get_experience/$1';
$route['service/knowledge/(:num)'] = 'service/get_knowledge/$1';
$route['service/language/(:num)'] = 'service/get_language/$1';
$route['service/other_data/(:num)'] = 'service/get_other_data/$1';
$route['service/library/(:num)'] = 'service/get_library/$1';
$route['service/other_training/(:num)'] = 'service/get_other_training/$1';
$route['service/personal_data/(:num)'] = 'service/get_personal_data/$1';
$route['service/project_image/(:num)'] = 'service/get_project_image/$1';
$route['service/project_library/(:num)'] = 'service/get_project_library/$1';
$route['service/project/(:num)'] = 'service/get_project/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
