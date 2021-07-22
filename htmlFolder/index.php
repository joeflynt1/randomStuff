<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Flynt Portfolio</title>
    <link rel="stylesheet" href="styles.css" />

    <script src="https://kit.fontawesome.com/d053d2b919.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    /*<<!-- <link rel="manifest" href="/site.webmanifest"> -->> */
    
    <!-- <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    /> -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.6.347/build/pdf.min.js"></script>
  </head>
  <body>
    <?php
      //$con = mysqli_connect('localhost','root', '');
      //$db = mysqli_select_db($con , 'users');

      //if($con){
      //  echo 'successfully connected to database   ';
      //} else
      {
      //  die('error.');
      }

      //if($db){
      //  echo 'successfully found the database';
      //} else
      {
      //  die('error. database not found');
      }

  try{
      $myPDO = new PDO("pgsql: host = localhost;dbname=postgres", "root", "671319");
      echo"connected to database"; 
    }catch(PDOException $e){
      echo $e->getMessage();
    }

    ?>
    <br>
    <br>
    <?php
      //$query= mysqli_query($con, "SELECT * FROM data");

      //while($row = mysqli_fetch_array( $query))
      {
        //$userID = $row['UserID'];
        //$name= $row['Name'];
        //$username= $row['Username'];
        //$password= $row['password'];
        //echo 'user id: ' . $userID . ' name: '. $name . ' username: ' . $username . ' password: '. $password . '<br> ';
      }
    ?>
    <div id='weather__api'>
      <h1>Weather App</h1>
      <h2>Choose Location</h2>
      <span id="error"></span>
      <input type="text" name="city" id="city" placeholder="City Name">
      <button id="submitLocation">Find</button>
      <div id="show"></div>
    </div>
    <div>
      <B>To: </B> <span id="to"></span> <br>
      <B>From: </B><span id="from"></span><br>
      <b>Message: </b> <span id="message"></span> <br>
    </div>
    <!-- Navbar Section Begin-->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo">Joe Flynt</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="#home" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="#about" class="navbar__links" id="about-page">About</a>
          </li>
          <li class="navbar__item">
            <a href="#Projects" class="navbar__links" id="Projects-page">Projects</a
            >
          </li>
          <li class="navbar__btn">
            <a href="resume311.pdf" download="" class="button" id="resume">Download resume</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Navbar Section End -->
    <!-- Hero Section End -->
    <div class="hero" id="home">
      <div class="hero__container">
        <h1 class="hero__heading">I am <span>Joe Flynt</span></h1>
        <img class="portfolio__picture" src ="WIN_20210402_08_13_28_Pro.jpg"></img>
        <p class="hero__description">Experience in web design, web development, </p>
        <button class="main__btn"><a href="#">Explore</a></button>
      </div>
    </div>
    <!-- Hero Section End -->
    <!-- About Section Begin -->
    <div class="main" id="about">
      <h1 class="experience">Experience</h1>
      <div class="main__container">
        <div class="main__img--container">
          <model-viewer src="Computer.gltf" auto-rotate></model-viewer>
        </div> 
      </div>
      <div class="main__content"> 
        
        <div id="preview__resume" style="display: none" >
          <!-- place pdf viewing stuff here-->
          <embed src="resume311.pdf" width="800px" height="1000" />
        </div>
        <button class="main__btn" onclick="myFunction()"><p>Preview Resume</p></button>
      </div>
    </div>
    <!-- About Section End-->
    <!-- Project section begin -->

    
    <div class="Projects" id="Projects">
      <h1>Projects</h1>
      <div class="Projects__wrapper">
        <div class="Projects__card">
          <h2>Website Based</h2>
          <p>stuff</p>
          <div class="Projects__btn"><button>Take a look</button></div>
        </div>
        <div class="Projects__card">
          <h2>Advent of Code</h2>
          <p>stuff</p>
          <div class="Projects__btn"><button>Take a look</button></div>
        </div>
        <div class="Projects__card">
          <h2>Embedded Software</h2>
          <p>stuff </p>
          <div class="Projects__btn"><button>Take a look</button></div>
        </div>
        <div class="Projects__card">
          <h2>Miscellaneous</h2>
          <p>stuff</p>
          <div class="Projects__btn"><button>Take a look</button></div>
        </div>
      </div>
    </div>
    
    <!-- Project section end -->
    <!-- Footer begin -->
    <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
        </div>
      </div>
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo">Joe Flynt</a>
          </div>
          <p class="website__rights">© Joe Flynt 2021 All rights reserved</p>
          <div class="social__icons">
            <a href="https://www.linkedin.com/in/joe-flynt" class="social__icon--link"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.github.com/JoeFlynt" class="social__icon--link"><i class="fab fa-github"></i></a>
          </div>
        </div>
        <div class="credit__google">
          <p>Credit for the computer 3D model goes to Poly by Google</p> <br>
        </div>
        <div class="credit__bd"><p>Credit to Brian Design for the open source template <a href="https://www.youtube.com/channel/UCsKsymTY_4BYR-wytLjex7A" >youtube link</a></p></div>
      </section>
    </div>

    <!-- footer end -->

    <script src="jquery-3.6.0.js"></script>
    <script src="app.js"></script>
    <script>$.ajaxPrefilter(function( options, originalOptions, jqXHR ) {    options.async = true; });</script>
    </body>
</html>