<?php
$servername = "localhost";
$username = "movie";
$password = "123456";
$port = "3306";

//connect
$conn = new mysql($servername,$username,$password);

if($conn->connect_error){
	die("connection failed: ".$conn->connection_error);
}
echo "Connected successfully";
?>