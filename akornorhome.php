<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="../EVPH-Project/assets/css/style.css" />
  <link rel="stylesheet" href="../EVPH-Project/assets/css/style1.css" />
  <link rel="shortcut icon" href="../EVPH-Project/assets/images/favicon.ico" type="image/x-icon">


  <title>Akornor Hub | Home</title>
</head>

<body>
  <div class="wrapper">
    <nav>
      <div class="nav-container animate-zoom-in duration-1000">
        <div class="nav-logo">
          <p>Akornor Hub</p>
        </div>
        <div class="nav-menu" id="navMenu">

          <ul>
            <li><a href="../EVPH-Project/view/menu.php" class="link active">Menu</a></li>
            <li><a href="#aboutus" class="link">About Us</a></li>
            <li><a href="#contactus" class="link">Contact Us</a></li>
          </ul>
        </div>
        <div class="nav-button">
          <a href="../EVPH-Project/view/akornorlogin.php">
            <button class="btn white-btn animate-zoom-in duration-1000" id="loginBtn">
              Log In
            </button>
          </a>
          <a href="../EVPH-Project/view/akornorsignup.php">
            <button class="btn animate-zoom-in duration-1000" id="signupBtn">
              Sign Up
            </button>
          </a>
        </div>
        <div class="search">
          <input type="search" placeholder="search foods" />
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </nav>

    <!-- Landing Page -->
    <section class="landingpage">
      <div class="content">
        <div class="heading" data-aos="fade-right" data-aos-duration="2000">
          <h1>Welcome to Akornor Hub!</h1>
          <p>
            Akornor has an amazing variety of dishes that consists of both local and continental choices.<br>
            It houses the Ashesi Pool Association which has competitive games every
            friday night and you can always play a round with your friends
          </p>
          <p>Place your Orders and check out the amazing food on our menu today</p>
          <p>Click on the preview to get a taste of our webApp services</p>

          <div class="button-container">
            <a href="../EVPH-Project/view/akornorsignup.php"><button class="btn" data-aos="fade-left"
                data-aos-duration="2000" data-aos-delay="00" data-aos-margin="">
                Get Started
              </button></a>
          </div>
        </div>

    </section>

    <section class="aboutus" id="aboutus">
      <div class="container">
        <img src="../EVPH-Project/assets/images/aboutus.png" data-aos="zoom-in-" data-aos-duration="2000" />
        <div class="aboutus-content">
          <h1 data-aos="fade-left" data-aos-duration="1000">About us</h1>
          <p data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            Nestled within the vibrant Ashesi University campus, Akornor Hub is
            more than just a restaurant—it's a space where flavor meets fun, and
            community comes alive. Whether you're looking for a place to unwind,
            enjoy a meal, or challenge your friends to a game of pool, Akornor
            Hub is the perfect spot to make memories.
          </p>
        </div>
      </div>
    </section>

    <section class="details-foods" id="details-foods">
      <div class="title">
        <h1 data-aos="zoom-in-up" data-aos-duration="1000">
          Why Choose Akornor Hub? </h1>
      </div>
      <div class="foods">
        <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <img src="../EVPH-Project/assets/images/Waakye.jpg" alt="Akornor Hub Pool Table" />
          <div class="description">
            <h1>A Variety of Cuisine:</h1>
            <p>
              <li>
                Savor the flavors of
                diverse, carefully curated dishes that cater to every palate.
              </li>
            </p>
          </div>
        </div>
        <div class="card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
          <img src="../EVPH-Project/assets/images/PoolTable.png" alt="Akornor Hub Pool Table" />
          <div class="description">
            <h1>The Ultimate Hangout Spot:</h1>
            <p>
              <li>
                <strong></strong> Enjoy a friendly game
                of pool or simply relax in our welcoming atmosphere.
              </li>
            </p>
          </div>
        </div>
        <div class="card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
          <img src="../EVPH-Project/assets/images/RestaurantSide.png" alt="" />
          <div class="description">
            <h1>Unmatched Convenience:</h1>
            <p>
              <li>
                Located right on campus,
                we're here to provide students, faculty, and visitors with
                delicious meals and a place to recharge.
              </li>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="contactus" id="contactus">
      <div class="container">

        <div class="contactus-content">
          <h1 data-aos="fade-left" data-aos-duration="1000">Visit Us Today</h1>
          <p data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            Step into Akornor Hub and experience the perfect blend of great
            food, entertainment, and community. We're open 24 hours and ready to
            welcome you with a smile.
          </p>
        </div>
        <div class="contactus-content">
          <h1 data-aos="fade-left" data-aos-duration="1000">Get in Touch</h1>
          <p data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            We'd love to hear from you! Reach out to us for any inquiries or
            feedback, or simply to say hello.
          </p>
          <ul class="contact-info">
            <li style="margin-bottom: 1em;">
              <ion-icon name="location-outline" class="contact-icon" style="margin-right: 1em;"></ion-icon>
              <span>Akornor Hub, Ashesi University, Berekuso, Ghana</span>
            </li>
            <li style="margin-bottom: 1em;">
              <ion-icon name="call-outline" class="contact-icon" style="margin-right: 1em;"></ion-icon>
              <span>+233 500 000 000</span>
            </li>
            <li>
              <ion-icon name="mail-outline" class="contact-icon" style="margin-right: 1em;"></ion-icon>
              <span>contact@akornorhub.com</span>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <footer class="footer">
    <p>&copy; 2024 Akornor Hub. All Rights Reserved.</p>
  </footer>
  <style>
    .footer {
      position: relative;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #722f37;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
  </style>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    AOS.init();
  </script>
  </div>
</body>

</html>