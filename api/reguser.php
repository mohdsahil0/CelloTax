<?php
include('../mysql.php');

header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Origin: *');

$sql = "INSERT INTO `users` SET `phone`='',`name`=''";
$result = mysqli_query($conn, $sql);

$json_array = array();


?>