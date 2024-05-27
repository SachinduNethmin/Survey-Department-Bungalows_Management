<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./AboutUsPage.css" />
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
    <div class="about-us-page">
      <header class="header5">
        <div class="header-content4">
          <img
            class="surveylogo-1-icon4"
            loading="lazy"
            alt=""
            src="./public/surveylogo-1@2x.png"
          />

          <h1 class="survey-department5">Survey Department</h1>
          <div class="nav-links4">
            <h2 class="home4" id="homeText">Home</h2>
            <h2 class="login4" id="loginText">Login</h2>
            <h2 class="login4" id="aboutUsText">About Us</h2>
          </div>
        </div>
      </header>
      <section class="a-job-is-container">
        <p class="a-job-is-worth-doing-together">
          <span class="span1"> </span>
          <span class="a-job-is"> A job is worth doing together </span>
        </p>
      </section>
      <h2 class="meet-the-dedicated">
        Meet the dedicated team , revolutionizing the way we farm with
        innovative, beautiful, and sustalnable solutions for the home.
      </h2>
      <img
        class="about-us-page-child"
        loading="lazy"
        alt=""
        src="./public/ellipse-1@2x.png"
      />

      <img
        class="mobile-icon"
        loading="lazy"
        alt=""
        src="./public/ellipse-2@2x.png"
      />

      <img
        class="about-us-page-item"
        loading="lazy"
        alt=""
        src="./public/ellipse-3@2x.png"
      />

      <h3 class="sachindu-student-01-container">
        <p class="sachindu">Sachindu</p>
        <p class="student-01">Student 01</p>
        <p class="undergraduate-computing-and">
          Undergraduate Computing and Information System
        </p>
      </h3>
      <h3 class="thashmika-student-02-container">
        <p class="thashmika">Thashmika</p>
        <p class="student-02">Student 02</p>
        <p class="undergraduate-computing-and1">
          Undergraduate Computing and Information System
        </p>
      </h3>
      <h3 class="nethmi-student-03-container">
        <p class="nethmi">Nethmi</p>
        <p class="student-03">Student 03</p>
        <p class="undergraduate-computing-and2">
          Undergraduate Computing and Information System
        </p>
      </h3>
      <footer class="desktop-17">
        <div class="desktop-17-inner">
          <div class="surveyor-generals-office-group">
            <h2 class="surveyor-generals-office-container3">
              <p class="surveyor-generals3">Surveyor General's</p>
              <p class="office3">Office</p>
            </h2>
            <div class="frame-wrapper5">
              <div class="frame-parent9">
                <div class="frame-wrapper6">
                  <div class="icon-map-marker-parent1">
                    <img
                      class="icon-map-marker3"
                      loading="lazy"
                      alt=""
                      src="./public/-icon-map-marker.svg"
                    />

                    <div class="no-150-bernad-container3">
                      <p class="no-150-bernad3">No 150, Bernad Soysa Road,</p>
                      <p class="narahenpita-colombo-053">
                        Narahenpita, Colombo 05,
                      </p>
                      <p class="srilanka3">Srilanka</p>
                    </div>
                  </div>
                </div>
                <div class="icon-device-mobile-phone-container">
                  <img
                    class="icon-device-mobile-phone3"
                    loading="lazy"
                    alt=""
                    src="./public/-icon-device-mobile-phone.svg"
                  />

                  <div class="frame">
                    <div class="div3">
                      <p class="p3">(+94 11) 236 9011</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-wrapper7">
              <div class="frame-parent10">
                <div class="icon-envelope-frame">
                  <img
                    class="icon-envelope3"
                    loading="lazy"
                    alt=""
                    src="./public/-icon-envelope.svg"
                  />
                </div>
                <div class="sgsurveygovlk3">sg@survey.gov.lk</div>
              </div>
            </div>
          </div>
        </div>
        <div class="desktop-7-wrapper1">
          <div class="desktop-73">
            <h2 class="office-hours7">
              <p class="office-hours8">Office Hours</p>
            </h2>
            <h3 class="monday-to-friday-container3">
              <p class="monday-to-friday3">Monday to Friday</p>
              <p class="am-to-4303">8:15 am to 4:30 pm</p>
            </h3>
          </div>
        </div>
        <div class="circle-icon-login-tab">
          <div class="get-social-container">
            <h2 class="get-social3">Get Social</h2>
            <div class="frame-wrapper8">
              <div class="icon-google-circled-group">
                <img
                  class="icon-google-circled3"
                  loading="lazy"
                  alt=""
                  src="./public/-icon-google-circled.svg"
                />

                <img
                  class="vector-icon2"
                  loading="lazy"
                  alt=""
                  src="./public/vector.svg"
                />
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script>
      var homeText = document.getElementById("homeText");
      if (homeText) {
        homeText.addEventListener("click", function (e) {
          window.location.href = "index.php";
        });
      }
      
      var loginText = document.getElementById("loginText");
      if (loginText) {
        loginText.addEventListener("click", function (e) {
          window.location.href = "./login.php";
        });
      }
      </script>
  </body>
</html>
