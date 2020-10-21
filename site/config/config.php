<?php
/** Configuration File */

$urlDb = parse_url(getenv("CLEARDB_DATABASE_URL"));

define('HOST', $urlDb['host']);
define('DB', substr($urlDb['path'], 1));
define('USER', $urlDb['user']);
define('PASS', $urlDb['pass']);
define('DRIVE', 'mysql');

// define('HOST', '127.0.0.1');
// define('DB', 'api_db');
// define('USER', 'apidb');
// define('PASS', '12345');
// define('DRIVE', 'mysql');

$getUrl = explode('/', $_GET['url']);
