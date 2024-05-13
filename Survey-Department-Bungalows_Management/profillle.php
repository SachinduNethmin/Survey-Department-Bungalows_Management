<?php
    include_once "header.php";
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cbb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT reserverName, reserverEmail, reserverAddressPersonal, reserverAddressOffice, reserverContactNoPersonal, reserverContactNoOffice, serviceStatus, serviceBranch, serviceGrade, reserverNic   FROM reservor";
$result = $conn->query($sql);

if ($result!== 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> reserverName: ". $row["reserverName"]."<br>".
        " Email: ". $row["reserverEmail"]. "<br> ".
        "reserverAddressPersonal: ".$row["reserverAddressPersonal"] . "<br>".
        "reserverAddressOffice: ".$row["reserverAddressOffice"] . "<br>".
        "reserverContactNoPersonal: ".$row["reserverContactNoPersonal"] . "<br>".
        "reserverContactNoOffice: ".$row["reserverContactNoOffice"] . "<br>".
        "serviceStatus: ".$row["serviceStatus"] . "<br>".
        "serviceBranch: ".$row["serviceBranch"] . "<br>".
        "serviceGrade: ".$row["serviceGrade"] . "<br>".
        "reserverNic: ".$row["reserverNic"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>


<?php
    include_once "footer.php";
?>