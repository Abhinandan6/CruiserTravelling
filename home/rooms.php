<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Rooms</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="rooms.css" />
  <link rel="icon" href="../images/logo.jpg" />

  <style>
    section.gallery img {
      width: 100%;
      margin: 5px;
    }

    section.gallery .right {
      display: flex;
      justify-content: center;
      flex-direction: column;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    function validate() {
      if (document.querySelector(".input").value.length > 0) {
        alert("Room Sucessfully Booked");
      } else {
        alert("enter the details");
      }

    }
  </script>
</head>

<body>
  <header id="header">
    <div id="logo">
      <img src="../images/logo-bg.png" alt="" width="100px" />
    </div>

    <nav class="nav">
      <ul class="nav-links">
        <li class="nav-link"><a href="home.php">Home</a> </li>
        <li class="nav-link"><a href="home.php#rooms">Rooms</a></li>
        <li class="nav-link"><a href="home.php#premium">Premium</a></li>
        <li class="nav-link"><a href="../login.php">Sign-in</a> </li>
        <li class="nav-link"><a href="home.php#gallery">Gallery</a></li>
      </ul>
    </nav>
  </header>

  <section class="gallery">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <img src="../images/room1.jpg" alt="" />
        </div>

        <div class="col-md-6 right">
          <div class="row">
            <div class="col-md-6">
              <img src="../images/room2.jpg" alt="" />
            </div>

            <div class="col-md-6">
              <img src="../images/room2.jpg" alt="" />
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <img src="../images/room2.jpg" alt="" />
            </div>

            <div class="col-md-6">
              <img src="../images/room2.jpg" alt="" />
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 desc">
              <div class="location">
                <h3>Entire home in Meppadi, India</h3>
                <p>9 guests-2 bedrooms-4 beds-2 bathrooms</p>
              </div>
              <div class="description">
                <h4>Description</h4>
                <p>
                  Chat us for the best deals.We are flexible and can adjust to
                  your requirements.Very quiet place for families and
                  bachelors . Very near to Tourist attractions and very
                  beautiful views. Extremely clean and neat and we give 100%
                  seriousness for hygiene. Friendly place for foreigners.
                  entire property for bigger groups for small groups and
                  couples we can give you private area or rooms with 100%
                  privacy.
                </p>
              </div>
              <!-- <div class="services">
                  <h4>Services</h4>
                  <i class="fa-solid fa-wifi"> wifi</i><br />
                  <i class="fa-solid fa-tv"> tv</i><br />
                  <i class="fa-solid fa-bowl-food"> food</i><br />
                  <i class="fa-solid fa-shower"> shower</i><br />
                </div>
            -->

              <div class="services">
                <h4>Services</h4>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-4">
                      <i class="fa-solid fa-wifi"> wifi</i><br />
                    </div>
                    <div class="col-md-4">
                      <i class="fa-solid fa-tv"> tv</i><br />
                    </div>
                    <div class="col-md-4">
                      <i class="fa-solid fa-bowl-food"> food</i><br />
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <i class="fa-solid fa-bed"> bedrooms</i><br />
                      <!-- <i class="fa-solid fa-wifi"> wifi</i><br /> -->
                    </div>
                    <div class="col-md-4">
                      <i class="fa-solid fa-water-ladder"> pool</i><br />
                      <!-- <i class="fa-solid fa-tv"> tv</i><br /> -->
                    </div>
                    <div class="col-md-4">
                      <i class="fa-solid fa-fan"> Air conditioner</i><br />
                      <!-- <i class="fa-solid fa-bowl-food"> food</i><br /> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 cards d-flex justify-content-center">
              <form action="" method="post">
                <div class="row">
                  <div class="card" style="width: 18rem">
                    <div class="card-body">
                      <h5 class="card-title">Diwali Offer!!!</h5>
                      <table>
                        <tr>
                          <td>
                            <label for="check_in">Check in :</label>
                          </td>
                          <td>
                            <input type="date" name="check_in" class="input" id="input" required />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="check_in">Check out :</label>
                          </td>
                          <td>
                            <input type="date" name="check_in" class="input" id="input" required />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="no_of_ppl">No. of people:</label>
                          </td>
                          <td>
                            <input type="number" name="no_of_ppl" class="input" id="input" required />
                          </td>
                        </tr>
                      </table>
                      <p class="card-text">
                        You can book your desied room by clicking this button
                      </p>
                      <button type="submit" class="btn  btn-danger" onclick="validate()">Book Now</button>
                      <hr class="featurette-divider" />
                      <p><b>Total Price :</b></p>
                      <h4><b>Rs 2599</b></h4>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="rooms" id="rooms">
    <h1 class="section-title">Reviews</h1>
    <p>
      Offering a range of exclusive experiences spanning splendid stays,
      exquisite dining and authentic wellness therapies from the iconic
      hospitality brand.
    </p>
    <div class="rooms-area d-flex justify-content-center" >
    <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-duration="1000">
        <img src="../images/jeff.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-duration="1000">
        <img src="../images/jeff.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-duration="1000">
        <img src="../images/jeff.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-duration="1000">
        <img src="../images/jeff.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-duration="1000">
        <img src="../images/jeff.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-duration="1000">
        <img src="../images/jeff.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </section>
  <section class="maps d-flex justify-content-center mt-4 mb-4">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62121.52702821606!2d75.7312487772996!3d13.313193406951262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbad762c8a889dd%3A0xb3cf49155294be16!2sChikkamagaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1700719038005!5m2!1sen!2sin"
      width="1080" height="720" style="border: 0" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

  <footer>
    <div class="container">
      <div class="left">
        <p style="margin-left: 10px">&copy; Company, Inc</p>
      </div>
      <div class="right">
        <ul>
          <li><a href="home.php">HOME</a></li>
          <li><a href="">PRICING</a></li>
          <li><a href="">FEATURES</a></li>
          <li><a href="">SIGNUP</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
<?php

?>