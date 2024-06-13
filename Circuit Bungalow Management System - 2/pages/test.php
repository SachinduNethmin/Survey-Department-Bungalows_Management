<!DOCTYPE html>
<html>
<head>
    <title>The Book Blog</title>
    <link href="/app/pages/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing Script">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('resources/images/stays-section@3x.png');
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center center;
        }

        .form-section {
            position: relative;
            padding: 50px 0;
            margin-top: 0;
        }

        .form-background {
            background-image: url('resources/images/frame-38@3x.png'); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 50px 0;
        }

        .booking-form-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .booking-form {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 10px;
            border-radius: 25px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .booking-form select, .booking-form input, .booking-form button {
            border: none;
            outline: none;
            padding: 10px;
            margin: 0 5px;
            font-size: 16px;
            border-radius: 5px;
        }

        .booking-form select {
            flex: 1;
            border: 1px solid #ccc;
            padding-left: 30px;
            background: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/svgs/solid/home.svg') no-repeat 10px center;
            background-size: 20px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
        }

        .booking-form input[type="date"] {
            border: 1px solid #ccc;
        }

        .booking-form input[type="date"]:focus, .booking-form select:focus {
            border-color: #007bff;
        }

        .booking-form button {
            background-color: #000;
            color: #fff;
            cursor: pointer;
            border-radius: 25px;
        }

        .booking-form button:hover {
            background-color: #007bff;
        }

        .card-body {
            background-color: rgba(0, 0, 0, 0.12); 
            color: black; 
            height: 175px;
            
        }
        .card {
            background-color: transparent;
            border-radius: 25px; 
            overflow: hidden;
            width:auto;
        }

        .card-img-top {
            border-top-left-radius: 15px; 
            border-top-right-radius: 15px;
            width: 100%;
            height: 300px; 
        }

        .card-body h5 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: bolder;
        }

        .card-body p {
            font-family: Dancing Script;
            
        }
        .card a {
            text-decoration: none;
            color: black;
        }

    </style>
</head>
<body>
<?php ?>
  
