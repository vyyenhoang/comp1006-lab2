<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Lab 2 | Vy Hoang</title>
</head>

<body>


<?php
require 'connect.php';
//check for authentication before we show any data
session_start();


	//set up query
	$sql = "SELECT * FROM clubs";
	
	//run the query and store the results
	$result = $conn->query($sql);
	
	//start our table
	echo '<table border="1"><tr><th>Club ID</th><th>Club</th><th>Ground</th>';
	
	//loop through the data and create a new row with 2 columns for each record
	foreach ($result as $row) {
		echo '<tr>
            <td>' . $row['club_id']  . '</td>
            <td>' . $row['club_name']  . '</td>
			<td>' . $row['ground']  . '</td>
			<td><a href="edit_club.php?club_id=' . $row['club_id'] . '">Update</a></td>
			<td><a href="delete_club.php?club_id=' . $row['club_id'] . '"
			onclick="return confirm(\'Are you sure you want to delete ' . $row['club_name'] . '?\');">Delete</a></td></tr>';
	}
	
	//close the table
	echo '</table>';
	
	//disconnect
	$conn = null;

?>

</body>

</html>
