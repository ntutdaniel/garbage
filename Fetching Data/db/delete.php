<?php
require_once './conn.php';
session_start();

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM imgur WHERE id= '$id'");
if (!$query) echo mysqli_error($conn);
else echo "success";
?>