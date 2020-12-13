<?php
$server = "remotemysql.com";
$username = "ajmd18BDuK";
$password = "TEro6fE2x9";
$db       = "ajmd18BDuK";
//create connection
$conn = mysqli_connect($server,$username,$password,$db);

//check connection

if(!$conn){
  die('database is not connected:'.mysqli_connect_error());
}

//echo "connection successful";

?>
