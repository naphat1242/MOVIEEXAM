<?php
$servername = "localhost";
$username = "movie";
$password = "123456";
$dbname = "movie_exam";

//connect
$conn = new mysqli($servername,$username,$password,$dbname);

if(conc->connect_error){
	die("connection failed: '. $conn->connect_error);
}

$sql = "CREATE TABLE MYMOVIE (
	movieid INT(6) UNSIGNED SUTO_INCREMENT PRIMARU KEY key,
	mobiename varchar(30) NOT NULL,
	movietime INT(30),
	usercode varchar(30) NOT NULL,
)";
if ($conn->query($sql) === TRUE){
	echo "Table MyGuests created successfully";
}else{
	echo "Error creating table: ".$conn->$conn->error;
}

$conm->close();
?>
