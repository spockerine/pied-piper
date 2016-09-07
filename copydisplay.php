<!DOCTYPE html>
<head></head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "piedpiper";
$db = "imgs";

if(isset($_GET['id']) != 0) {
     //connect to the db
     $link = mysql_connect("$servername", "$username", "$password")
     or die("Could not connect: " . mysql_error());

     // select our database
     mysql_select_db("$db") or die(mysql_error());

     // get the image from the db
     $sql = "SELECT image FROM test_image WHERE id=" .$_GET['id'] . ";";

     // the result of the query
     $result = mysql_query("$sql") or die("Invalid query: " . mysql_error());

     // set the header for the image
     //header("Content-type: image/jpeg");
     echo mysql_result($result, 0);

     // close the db link
     mysql_close($link);
 }
 else {
     echo 'Please use a real id number';
 }
?>


</body>
</html>