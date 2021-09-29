<?php
$servername = "localhost";
$username = "cellotax";
$password = "Cellotax@0511";
$dbname = 'cellotaxdb';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>