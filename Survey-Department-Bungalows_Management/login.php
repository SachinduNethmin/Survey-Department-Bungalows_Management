<?php
    session_start();
?>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./LogInPage.css" />
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
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Alice:wght@400&display=swap"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Arapey:wght@400&display=swap"
  />
</head>
<body>
  <div class="log-in-page">
    <section class="header4">
      <div class="header-content3">
        <img
          class="surveylogo-1-icon3"
          loading="lazy"
          alt=""
          src="./public/surveylogo-1@2x.png"
        />

        <h1 class="survey-department4">Survey Department</h1>
        <div class="nav-links3">
          <h1 class="home3" id="homeText">Home</h1>
          <h1 class="sign-up" id="signUpText">Sign Up</h1>
          <h1 class="about-us3" id="aboutUsText">About Us</h1>
        </div>
      </div>
    </section>
    <section class="login-sections">
      <div class="login-form-container">
        <div class="form3">
          <div class="log-in">
            <h1 class="log-in1">Log in</h1>
            <div class="form4">
              <form class="form5" action="includes/login.inc.php" method="post">
                <div class="form-fields1">
                  <div class="email1">
                    <input
                      class="email-address1"
                      placeholder="Email address"
                      type="text"
                      id= "reserverName"
                      name = "reserverName"
                    />

                    <img
                      class="iconaccount8"
                      alt=""
                      src="./public/iconaccount.svg"
                    />
                  </div>
                  <div class="password2">
                    <input
                      class="password3"
                      placeholder="Password"
                      type="password"
                      id= "password"
                      name = "password"
                    />

                    <img
                      class="iconpassword2"
                      alt=""
                      src="./public/iconpassword.svg"
                    />
                  </div>
                </div>
                <div class="">
                <button class="search-flights-button2" id="button3" name="submit" type="Submit">Log in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="form-item"></div>
          <h3 class="dont-have-an-container" id="dontHaveAn">
            <span class="dont-have-an">Don’t have an account yet? </span>
            <span class="sign-up1">Sign up</span>
          </h3>
        </div>
      </div>
    </section>
  </div>

  <script>
    var homeText = document.getElementById("homeText");
    if (homeText) {
      homeText.addEventListener("click", function (e) {
        window.location.href = "index.php";
      });
    }
    
    var signUpText = document.getElementById("signUpText");
    if (signUpText) {
      signUpText.addEventListener("click", function (e) {
        window.location.href = "./signup.php";
      });
    }
    
    var aboutUsText = document.getElementById("aboutUsText");
    if (aboutUsText) {
      aboutUsText.addEventListener("click", function (e) {
        window.location.href = "./AboutUsPage.php";
      });
    }
    
    var dontHaveAn = document.getElementById("dontHaveAn");
    if (dontHaveAn) {
      dontHaveAn.addEventListener("click", function (e) {
        window.location.href = "./signup.php";
      });
    }
    </script>
</body>
</html>
  
  <?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo '<div class="error">Fill in the all fields</div>';
    }elseif($_GET["error"] == "wronglogin"){
        echo '<div class="error">invalid Details!</div>';
    }elseif($_GET["error"] == "stmtfail"){
        echo '<div class="error">Something went wrong!</div>';
    }
  }
  ?>

<?php
    include_once "footer.php";
?>