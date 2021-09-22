<?php
$servername = "localhost";
$username = "cellotax";
$password = "Cellotax@123";
$dbname = 'fzdb';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>