<?php

function emptyInput($reserverName, $reserverEmail, $password ,$passwordRepeat){
    $result;
    if (empty($reserverName) || empty($reserverEmail) || empty($password) || empty($passwordRepeat)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}
function invalidUid($reserverName){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $reserverName)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}
function invalidEmail($reserverEmail){
    $result;
    if (!filter_var($reserverEmail, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}
function passwordMatch($password , $passwordRepeat){
    $result;
    if ($password !== $passwordRepeat){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}
function uidExists($conn, $reserverName , $reserverEmail){
    $sql ="SELECT * FROM reservor WHERE  reserverName=? OR reserverEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $reserverName, $reserverEmail );
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $reserverName, $reserverEmail, $password ,$reserverAddressPersonal ,$reserverAddressOffice ,$reserverContactNoPersonal ,$reserverContactNoOffice, $serviceStatus, $serviceBranch ,$serviceGrade ,$reserverNic){
    $sql = "INSERT INTO reservor (reserverName, reserverEmail, password, reserverAddressPersonal, reserverAddressOffice, reserverContactNoPersonal, reserverContactNoOffice, serviceStatus ,serviceBranch, serviceGrade ,reserverNic) VALUES (?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location;../sign.php?error=stmtfailed");
        exit();
    }
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssssssssss", $reserverName , $reserverEmail ,$hashedpassword ,$reserverAddressPersonal ,$reserverAddressOffice ,$reserverContactNoPersonal ,$reserverContactNoOffice, $serviceStatus, $serviceBranch ,$serviceGrade ,$reserverNic);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../signup.php?error=none");
    exit();
}
function emptyInputLogin($reserverName, $password){
    $result;
    if ( empty($reserverName) || empty($password) ){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}
function LoginUser($reserverName, $password, $conn){
    $uidExists = uidExists($conn, $reserverName, $reserverName);
    if ($uidExists === false){
        header("location:../signup.php?error=wronglogin1");
        exit();
    }
    $passwordHashed = $uidExists["password"];
    $checkpassword = password_verify($password, $passwordHashed);
    if ($checkpassword === false){
        header('Location:../signup.php?error=wronglogin2');
        exit();
    } else if ($checkpassword === true){
        session_start();
        $_SESSION["reserverName"] = $uidExists["reserverName"];
        $_SESSION["reserverEmail"] = $uidExists["reserverEmail"];
        $_SESSION["reserverAddressPersonal"] = $uidExists["reserverAddressPersonal"];
        $_SESSION["reserverAddressOffice"] = $uidExists["reserverAddressOffice"];
        $_SESSION["reserverContactNoPersonal"] = $uidExists["reserverContactNoPersonal"];
        $_SESSION["reserverContactNoOffice"] = $uidExists["reserverContactNoOffice"];
        $_SESSION["serviceStatus"] = $uidExists["serviceStatus"];
        $_SESSION["serviceBranch"] = $uidExists["serviceBranch"];
        $_SESSION["serviceGrade"] = $uidExists["serviceGrade"];
        $_SESSION["reserverNic"] = $uidExists["reserverNic"];

        header("Location: ../index.php");
        exit();
    }
}
