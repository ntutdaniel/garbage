<?php
require_once './conn.php';
session_start();

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = mysqli_query($conn, 'SELECT * FROM `imgur`');

while ($res = mysqli_fetch_row($query)) {
    $array[] = array("id" => $res[0], "pic" => $res[1]);
}
echo json_encode($array);

/*$sql = "DELETE FROM imgur WHERE id=4";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}*/

/*$sql = "INSERT INTO `imgur` (pic_add)
VALUES ('https://i.imgur.com/79I2eYt9.gif')";

if (!($conn->query($sql))) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
?>