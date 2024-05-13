
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./sign-up-page.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />

    <style>
      @font-face {
        font-family: "Coco Gothic";
        src: url("./public/coco-gothic.regular.ttf");
        font-weight: 400;
      }
    </style>
  </head>
  <body>
    <div class="sign-up-page">
      <header class="header3">
        <div class="header-content2">
          <img
            class="surveylogo-1-icon2"
            loading="lazy"
            alt=""
            src="./public/surveylogo-1@2x.png"
          />

          <h1 class="survey-department2">Survey Department</h1>
          <nav class="nav-links2">
            <h1 class="home1" id="homeText">Home</h1>
            <h1 class="login2" id="loginText">Login</h1>
            <h1 class="about-us2" id="aboutUsText">About Us</h1>
          </nav>
        </div>
      </header>
      <main class="sign-up-sections">
        <div class="form-wrapper">
          <div class="form1">
            <div class="name-field">
              <h1 class="create-account">Create Account</h1>
              <form class="form2" action="includes/signup.inc.php" method="post">
                <div class="form-fields">
                  <div class="name">
                    <input class="name-child" placeholder="Name" name = "reserverName" type="text" />

                    <img
                      class="iconaccount"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                  <div class="email">
                    <input
                      class="email-address"
                      placeholder="Email address"
                      type="text"
                      name = "reserverEmail"
                    />

                    <img
                      class="iconaccount1"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                  <div class="password">
                    <input
                      class="password1"
                      placeholder="Password"
                      type="text"
                      name = "password"
                    />

                    <img
                      class="iconpassword"
                      alt=""
                      src="./public/iconpassword.svg"
                    />
                  </div>
                  <div class="confirm-password">
                    <input
                      class="confirm-password1"
                      placeholder="Confirm password"
                      type="text"
                      name = "passwordRepeat"
                    />

                    <img
                      class="iconpassword1"
                      alt=""
                      src="./public/iconpassword.svg"
                    />
                  </div>
                  <div class="personal-and-office-address">
                    <input
                      class="personal-and-office"
                      placeholder="Personal Address"
                      type="text"
                      name = "reserverAddressPersonal"
                    />

                    <img
                      class="iconaccount2"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                 </div>
                    <div class="personal-and-office-address">
                    <input
                      class="personal-and-office"
                      placeholder="Office Address"
                      type="text"
                      name = "reserverAddressOffice"
                    />

                    <img
                      class="iconaccount2"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                  <div class="personal-and-office-contact-no">
                    <input
                      class="personal-and-office1"
                      placeholder="Personal Contact No:"
                      type="text"
                      name = "reserverContactNoPersonal"
                    />

                    <img
                      class="iconaccount3"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                  <div class="personal-and-office-contact-no">
                    <input
                      class="personal-and-office1"
                      placeholder="Office Contact No:"
                      type="text"
                      name = "reserverContactNoOffice"
                    />

                    <img
                      class="iconaccount3"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                  <div class="service-status">
                    <input
                      class="service-status1"
                      placeholder="Service Status"
                      type="text"
                      name = "serviceStatus"
                    />

                    <img
                      class="iconaccount4"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                  <div class="service-branch">
                    <input
                      class="service-branch1"
                      placeholder="Service Branch"
                      type="text"
                      name = "serviceBranch"
                    />

                    <img
                      class="iconaccount5"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                  <div class="service-grade">
                    <input
                      class="service-grade1"
                      placeholder="Service Grade"
                      type="text"
                      name = "serviceGrade"
                    />

                    <img
                      class="iconaccount6"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                  <div class="nic-number">
                    <input
                      class="nic-number1"
                      placeholder="NIC Number"
                      type="text"
                      name = "reserverNic"
                    />

                    <img
                      class="iconaccount7"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                </div>
                
                <div >
                  <button class="search-flights-button1" id="button2" name="submit" type="Submit">Sign up</button>
    </div>
              </form>
            </div>
            <div class="form-child"></div>
            <h3 class="i-already-have-container" id="iAlreadyHave">
              <span>I already have an account. </span>
              <span class="login3">Login</span>
            </h3>
          </div>
        </div>
      </main>
    </div>

    <script>
      var homeText = document.getElementById("homeText");
      if (homeText) {
        homeText.addEventListener("click", function (e) {
          window.location.href = "./index.php";
        });
      }
      
      var loginText = document.getElementById("loginText");
      if (loginText) {
        loginText.addEventListener("click", function (e) {
          window.location.href = "./login.php";
        });
      }
      
      var aboutUsText = document.getElementById("aboutUsText");
      if (aboutUsText) {
        aboutUsText.addEventListener("click", function (e) {
          window.location.href = "./AboutUsPage.php";
        });
      }
      
      var iAlreadyHave = document.getElementById("iAlreadyHave");
      if (iAlreadyHave) {
        iAlreadyHave.addEventListener("click", function (e) {
          window.location.href = "./login.php";
        });
      }
      </script>
  </body>
</html>
  <?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo '<div class="error" id="errorMessage">Fill in the all fields</div>';
    }elseif($_GET["error"] == "invaliduid"){
        echo '<div class="error" id="errorMessage">invalid Username!</div>';
    }elseif($_GET["error"] == "invalidemail"){
        echo '<div class="error" id="errorMessage">invalid Email! </div>';
    }elseif($_GET["error"] == "passwordsdontmatch"){
        echo '<div class="error" id="errorMessage">Passwords not matching!</div>';
    }elseif($_GET["error"] == "stmtfail"){
        echo '<div class="error" id="errorMessage">Something went wrong!</div>';
    }elseif($_GET["error"] == "none"){
        echo '<div class="error" id="errorMessage">Acount Created</div>';
    }elseif($_GET["error"] == "usernametaken"){
        echo '<div class="error" id="errorMessage">Username/Email in use!</div>';
    }
  }
  ?>


<?php
    include_once "footer.php";
?>
<script>
    // Select the error message element
    var errorMessage = document.getElementById('errorMessage');
    // Check if the error message exists
    if(errorMessage) {
        // Set a timeout to hide the error message after 5 seconds
        setTimeout(function() {
            errorMessage.style.display = 'none';
        }, 5000); // 5000 milliseconds = 5 seconds
    }
</script>