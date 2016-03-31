<?php
require_once './conn.php';
session_start();

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];
$pic_add = $_GET['pic_add'];

echo $id . "<br>";
echo $pic_add . "<br>";

$query = mysqli_query($conn, 'UPDATE imgur set pic_add = "'.$pic_add.'" where id = "'.$id.'"');
if (!$query) echo mysqli_error($conn);
else echo "success";
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);
$result = $mysqli->affected_rows;
$json_response = json_encode($result);
?>
