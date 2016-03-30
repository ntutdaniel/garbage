<?php
$host = "218.161.38.126";
$port = 3306;
$socket = "";
$user = "ilab";
$password = "Aa123!";
$dbname = "workforland";

$link = mysqli_connect($host, $user, $password, $dbname);
mysqli_query($link, "SET NAMES 'utf8'");

// Check connection
if (!($link))
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . '<br>';
?>