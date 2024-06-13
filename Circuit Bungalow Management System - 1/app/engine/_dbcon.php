<?php

$servername = "127.0.0.1";
$username ="yougotnojams";
$password ="9293949597bt$";
$dbname = "userblog";
$port = 3307;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} //else { echo "success"; }

?>
