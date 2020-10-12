<?php
// var_dump($_SERVER['REMOTE_ADDR']);
// die;
// Get the requires necessaries
require 'config/config.php';
require 'model/Database.php';

if(isset($_GET)):
    require 'controller'. DIRECTORY_SEPARATOR . ucfirst($getUrl[0]) . '.php';
    require 'view'. DIRECTORY_SEPARATOR . $getUrl[0] . '.php';
endif;    

?>