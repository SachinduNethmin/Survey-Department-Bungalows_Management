<?php
if (isset($_POST["submit"])){
    $reserverName = $_POST["reserverName"];
    $reserverEmail = $_POST["reserverEmail"];
    $password =$_POST["password"];
    $passwordRepeat =$_POST["passwordRepeat"];
    $reserverAddressPersonal = $_POST["reserverAddressPersonal"];
    $reserverAddressOffice = $_POST["reserverAddressOffice"];
    $reserverContactNoPersonal= $_POST["reserverContactNoPersonal"];
    $reserverContactNoOffice = $_POST["reserverContactNoOffice"];
    $serviceStatus = $_POST["serviceStatus"];
    $serviceBranch = $_POST["serviceBranch"];
    $serviceGrade = $_POST["serviceGrade"];
    $reserverNic = $_POST["reserverNic"];


    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInput($reserverName, $reserverEmail, $password ,$passwordRepeat);
    $invalidUid = invalidUid($reserverName);
    $invalidEmail = invalidEmail($reserverEmail);
    $passwordMatch = passwordMatch($password , $passwordRepeat);
    $uidExists = uidExists($conn, $reserverName, $reserverEmail);


    if  ($emptyInput !== false){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if  ($invalidUid !== false){
        header("Location:../signup.php?error=invaliduid");
        exit();
    }
    if  ($invalidEmail !== false){
        header("Location:../signup.php?error=invalidemail");
        exit();
    }
    if  ($passwordMatch !== false){
        header("Location:../signup.php?error=passworgdonotmatch");
        exit();
    }
    if  ($uidExists !== false){
        header("Location:../signup.php?error=notexist");
        exit();
    }
    createUser($conn, $reserverName, $reserverEmail, $password ,$passwordRepeat ,$reserverAddressPersonal ,$reserverAddressOffice ,$reserverContactNoPersonal ,$reserverContactNoOffice, $serviceStatus, $serviceBranch ,$serviceGrade ,$reserverNic);

}

else{
    header('Location:../login.php');
    exit();
}
