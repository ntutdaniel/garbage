<?php
require_once 'conn.php';
session_start();

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$query = mysqli_query($conn, 'SELECT * FROM `imgur`');
$row = mysqli_num_rows($query);

while ($res = mysqli_fetch_row($query))
    $array[] = array("id" => $res[0], "pic" => $res[1]);

?>