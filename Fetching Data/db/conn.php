<?php
$host = "ja-cdbr-azure-west-a.cloudapp.net";
$port = 3306;
$socket = "";
$user = "bc01ae57c9771a";
$password = "4e81aa21";
$dbname = "f2e";

$link = mysqli_connect($host, $user, $password, $dbname);
mysqli_query($link, "SET NAMES 'utf8'");

// Check connection
if (!($link))
    echo "Failed to connect to MySQL: " . mysqli_connect_error() . '<br>';
else
    echo "Success to connect to MySQL" . '<br>';
?>