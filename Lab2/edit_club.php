<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Edit Club | Vy Hoang</title>
</head>

<?php
require 'connect.php';
//authentication check
session_start();



	//store the selected from the url
	$club_id = $_GET['club_id'];
	
	//write and run the sql select and store the results
	$sql = "SELECT * FROM clubs WHERE club_id = $club_id";
	$result = $conn -> query($sql);

	//store the name and email into variables
if (is_array($result) || is_object($row)) {

    foreach ($result as $row) {

        $club_name = $row['club_name'];
        $ground = $row['ground'];
//        $club_id = $row['club_id'];
    }
}
	//disconnect
	$conn = null;

?>

<body>

<form method="post" action="update_club.php">

<div>
	<label for="club_name">Club Name:</label>
	<input name="club_name" value="<?php echo $club_name; ?>" />
</div>
<div>
	<label for="ground">Ground:</label>
	<input name="ground" value="<?php echo $ground; ?>" />
</div>


<input  type ="hidden" name="club_id" value="<?php echo $club_id; ?>" />
<input type="submit" value="Save" name="submit" />

</form>

</body>

</html>
