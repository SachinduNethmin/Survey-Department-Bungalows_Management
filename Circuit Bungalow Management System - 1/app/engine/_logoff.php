<?php 
require_once('_dbcon.php');
session_unset();
session_destroy();
echo 'User Logged Off';
echo "<br><a href='/' class='btn btn-primary'>Go Home</a>"
?>