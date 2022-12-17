<?php
$server = "sql.freedb.tech";
$username = "freedb_rootrating";
$password = "pWuESyCcC2e3n?a";
$db       = "freedb_rating";
//create connection
$conn = mysqli_connect($server,$username,$password,$db);

//check connection

if(!$conn){
  die('database is not connected:'.mysqli_connect_error());
}

//echo "connection successful";

?>
