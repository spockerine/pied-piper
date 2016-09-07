<!DOCTYPE html>
<html>

<head>

</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "piedpiper";
$link = mysqli_connect("localhost","root","piedpiper");
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Create database
$sql = "CREATE DATABASE imgs";
if(mysqli_query($link,$sql)){
	echo "Database created successfully";
}
else{
	echo "Error creating database: " . mysqli_error($link);
}

mysqli_close($link);


?>

</body>



</html>