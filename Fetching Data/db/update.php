<?php
require_once './conn.php';
session_start();

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$url = $_POST['url'];
$query = mysqli_query($conn, 'INSERT INTO `imgur` (pic_add) VALUES("' . $url . '")');
if (!$query) echo mysqli_error($conn);
else echo "success";
?>