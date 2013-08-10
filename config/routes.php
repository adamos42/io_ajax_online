<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
$route['default_controller'] = "ajax_online";
$route['(.*)'] = "ajax_online/$1";
$route[''] = 'ajax_online/index';
