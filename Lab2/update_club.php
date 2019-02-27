<html>
<body>

<?php
require 'connect.php';

	$club_name = mysqli_real_escape_string($conn, $_POST['club_name']); //filter special character, only string
	$ground = mysqli_real_escape_string($conn, $_POST['ground']);;
	$club_id = $_POST['club_id'];
	
	if (is_numeric($club_id)) {
		$sql = "UPDATE clubs SET club_name = '$club_name', ground = '$ground' WHERE club_id = $club_id";
		mysqli_query($conn, $sql) or die('Error updating database.');
		mysqli_close($conn);
  
		header('Location: lab2.php');
	}
	else {
		echo 'Invalid club ID.  Click <a href="javascript:history.go(-1)">HERE</a> to go back.';
	}
?>
</body>
</html>