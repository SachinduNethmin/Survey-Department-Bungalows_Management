<?php
$serverName="localhost";
$dbUsername="root";
$dbPassword ="";
$dbName ="cbb";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn){
    die("Connection faile d : " .mysqli_connect_error());
}