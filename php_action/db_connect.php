<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "if0_36382432_sjdb";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>