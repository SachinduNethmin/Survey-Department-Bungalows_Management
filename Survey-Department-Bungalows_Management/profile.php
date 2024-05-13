<?php
    include_once "header.php";
?>
    <?php
    if (isset($_SESSION["reserverName"])) {
        echo "<br> reserverName: ".$_SESSION["reserverName"]."<br>".
        " Email: ". $_SESSION["reserverEmail"]. "<br> ".
        "reserverAddressPersonal: ".$_SESSION["reserverAddressPersonal"] . "<br>".
        "reserverAddressOffice: ".$_SESSION["reserverAddressOffice"] . "<br>".
        "reserverContactNoPersonal: ".$_SESSION["reserverContactNoPersonal"] . "<br>".
        "reserverContactNoOffice: ".$_SESSION["reserverContactNoOffice"] . "<br>".
        "serviceStatus: ".$_SESSION["serviceStatus"] . "<br>".
        "serviceBranch: ".$_SESSION["serviceBranch"] . "<br>".
        "serviceGrade: ".$_SESSION["serviceGrade"] . "<br>".
        "reserverNic: ".$_SESSION["reserverNic"] . "<br>";
    }else{
        echo 'user !';
    }
    
    
    ?>

<?php
    include_once "footer.php";
?>