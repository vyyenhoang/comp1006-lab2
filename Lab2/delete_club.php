<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Delete Club | Vy Hoang</title>
</head>

<body>

<?php
require 'connect.php';
//authentication check
session_start();

	//retrieve the selected id from the url querystring and save it to a variable
	$club_id = $_GET['club_id'];
	
	//write and run the sql command
	$sql = "DELETE FROM clubs WHERE club_id = $club_id";
	$conn -> query($sql);
	
	//disconnect
	$conn = null;
	
	//redirect back to updated persons_table page
	header('location:lab2.php');



?>


</body>

</html>
