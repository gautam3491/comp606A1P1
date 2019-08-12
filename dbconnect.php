<?php

error_reporting(0);

$host = "localhost";
$user = "myshop";
$psw = "myshop";
$database = "myshop";

$mysqli = mysqli_connect($host, $user, $psw, $database);

if ($mysqli == false){
    header("location : sitedown.php");
}

$mysqli -> autocommit(true);

error_reporting(E_ALL);


?>