<?php
/** Configuration File */

define('HOST', $_SERVER['REMOTE_ADDR']);
define('DB', 'api_db');
define('USER', 'root');
define('PASS', '12345');
define('DRIVE', 'mysql');

$getUrl = explode('/', $_GET['url']);
