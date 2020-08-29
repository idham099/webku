<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']='welcome';

$route['login'] = 'login';

$route['dashboard'] = 'dashboard';

$route['blog'] = 'welcome/blog';
$route['blog/(:num)'] = 'welcome/blog/$1';

$route['kategori/(:any)'] = 'welcome/kategori/$1';
$route['kategori/(:any)/(:num)'] = 'welcome/kategori/$1/$2';

$route['search'] = 'welcome/search';
$route['search/(:any)'] = 'welcome/search/$1';
$route['search/(:any)/(:num)'] = 'welcome/search/$1/$2';

$route['page/(:any)'] = 'welcome/page/$1';

$route['(:any)'] = 'welcome/single/$1';

$route['404_override'] = 'welcome/notfound';
$route['translate_uri_dashes'] = FALSE;