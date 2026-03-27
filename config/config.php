<?php
$configDB = array();
$configDB["host"] 		= "192.168.174.154";
$configDB["database"]	= "websitebanmaytinh";
$configDB["username"] 	= "root";
$configDB["password"] 	= "1234";
define("HOST", "192.168.174.154");
define("DB_NAME", "websitebanmaytinh");
define("DB_USER", "root");
define("DB_PASS", "1234");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
