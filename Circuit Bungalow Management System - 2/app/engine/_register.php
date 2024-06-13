<?php 
    $salt = "Niagara popo";

    $name = $_POST['usersName'];
    $email = $_POST['usersEmail'];
    $userid = $_POST['usersUiD'];
    $pword1 = $_POST['usersPwd1'];
    $pword2 = $_POST['usersPwd2'];

    $hash = md5($email.$salt);

    if ($pword1 === $pword2){
        require_once ('_dbcon.php');

        // Using prepared statements to prevent SQL injection
        $qry = $conn->prepare("INSERT INTO `user` (`UHash`, `usersName`, `usersEmail`, `usersUiD`, `usersPwd1`, `usersPwd2`) VALUES (?, ?, ?, ?, ?, ?)");
        $qry->bind_param("ssssss", $hash, $name, $email, $userid, $pword1, $pword2);

        if ($qry->execute()) {
            echo "<script>
            alert('Signed up successfully!');
            window.location.href = '../../pages/_home.php';
          </script>";
        } else {
            echo "Error: " . $qry->error;
        }

        $qry->close();
        $conn->close();
    } else {
        echo 'Password do not match! Try again';
    } 

    
?>

