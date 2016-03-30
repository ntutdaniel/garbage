<?php
require_once 'conn.php';
session_start();

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$email = $request->email;
$pw = md5($request->pw);
$query = mysqli_query($link, 'SELECT * FROM `user`');
$row = mysqli_num_rows($query);
/*if ($row === 1) {
    $array[] = array("status" => "success");

    $fetch = mysqli_fetch_assoc($query);
    $_SESSION['accountType'] = 'user';
    $_SESSION['userType'] = $fetch['authority'];
    $_SESSION['userName'] = $fetch['name'];
} else
    $array[] = array("status" => "error");
echo json_encode($array);*/


while ($res = mysqli_fetch_row($query))
    $array[] = array("id" => $res[0], "name" => $res[1], "email" => $res[5]);

?>