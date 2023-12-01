<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUISER</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../images/logo.jpg">

  
</head>

<body>

  <!-- banner area  -->

  <section class="banner" id="banner">

    <!-- header area  -->

    <header class="header">

    <div id="logo">
        <img src="../images/logo-bg.png" alt="" width="100px" />
      </div>

      <nav class="nav">
        <ul class="nav-links">
          <li class="nav-link">Home</li>
          <li class="nav-link"><a href="#rooms">Rooms</a></li>
          <li class="nav-link"><a href="#premium">Premium</a></li>
          <li class="nav-link"><a href="../login.php">Sign-in</a> </li>
          <li class="nav-link"><a href="#gallery">Gallery</a></li>
        </ul>
      </nav>

    </header>

    <!-- banner details  -->

    <div class="banner-details">

      <div class="badge">
        Best of travel places for you from us
      </div>

      <h1 class="banner-heading" data-aos="fade-up" data-aos-duration="1000">
        Explore The Beauty of India
      </h1>

      <button class="btn">
        Explore Now
      </button>

      <div class="booking">

        <div class="inp">
          <label for="checkin">Check In Date</label>
          <input type="date" id="checkin">
        </div>

        <div class="inp">
          <label for="checkout">Check Out Date</label>
          <input type="date" id="checkout">
        </div>

        <div class="inp">
          <label for="adults">No of Adults</label>
          <input type="number" placeholder="0" id="adults">
        </div>

        <div class="inp">
          <label for="child">No of Children</label>
          <input type="number" placeholder="0" id="child">
        </div>

        <div class="inp">
          <button class="btn book-btn" onclick="#rooms" >
           <a href="#rooms">Check Now</a>
          </button>
        </div>


      </div>

    </div>


  </section>

  <!-- about us section  -->

  <section class="about" id="about">
    <i class="fa-solid fa-globe icon"></i>
    <p>
      <span class="highlight">INDIA-</span> The visitors are attracted to its natural beauty and cultural heritage. It
      has many historic sites as well like the Taj Mahal, Golden Temple, Red Fort, etc. With so much to offer, it's no
      surprise that tourism is one of the main sources of revenue for the country!
    </p>
  </section>

  <!-- rooms section  -->

  <section class="rooms" id="rooms">

    <h1 class="section-title">Best of Indian rooms and suites for you</h1>
    <p>
      Offering a range of exclusive experiences spanning splendid stays, exquisite dining and authentic wellness
      therapies from the iconic hospitality brand.
    </p>
    <div class="rooms-area">

      <div class="room" data-aos="fade-up" data-aos-duration="1000">
        <div class="room-img">
          <img class="room-image" src="../images/room1.jpg" alt="indian-room">
        </div>
        <div class="room-details">
          <h2>Deluxe Villa</h2>
          <h3>Rs 22999 / Night</h3>
          <p>
            The company itself is a very successful company. For us and similar offices times, but.
          </p>
          <button class="btn">
          <a href="rooms.php"> Know More</a>
          </button>
        </div>
      </div>

      <div class="room" data-aos="fade-up" data-aos-duration="1000">
        <div class="room-img">
          <img class="room-image" src="../images/room2.jpg" alt="indian-room">
        </div>
        <div class="room-details">
          <h2>Shared Hostel</h2>
          <h3>Rs2200 / Night</h3>
          <p>
            The company itself is a very successful company. For us and similar offices times, but.
          </p>
          <button class="btn">
          <a href="rooms.php"> Know More</a>
          </button>
        </div>
      </div>

      <div class="room" data-aos="fade-up" data-aos-duration="1000">
        <div class="room-img">
          <img class="room-image" src="../images/room3.jpg" alt="indian-room">
        </div>
        <div class="room-details">
          <h2>Lake Side Villa</h2>
          <h3>Rs5500 / Night</h3>
          <p>
            The company itself is a very successful company. For us and similar offices times, but.
          </p>
          <button class="btn">
          <a href="rooms.php"> Know More</a>
          </button>
        </div>
      </div>

      <div class="room" data-aos="fade-up" data-aos-duration="1000">
        <div class="room-img">
          <img class="room-image" src="../images/room4.jpg" alt="indian-room">
        </div>
        <div class="room-details">
          <h2>Private Villa</h2>
          <h3>Rs3350 / Night</h3>
          <p>
            The company itself is a very successful company. For us and similar offices times, but.
          </p>
          <button class="btn">
          <a href="rooms.php"> Know More</a>
          </button>
        </div>
      </div>

      <div class="room" data-aos="fade-up" data-aos-duration="1000">
        <div class="room-img">
          <img class="room-image rm" src="../images/room5.jpg" alt="indian-room">
        </div>
        <div class="room-details">
          <h2>Couple Suite</h2>
          <h3>Rs2000 / Night</h3>
          <p>
            The company itself is a very successful company. For us and similar offices times, but.
          </p>
          <button class="btn">
          <a href="rooms.php"> Know More</a>
          </button>
        </div>
      </div>

      <div class="room" data-aos="fade-up" data-aos-duration="1000">
        <div class="room-img">
          <img class="room-image rm" src="../images/room6.jpg" alt="indian-room">
        </div>
        <div class="room-details">
          <h2>Single Bed Room</h2>
          <h3>Rs1200 / Night</h3>
          <p>
            The company itself is a very successful company. For us and similar offices times, but.
          </p>
          <button class="btn">
          <a href="rooms.php"> Know More</a>
          </button>
        </div>
      </div>


    </div>

  </section>

  <!-- subscribe section  -->

  <section class="subscribe">

    <div class="sub-text">
      <div class="logo2">
        <p class="logo-text">CRUISER</p>
        <p class="logo-text">TRAVELS</p>
      </div>
      <p class="sub-desc">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam accusantium maxime non, consequatur adipisci
        earum velit, ullam ut debitis cupiditate facere illum amet vitae necessitatibus assumenda eligendi vero, error
        similique?
      </p>
    </div>

    <div class="sub-area">

      <h2>Subscribe To Newsletter</h2>
      <div class="sub-form">
        <input type="text" class="sub-inp" placeholder="Enter Email">
        <button class="btn">Subscribe</button>
      </div>
    </div>


  </section>


  <!-- banner for food  -->

  <section class="food">


    <div class="food-detail" data-aos="fade-up" data-aos-duration="1000">
      <h1 class="section-header">
        Best Foods from all of greece cuisines at one place and much more
      </h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam sint, vel excepturi harum eligendi a ipsam ad,
        nam impedit quas eveniet ipsa quaerat! Consequuntur ratione perferendis eius sed exercitationem fuga?
      </p>

      <button class="btn">
        Explore More Restaurants
      </button>
    </div>

  </section>


  <!-- premium rooms section  -->

  <section class="premium" id="premium">

    <h1 class="section-title">Some Premium Rooms That We Provide</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    </p>
    <div class="prooms-area">
      <div class="proom-img">
        <img class="proom-image"
          src="https://w0.peakpx.com/wallpaper/15/435/HD-wallpaper-mumbai-bombay-british-period-mumbai-sea-face-the-gateway-of-india-the-taj-victoria-thumbnail.jpg"
          alt="vertical-img">
      </div>
      <div class="proom-boxes">

        <div class="proom-box" data-aos="fade-up" data-aos-duration="1000">
          <h1 class="section-title">
            Premium Lake Side Room
          </h1>
          <h2>Rs3000</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus iure dolor ipsa quam aspernatur illum!
            Adipisci veniam molestias veritatis dicta eveniet, expedita laudantium ipsum saepe reiciendis quod, autem
            modi mollitia.
          </p>
          <button class="btn">
            Explore More Options
          </button>
        </div>

        <div class="proom-box" data-aos="fade-up" data-aos-duration="1000">
          <h1 class="section-title">
            Premium Lake Side Room
          </h1>
          <h2>Rs3000</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus iure dolor ipsa quam aspernatur illum!
            Adipisci veniam molestias veritatis dicta eveniet, expedita laudantium ipsum saepe reiciendis quod, autem
            modi mollitia.
          </p>
          <button class="btn">
            Explore More Options
          </button>
        </div>

        <div class="proom-box" data-aos="fade-up" data-aos-duration="1000">
          <h1 class="section-title">
            Premium Lake Side Room
          </h1>
          <h2>Rs3000</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus iure dolor ipsa quam aspernatur illum!
            Adipisci veniam molestias veritatis dicta eveniet, expedita laudantium ipsum saepe reiciendis quod, autem
            modi mollitia.
          </p>
          <button class="btn">
            Explore More Options
          </button>
        </div>

      </div>
    </div>
  </section>

  <!-- gallery  -->

  <section class="gallery" id="gallery">


    <img class="gall-img" data-aos="fade-up" data-aos-duration="1000" src="../images/gallery1.jpg" alt="gallery">
    <img class="gall-img" data-aos="fade-up" data-aos-duration="1000" src="../images/gallery2.jpg" alt="gallery">
    <img class="gall-img" data-aos="fade-up" data-aos-duration="1000" src="../images/gallery3.jpg" alt="gallery">
    <img class="gall-img" data-aos="fade-up" data-aos-duration="1000" src="../images/gallery4.jpg" alt="gallery">
    <img class="gall-img" data-aos="fade-up" data-aos-duration="1000" src="../images/gallery5.jpg" alt="gallery">
    <img class="gall-img" data-aos="fade-up" data-aos-duration="1000" src="../images/gallery6.jpg" alt="gallery">

  </section>





  <footer class="footer">
  <div id="logo">
        <img src="../images/logo-bg.png" alt="" width="100px" />
      </div>

      <nav class="nav">
        <ul class="nav-links">
          <li class="nav-link"><a href="#banner">Home</a></li>
          <li class="nav-link"><a href="#rooms">Rooms</a></li>
          <li class="nav-link"><a href="#premium">Premium</a></li>
          <li class="nav-link"><a href="../login.php">Sign-in</a> </li>
          <li class="nav-link"><a href="#gallery">Gallery</a></li>
        </ul>
      </nav>
  </footer>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>

<?php

?>