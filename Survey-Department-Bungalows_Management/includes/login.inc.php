<?php
if (isset($_POST["submit"])){
    $reserverName = $_POST["reserverName"];
    $password =$_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if  (emptyInputLogin($reserverName, $password) !== false){
        header('location: login.php?error=emptyinput');
        exit();
    }

    LoginUser($reserverName, $password, $conn);

}
else{
    header('Location:../login.php');
    exit();
}