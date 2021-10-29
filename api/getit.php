<?php
include('../mysql.php');

header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Origin: *');

$sql = "SELECT id, amt, planname, content, services FROM itPlans";
$result = mysqli_query($conn, $sql);

$json_array = array();

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $i = 0;
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - " . $row["phone"]. "<br>";
    $json_array[$i]['id'] = $row['id'];
    $json_array[$i]['amt'] = $row['amt'];
    $json_array[$i]['planname'] = $row['planname'];
    $json_array[$i]['content'] = strip_tags(str_replace("</li>", "\n", $row['content']));
    $json_array[$i]['services'] = strip_tags(str_replace("</li>", "\n", $row['services']));
    $i++;
  }
}

echo json_encode($json_array);

// echo '<pre>';
// print_r($json_array);
// echo '</pre>';


mysqli_close($conn);
?>