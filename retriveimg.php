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


$sql = "SELECT id, Artist, Image FROM myImgss";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. "<br>Artist : " . $row["Artist"]. " <br>Image: " . $row["Image"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($link);

?>

</body>
</html>