<?php

$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_name = 'module29_db'; 

$link = mysqli_connect($host, $user, $password, $db_name);         
mysqli_query($link, "SET NAMES 'utf8'");  

$token = hash('gost-crypto', random_int(0,999999));

define('UPLOAD_MAX_SIZE', 1000000); // 1mb

?>