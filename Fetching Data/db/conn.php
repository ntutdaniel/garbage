<?php
<<<<<<< HEAD
$host = "218.161.38.126";
$port = 3306;
$socket = "";
$user = "ilab";
$password = "Aa123!";
$dbname = "f2e";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!($conn))
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . '<br>';
else
    echo "Success to connect to MySQL" . '<br>';
?>