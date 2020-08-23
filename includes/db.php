<?php ob_start();

// ENTER DATABASE CREDENTIALS
$db['db_host'] = "";
$db['db_user'] = "";
$db['db_pass'] = "";
$db['db_name'] = "";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}








?>