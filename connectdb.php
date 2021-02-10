<?php
$servername = "localhost";
$username = "movie";
$password = "123456";
$port = "3306";

//connect
$conn = new mysqli($servername,$username,$password);

if($conn->connection_error){
	die("connection failed: ".$conn->connection_error);
}
echo "Connected successfully";
?>
