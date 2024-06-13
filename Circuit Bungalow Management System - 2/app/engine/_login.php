<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="container">
  <?php 
  
  require_once('_dbcon.php');
    echo '';

  $email = $_POST['email'];
  $pword1 = $_POST['pword1'];
  $qry = "SELECT * from `user` WHERE `usersEmail` = '$email' AND `usersPwd1` = '$pword1'";


  $result = mysqli_query($conn, $qry);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      session_unset();
      // session_destroy();
      session_start();
      echo "<div class='alert alert-success' role='alert'>SUCCESSFULLY SIGNED IN!</div><br>";
      echo "<br><a href='\app\dashboard\index.php' class='btn btn-dark' style='width: 200px; height: 40px;'>GO TO PROFILE</a><br>";
      echo "<br><a href='/' class='btn btn-dark' style='width: 200px; height: 40px;'>GO TO HOME PAGE</a>";
    }
  } else {
      echo "<div class='alert alert-danger' role='alert'>Invalid username and/or password. Try again</div>";
  }

  mysqli_close($conn);



  ?>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>