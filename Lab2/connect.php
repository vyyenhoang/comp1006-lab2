<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "mysql";
$dbname = "comp1006-2019";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
