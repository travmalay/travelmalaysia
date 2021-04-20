<?php
$server = "remotemysql.com";
$username = "hEd6zOo7ab";
$password = "iPk8TenPYJ";
$db       = "hEd6zOo7ab";
//create connection
$conn = mysqli_connect($server,$username,$password,$db);

//check connection

if(!$conn){
  die('database is not connected:'.mysqli_connect_error());
}

//echo "connection successful";

?>
