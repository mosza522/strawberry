<?php
## Table ##
define('DB_PREFIX'			, 'tb_');
define('PAGEADMIN'			, 'backoffice.php');
define('WEB_PROJECT'		, 'Web Templates V 1');

## Path ##
define('SYSTEM_PATH'		,BASE_PATH		. DS . SYSTEM_DIR);
define('PLUNGIN_PATH'		,SYSTEM_PATH 	. DS . 'ck.plugin');
define('LIBRARIES_PATH'		,PLUNGIN_PATH 	. DS . 'libraries');
define('LOG_PATH'			,SYSTEM_PATH 	. DS . 'ck.logs');
define('TEMPLATES_PATH'		,PLUNGIN_PATH 	. DS . 'templates');

## URL ##
define('BASE_URL', '');
ini_set("log_errors" , "1");
ini_set("error_log" , LOG_PATH . DS . "log-php-".date('Y-m-d').".txt");


require SYSTEM_PATH . DS . 'general' . EXT;
require LIBRARIES_PATH . DS . 'class.database' . EXT;
$db		= new database();
?>