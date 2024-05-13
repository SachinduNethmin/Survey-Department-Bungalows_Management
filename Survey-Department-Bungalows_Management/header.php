<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            *{
            margin: 0;
            }  
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            }

            li {
            float: left;
            }

            li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            li a:hover {
            background-color: #111;
            }
            .error{
                color: red;
                border: 1px solid red;
                padding: 12px;
                font-size: 22px;
                margin-bottom: 10px;
            }
        </style>
        </head>
        <body>
            <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <?php
            if (isset($_SESSION["reserverName"])){
                echo '<li style="float:right"><a href="profile.php">'.$_SESSION["reserverName"] . ' ! </a></li>';
                echo '<li style="float:right"><a href="includes/logout.inc.php">Log out</a></li>';
            }else{
                echo '<li style="float:right"><a href="login.php">login</a></li>';
            }
            ?>
            </ul>
    <div class="container" style ="margin:20px";></div>