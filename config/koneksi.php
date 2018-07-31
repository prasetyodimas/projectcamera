<?php 

//define conection
$server    = "localhost";
$user      = "root";
$pass      = "";
$database  = "db_projectcamera";

$con  = mysqli_connect($server, $user,$pass, $database) or die ("SERVER DOWN");
$site = "http://127.0.0.13:8000/";

?>
