<?php
    session_start();
?><html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./index.css" />
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
  <div class="homepage">
    <header class="header">
      <div class="header-content">
        <img
          class="surveylogo-1-icon"
          loading="lazy"
          alt=""
          src="./public/surveylogo-1@2x.png"
        />

        <h1 class="survey-department">Survey Department</h1>
        <nav class="nav-links">
          <h2 class="home" id="homeText">Home</h2>
          
          <h2 class="about-us" id="aboutUsText">About Us</h2>
          <?php
    if (isset($_SESSION["reserverName"])) {
        echo '<div class="username-container" onclick="toggleLogout()">' . $_SESSION["reserverName"] . ' <span class="logout-text" id="logoutText"><a id="link" href="includes/logout.inc.php" >Logout</a></span></div>';
    } else {
        echo '<h2 class="login" id="loginText">Login</h2>';
    }
    ?>
        </nav>
      </div>
    </header>
    <div class="hero-container">
      <div class="hero-container-inner">
        <div class="form-wrapper">
          <div class="form">
            <div class="circuit-bungalow">
              <input
                class="location-field"
                placeholder="circuit bunglow"
                type="text"
              />

              <img class="iconhome" alt="" src="./public/iconhome.svg" />
            </div>
            <div class="grouped">
              <div class="dates-field">
                <div class="label">Check-in</div>
                <div class="icon">
                  <img
                    class="calendartodayfilled-icon"
                    alt=""
                    src="./public/calendartodayfilled.svg"
                  />
                </div>
              </div>
              <div class="dates-field1">
                <div class="label1">Check-out</div>
                <div class="icon1">
                  <img
                    class="calendartodayfilled-icon1"
                    alt=""
                    src="./public/calendartodayfilled.svg"
                  />
                </div>
              </div>
              <div class="dates-field2">
                <div class="label2">User</div>
                <img class="iconuser" alt="" src="./public/iconuser.svg" />
              </div>
            </div>
            <div class="search-button">
              <img class="iconsearch" alt="" src="./public/iconsearch.svg" />

              <div class="button">Check Availability</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <main class="stays-section">
      <section class="homes">
        <div class="listing-item" id="listingItemContainer">
          <img
            class="image-icon"
            loading="lazy"
            alt=""
            src="./public/image@2x.png"
          />

          <div class="item-details">
            <div class="listing-info">
              <div class="listing-cont">
                <div class="listing-title">Kuchchaveli Circuit Bungalow</div>
              </div>
            </div>
            <div class="bottom-container">
              <div class="price-per-night">
                <div class="price">Rs.600 | Rs.1200 | Rs.5000</div>
              </div>
            </div>
          </div>
        </div>
        <div class="listing-item1">
          <img
            class="listing-image-icon"
            loading="lazy"
            alt=""
            src="./public/listing-image@2x.png"
          />

          <div class="item-details1">
            <div class="listing-info1">
              <div class="listing-cont1">
                <div class="listing-title1">
                  Anuradhapura Circuit Bungalow
                </div>
              </div>
            </div>
            <div class="bottom-container1">
              <div class="price-per-night1">
                <div class="price1">Rs.600 | Rs.1200 | Rs.5000</div>
              </div>
            </div>
          </div>
        </div>
        <div class="listing-item2">
          <img class="image-icon1" alt="" src="./public/image-1@2x.png" />

          <div class="item-details2">
            <div class="listing-info2">
              <div class="listing-cont2">
                <div class="listing-title2">Diyathalawa Circuit Bungalow</div>
              </div>
            </div>
            <div class="bottom-container2">
              <div class="price-per-night2">
                <div class="price2">Rs.600 | Rs.1200 | Rs.5000</div>
              </div>
            </div>
          </div>
        </div>
        <div class="listing-item3">
          <img class="image-icon2" alt="" src="./public/image-2@2x.png" />

          <div class="item-details3">
            <div class="listing-info3">
              <div class="listing-cont3">
                <div class="listing-title3">
                  Nuwara Eliya Circuit Bungalow
                </div>
              </div>
            </div>
            <div class="bottom-container3">
              <div class="price-per-night3">
                <div class="price3">Rs.600 | Rs.1200 | Rs.5000</div>
              </div>
            </div>
          </div>
        </div>
        <div class="listing-item4">
          <img class="image-icon3" alt="" src="./public/image-3@2x.png" />

          <div class="item-details4">
            <div class="listing-info4">
              <div class="listing-cont4">
                <div class="listing-title4">Girithale Circuit Bungalow</div>
              </div>
            </div>
            <div class="bottom-container4">
              <div class="price-per-night4">
                <div class="price4">Rs.600 | Rs.1200 | Rs.5000</div>
              </div>
            </div>
          </div>
        </div>
        <div class="listing-item5">
          <img class="image-icon4" alt="" src="./public/image-4@2x.png" />

          <div class="item-details5">
            <div class="listing-info5">
              <div class="listing-cont5">
                <div class="listing-title5">Pasikudah Circuit Bungalow</div>
              </div>
            </div>
            <div class="bottom-container5">
              <div class="price-per-night5">
                <div class="price5">Rs.600 | Rs.1200 | Rs.5000</div>
              </div>
            </div>
          </div>
        </div>
        <div class="listing-item6">
          <img class="image-icon5" alt="" src="./public/image-5@2x.png" />

          <div class="item-details6">
            <div class="listing-info6">
              <div class="listing-cont6">
                <div class="listing-title6">Jaffna Circuit Bungalow</div>
              </div>
            </div>
            <div class="bottom-container6">
              <div class="price-per-night6">
                <div class="price6">Rs300 | Rs.1000</div>
              </div>
            </div>
          </div>
        </div>
        <div class="listing-item7">
          <img class="image-icon6" alt="" src="./public/image-4@2x.png" />

          <div class="item-details7">
            <div class="listing-info7">
              <div class="listing-cont7">
                <div class="listing-title7">Ampara Circuit Bungalow</div>
              </div>
            </div>
            <div class="bottom-container7">
              <div class="price-per-night7">
                <div class="price7">Rs.300 | Rs.500 | Rs.1200</div>
              </div>
            </div>
          </div>
        </div>
        <div class="listing-item8">
          <img class="image-icon7" alt="" src="./public/image-7@2x.png" />

          <div class="item-details8">
            <div class="listing-info8">
              <div class="listing-cont8">
                <div class="listing-title8">Kataragama Circuit Bungalow</div>
              </div>
            </div>
            <div class="bottom-container8">
              <div class="price-per-night8">
                <div class="price8">Rs.300 | Rs.500 | Rs.1000</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="desktop-15">
      <div class="desktop-15-inner">
        <div class="surveyor-generals-office-parent">
          <h1 class="surveyor-generals-office-container">
            <p class="surveyor-generals">Surveyor General's</p>
            <p class="office">Office</p>
          </h1>
          <div class="frame-wrapper">
            <div class="frame-parent">
              <div class="frame-container">
                <div class="icon-map-marker-parent">
                  <img
                    class="icon-map-marker"
                    loading="lazy"
                    alt=""
                    src="./public/-icon-map-marker.svg"
                  />

                  <div class="no-150-bernad-container">
                    <p class="no-150-bernad">No 150, Bernad Soysa Road,</p>
                    <p class="narahenpita-colombo-05">
                      Narahenpita, Colombo 05,
                    </p>
                    <p class="srilanka">Srilanka</p>
                  </div>
                </div>
              </div>
              <div class="icon-device-mobile-phone-parent">
                <img
                  class="icon-device-mobile-phone"
                  loading="lazy"
                  alt=""
                  src="./public/-icon-device-mobile-phone.svg"
                />

                <div class="wrapper">
                  <div class="div">
                    <p class="p">(+94 11) 236 9011</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-div">
            <div class="frame-group">
              <div class="icon-envelope-wrapper">
                <img
                  class="icon-envelope"
                  loading="lazy"
                  alt=""
                  src="./public/-icon-envelope.svg"
                />
              </div>
              <div class="sgsurveygovlk">sg@survey.gov.lk</div>
            </div>
          </div>
        </div>
      </div>
      <div class="desktop-7-wrapper">
        <div class="desktop-7">
          <h1 class="office-hours">
            <p class="office-hours1">Office Hours</p>
          </h1>
          <h3 class="monday-to-friday-container">
            <p class="monday-to-friday">Monday to Friday</p>
            <p class="am-to-430">8:15 am to 4:30 pm</p>
          </h3>
        </div>
      </div>
      <div class="desktop-15-child">
        <div class="get-social-parent">
          <h1 class="get-social">Get Social</h1>
          <div class="icon-google-circled-parent">
            <img
              class="icon-google-circled"
              loading="lazy"
              alt=""
              src="./public/-icon-google-circled.svg"
            />

            <img
              class="vector-icon"
              loading="lazy"
              alt=""
              src="./public/vector.svg"
            />
          </div>
        </div>
      </div>
    </footer>
    <div class="location-details-container">
      <div class="desktop-16">
        <div class="frame-parent1">
          <div class="frame-parent2">
            <div class="icon-map-marker-group">
              <img
                class="icon-map-marker1"
                alt=""
                src="./public/-icon-map-marker.svg"
              />

              <div class="location-details-title">
                <div class="social-media-icons-container">
                  <div class="icon-device-mobile-phone-wrapper">
                    <img
                      class="icon-device-mobile-phone1"
                      alt=""
                      src="./public/-icon-device-mobile-phone.svg"
                    />
                  </div>
                  <img
                    class="icon-envelope1"
                    alt=""
                    src="./public/-icon-envelope.svg"
                  />
                </div>
              </div>
            </div>
            <div class="working-hours-details-title-parent">
              <div class="working-hours-details-title">
                <div class="no-150-bernad-container1">
                  <p class="no-150-bernad1">No 150, Bernad Soysa Road,</p>
                  <p class="narahenpita-colombo-051">
                    Narahenpita, Colombo 05,
                  </p>
                  <p class="srilanka1">Srilanka</p>
                </div>
                <div class="div1">
                  <p class="p1">(+94 11) 236 9011</p>
                </div>
              </div>
              <div class="sgsurveygovlk1">sg@survey.gov.lk</div>
            </div>
          </div>
          <h1 class="surveyor-generals-office-container1">
            <p class="surveyor-generals1">Surveyor General's</p>
            <p class="office1">Office</p>
          </h1>
        </div>
        <div class="desktop-7-container">
          <div class="desktop-71">
            <h1 class="office-hours2">
              <p class="office-hours3">Office Hours</p>
            </h1>
            <h3 class="monday-to-friday-container1">
              <p class="monday-to-friday1">Monday to Friday</p>
              <p class="am-to-4301">8:15 am to 4:30 pm</p>
            </h3>
          </div>
        </div>
        <div class="search-engine-and-network-icon-wrapper">
          <div class="search-engine-and-network-icon">
            <div class="get-social-wrapper">
              <h1 class="get-social1">Get Social</h1>
            </div>
            <div class="logo-with-working-hours-contai">
              <div class="icon-google-circled-wrapper">
                <img
                  class="icon-google-circled1"
                  alt=""
                  src="./public/-icon-google-circled-1.svg"
                />
              </div>
              <div class="icon-instagram-square-wrapper">
                <img
                  class="icon-instagram-square"
                  alt=""
                  src="./public/-icon-instagram-square.svg"
                />
              </div>
              <img class="network-icon" alt="" src="./public/vector-1.svg" />
            </div>
          </div>
        </div>
      </div>
    </div>
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
    
    var aboutUsText = document.getElementById("aboutUsText");
    if (aboutUsText) {
      aboutUsText.addEventListener("click", function (e) {
        window.location.href = "./AboutUsPage.php";
      });
    }
    
    var listingItemContainer = document.getElementById("listingItemContainer");
    if (listingItemContainer) {
      listingItemContainer.addEventListener("click", function (e) {
        window.location.href = "./PropertyDetails.php";
      });
    }
    </script>
</body>
</html>
<script>
    function toggleLogout() {
        var logoutText = document.getElementById('logoutText');
        logoutText.style.display = (logoutText.style.display === 'block') ? 'none' : 'block';
    }
</script>


<?php
    include_once "footer.php";
?>