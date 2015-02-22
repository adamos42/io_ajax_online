<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
$config['module']['io_online'] = array
(
    'module' => "io_online",
    'name' => "Ajax Online Visitor counter",
    'description' => "Ajax module what count the online visitors",
    'author' => "Adam Liszkai <contact@liszkaiadam.hu>",
    'version' => "0.1.0",
    
    'uri' => 'io_online',
    'has_admin'=> FALSE,
    'has_frontend'=> TRUE,
);
 
return $config['module']['io_online'];
