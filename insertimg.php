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

$sql = "INSERT INTO myImgs (Artist, Image)
VALUES ('Taylor Swift', 'TS_LS.png')";

if(mysqli_query($link,$sql)){
	echo "Images inserted successfully";
}
else{
	echo "Error creating table: " . mysqli_error($link);
}

mysqli_close($link);

?>

</body>
</html>