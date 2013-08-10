<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
$config['module']['ajax_online'] = array
(
    'module' => "Ajax_online",
    'name' => "Ajax Online Visitor counter",
    'description' => "Ajax module what count the online visitors",
    'author' => "adamos42",
    'version' => "0.1",
 
    // 'uri' should be the module's folder in lowercase.
    // From 1.0.3, it is not mandatory to set 'uri'.
    'uri' => 'ajax_online',
    'has_admin'=> FALSE,
    'has_frontend'=> TRUE,
);
 
return $config['module']['ajax_online'];
