<?php
include('../mysql.php');

header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Origin: *');

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$json_array = array();

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - " . $row["phone"]. "<br>";
    $json_array[] = $row;
  }
}

echo json_encode($json_array);

// echo '<pre>';
// print_r($json_array);
// echo '</pre>';


mysqli_close($conn);
?>