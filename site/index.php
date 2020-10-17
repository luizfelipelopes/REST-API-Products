<?php
// var_dump($_SERVER['REMOTE_ADDR']);
// var_dump(phpinfo());
$urlDb = parse_url(getenv("CLEARDB_DATABASE_URL"));
var_dump($urlDb);
die;

// Get the requires necessaries
require 'config/config.php';
require 'model/Database.php';

// die;

if(isset($_GET)):
    require 'controller'. DIRECTORY_SEPARATOR . ucfirst($getUrl[0]) . '.php';
    require 'view'. DIRECTORY_SEPARATOR . $getUrl[0] . '.php';
endif;    

?>