<!DOCTYPE html>
<head></head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "piedpiper";
$dbname = "imgs";
$link = mysqli_connect($servername, $username, $password, $dbname);
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}


// sql to create table
$sql = "CREATE TABLE myImgss (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Image blob NOT NULL,
Artist VARCHAR(30) NOT NULL
)";
if(mysqli_query($link,$sql)){
	echo "Table MySampleSongs created successfully";
}
else{
	echo "Error creating table: " . mysqli_error($link);
}

mysqli_close($link);

?>

</body>
</html>