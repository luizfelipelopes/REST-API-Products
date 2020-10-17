<?php
/** Configuration File */

$urlDb = parse_url(getenv("CLEARDB_DATABASE_URL"));

define('HOST', $urlDb['host']);
define('DB', substr($urlDb['path'], 1));
define('USER', $urlDb['user']);
define('PASS', $urlDb['pass']);
define('DRIVE', 'mysql');



// define('HOST', '216.239.36.53');
// define('DB', 'api_db');
// define('USER', 'root');
// define('PASS', '12345');
// define('DRIVE', 'mysql');

$getUrl = explode('/', $_GET['url']);
