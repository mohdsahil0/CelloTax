<?php

include('../mysql.php');

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents('php://input'), true);

$phone = $data['phone'];
$name = $data['name'];
$cat = $data['cat'];
$planname = $data['planname'];
$planamt = $data['planamt'];


$sql = "INSERT INTO `users` SET `phone`='".$phone."',`name`='".$name."'";
$result = mysqli_query($conn, $sql);

if($result && $cat != '' && $planname != '' && $planname != '') {
    // echo 'Data => '.$data;
    include_once('../mail2.php');
    echo json_encode(array('status' => true, 'message' => $name.' Registered Successfully at '.$phone.'!'));
} else {
    echo json_encode(array('status' => false, 'message' => 'Server Error!'));
}



?>