<div class="form-section">
        <div class="form-background">
            <div class="booking-form-container">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> 
                <div class="booking-form">
                    <select name="circuitB">
                        <option value="" disabled selected>Select Circuit Bungalow</option>
                        <option value="bungalow1">Kuchchaveli Circuit Bungalow</option>
                        <option value="bungalow2">Anuradhapura Circuit Bungalow</option>
                        <option value="bungalow3">Diyathalawa Circuit Bungalow</option>
                        <option value="bungalow4">Nuwara Eliya Circuit Bungalow</option>
                        <option value="bungalow5">Girithale Circuit Bungalow</option>
                        <option value="bungalow6">Pasikudah Circuit Bungalow</option>
                        <option value="bungalow7">Jaffna Circuit Bungalow</option>
                        <option value="bungalow8">Ampara Circuit Bungalow</option>
                        <option value="bungalow9">Kataragama Circuit Bungalow</option>
                    </select>
                    <input type="date" placeholder="Check-in" name="checkin">
                    <input type="date" placeholder="Check-out" name="checkout">
                    <input type="text" placeholder="User" class="user-icon" name="visitor">
                    <button type="submit" name="submit"><i class="fas fa-search"></i> Check Availability</button>
                </div>
    </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                <a href="?page=location01">  
                    <img src="resources/images/cb/image@2x.png" class="card-img-top" alt="Kuchchaveli CB">
                </a>
                <div class="card-body">
                    <br>
                    <a href="?page=location01">  
                    <h5 class="card-title">Kuchchaveli Circuit Bungalow</h5>
                    </a>
                    <p class="card-text">Rs.600 | Rs.1200 | Rs.5000</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <a href="?page=location02">  
                <img src="resources/images/cb/listing-image@2x.png" class="card-img-top" alt="Anuradhapura CB">
                </a>
                <div class="card-body">
                    <br>
                    <a href="?page=location02"> 
                    <h5 class="card-title">Anuradhapura Circuit Bungalow</h5> 
                    </a>
                    <p class="card-text">Rs.600 | Rs.1200 | Rs.5000</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <a href="?page=location03"> 
                <img src="resources/images/cb/image-1@2x.png" class="card-img-top" alt="Diyathalawa CB">
                </a>
                <div class="card-body">
                    <br>
                    <a href="?page=location03"> 
                    <h5 class="card-title">Diyathalawa Circuit Bungalow</h5>
                    </a>
                    <p class="card-text">Rs.600 | Rs.1200 | Rs.5000</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <a href="?page=location04"> 
                <img src="resources/images/cb/image-2@2x.png" class="card-img-top" alt="NuwaraEliya CB">
                </a>
                <div class="card-body">
                    <br>
                    <a href="?page=location04"> 
                    <h5 class="card-title">Nuwara Eliya Circuit Bungalow</h5>
                    </a>
                    <p class="card-text">Rs.600 | Rs.1200 | Rs.5000</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <a href="?page=location05"> 
                <img src="resources/images/cb/image-3@2x.png" class="card-img-top" alt="Girithale CB">
                </a>
                <div class="card-body">
                <br>
                    <a href="?page=location05"> 
                    <h5 class="card-title">Girithale Circuit Bungalow</h5>
                    </a>
                    <p class="card-text">Rs.600 | Rs.1200 | Rs.5000</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <a href="?page=location06"> 
                <img src="resources/images/cb/image-4@2x.png" class="card-img-top" alt="Pasikudah CB">
                </a>
                <div class="card-body">
                <br>
                    <a href="?page=location06"> 
                    <h5 class="card-title">Pasikudah Circuit Bungalow</h5>
                    </a>
                    <p class="card-text">Rs.600 | Rs.1200 | Rs.5000</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <a href="?page=location07"> 
                <img src="resources/images/cb/image-5@2x.png" class="card-img-top" alt="Jaffna CB">
                </a>
                <div class="card-body">
                <br>
                    <a href="?page=location07"> 
                    <h5 class="card-title">Jaffna Circuit Bungalow</h5>
                    </a>
                    <p class="card-text">Rs300 | Rs.1000</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <a href="?page=location08"> 
                <img src="resources/images/cb/image-2@2x.png" class="card-img-top" alt="Ampara CB">
                </a>
                <div class="card-body">
                <br>
                    <a href="?page=location08"> 
                    <h5 class="card-title">Ampara Circuit Bungalow</h5>
                    </a>
                    <p class="card-text">Rs.300 | Rs.500 | Rs.1200</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <a href="?page=location09"> 
                <img src="resources/images/cb/image-7@2x.png" class="card-img-top" alt="Kataragama CB">
                </a>
                <div class="card-body">
                <br>
                    <a href="?page=location09"> 
                    <h5 class="card-title">Kataragama Circuit Bungalow</h5>
                    </a>
                    <p class="card-text">Rs.300 | Rs.500 | Rs.1000</p>
                </div>
                </div>
            </div>
            
        </div>
    </div>

    <br>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
<?php

require_once("../app/engine/_dbcon.php");

if (isset($_POST['submit'])) {

$circuitB = $_POST['circuitB'];
$checkin = date($_POST['checkin']);
$checkout = date($_POST['checkout']);


//echo $checkin .'-'. $checkout;


$qry = "SELECT circuitB, checkin, checkout FROM check_avail 
        WHERE circuitB = '$circuitB' AND checkin = '$checkin' AND checkout = '$checkout'";

$res = $conn->query ($qry);

if (mysqli_num_rows($res) > 0) {

echo "<script>alert('Selected Date Range is Reserved. Please Select Other Date Range !!');</script>";

} else {

echo "<script>alert('Selected Date Range is Available.. Please Continue'); windows.location.href='./index.php'</script>";

}
}



 ?>