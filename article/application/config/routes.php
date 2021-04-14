<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['posts/index'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

$route['default_controller'] = 'posts';

$route['penyewaan'] = 'penyewaan/index';
$route['penyewaan/create'] = 'penyewaan/create';
$route['penyewaan/edit'] = 'penyewaan/edit';

$route['contactus'] = 'contactus/index';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';

$route['(:any)'] = 'pages/view/$1';
$route['contactus'] = 'contactus/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



