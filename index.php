<?php include "header.php" ?>
<br>
<!-- slider -->
<div class="container-fluid p-0 mb-5">
  <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="gallery/carousel-1.jpg" alt="Image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width: 700px;">
            <h1 class="section-title text-white text-uppercase " data-aos="fade-down" data-aos-duration="1400"><span class="text-warning">Scenic</span>Hotel</h1>
            <h3 class=" text-white mb-4 ctext">Stay once, carry memories forever</h3>
            <a href="room.php" class="btn btn-warning py-md-3 px-md-5 me-3 rounded-3" data-aos="fade-right" data-aos-duration="1400">Our Rooms</a>
            <a href="book.php" class="btn btn-warning py-md-3 px-md-5 rounded-3" data-aos="fade-left" data-aos-duration="1400">Book A Room</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100" src="gallery/SP2.jpeg" alt="Image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width: 700px;">
            <h1 class="section-title text-white text-uppercase " data-aos="fade-down" data-aos-duration="1400"><span class="text-warning">Scenic</span>Hotel</h1>
            <h3 class=" text-white mb-4 ctext">Merge yourself with luxury</h3>
            <a href="room.php" class="btn btn-warning py-md-3 px-md-5 me-3 rounded-3" data-aos="fade-right" data-aos-duration="1400">Our Rooms</a>
            <a href="book.php" class="btn btn-warning py-md-3 px-md-5 rounded-3" data-aos="fade-left" data-aos-duration="1400">Book A Room</a>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- slider -->

<!-- About Section Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-duration="1400">
      <div class="col-lg-6">
        <h6 class=" text-start text-warning text-uppercase">About Us</h6>
        <h1 class="mb-4">Welcome to <span class="text-warning text-uppercase">Scenic</span>HOTEL</h1>
        <p class="mb-4">Scenic Hotel Group is committed to providing quality, comfortable accommodation that represents excellent value for leisure and business travellers from and around the world. We extend genuine friendly Indian hospitality to every guest who comes through our doors.</p>
        <div class="row g-3 pb-4">
          <div class="col-sm-4 ">
            <div class="border rounded p-1">
              <div class="border rounded text-center p-4">
                <i class="fa fa-hotel fa-2x text-warning mb-2"></i>
                <h2 class="mb-1 counter" data-toggle="counter-up">120</h2>
                <p class="mb-0">Rooms</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="border rounded p-1">
              <div class="border rounded text-center p-4">
                <i class="fa fa-users-cog fa-2x text-warning mb-2"></i>
                <h2><span class="mb-1 counter" data-toggle="counter-up">250</span>
                  <span>+</span>
                </h2>
                <p class="mb-0">Staffs</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="border rounded p-1">
              <div class="border rounded text-center p-4">
                <i class="fa fa-users fa-2x text-warning mb-2"></i>
                <h2><span class="mb-1 counter" data-toggle="counter-up">999</span>
                  <span>+</span>
                </h2>
                <p class="mb-0">Customers</p>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-warning py-3 px-5 mt-2" href="room.php">OUR ROOMS</a>
      </div>
      <div class="col-lg-6">
        <div class="row g-3" data-aos="fade-left" data-aos-duration="1400">
          <div class="col-6 text-end">
            <img class="img-fluid rounded a1" src="https://themewagon.github.io/hotelier/img/carousel-2.jpg" style="margin-top: 25%;">
          </div>
          <div class="col-6 text-start">
            <img class="img-fluid rounded a2 " src="gallery/SP1.jpeg">
          </div>
          <div class="col-6 text-end">
            <img class="img-fluid rounded a3 " src="gallery/SP2.jpeg">
          </div>
          <div class="col-6 text-start">
            <img class="img-fluid rounded a4" src="SP3.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section Ends -->

<!-- Rooms -->
<div class="container mt-5">
  <h1 class="text-center " data-aos="fade-up" data-aos-duration="1400">EXPLORE OUR <span class="text-warning">ROOMS</span></h1>
  <hr>

  <div class="row">
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1700">
      <div class="card">
        <img src="gallery/presidential_suite.jpg" class="card-img-top" alt="Presidential Suite">
        <div class="card-body">
          <h5 class="card-title">Presidential Suite</h5>
          <p class="card-text">$249 per night</p>
          <a href="book.php" class="btn btn-warning">Book</a>
        </div>
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="2000">
      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4zIkYvo4L4cf5zv0iLg7ydU61pfxtnZNl3Q&s" class="card-img-top" alt="King Room">
        <div class="card-body">
          <h5 class="card-title ">King Room</h5>
          <p class="card-text">$199 per night</p>
          <a href="book.php" class="btn btn-warning">Book</a>
        </div>
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-duration="2400">
      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTdFR1fD9a1e7nVDwFntRotU-aLmbO57wvRg&s" class="card-img-top" alt="Queen Room">
        <div class="card-body">
          <h5 class="card-title">Queen Room</h5>
          <p class="card-text">$159 per night</p>
          <a href="book.php" class="btn btn-warning">Book</a>
        </div>
      </div>
    </div>
  </div><br>
  <div class="row" data-aos="fade-up" data-aos-duration="1400">
    <div class="col text-center">
      <a href="room.php"><button class="btn btn-warning mb-3">View All Rooms</button></a>
    </div>
  </div>
</div>

<!-- Rooms end -->

<!-- Facilities -->

<div class="container mt-5 mb-5" id="facilities">
  <div class="row" data-aos="fade-up" data-aos-duration="1400">
    <h1 class="mb-5 text-center text-uppercase">Explore Our <span class="text-warning text-uppercase">Services</span></h1>
    <hr>
  </div>
  <div class="row" data-aos="fade-up" data-aos-duration="1400">
    <div class="card1 col-lg-3 col-md-6 col-sm-12 pt-3 text-center hvr-float">
      <div class="card2 px-4 py-4">
        <h5><i class="fa fa-sharp fa-light fa-utensils display-3 mt-3 mb-3 text-warning"></i><br>Restaurant</h5>
        <p>The Hotel Majestic Restaurant offers its guests a unique and unforgettable dining and wine experience. With a magical blend of carefully studied details in a dream setting.</p>
      </div>
    </div>
    <div class="card1 col-lg-3 col-md-6 col-sm-12 pt-3 text-center hvr-float">
      <div class="card2 px-4 py-4 pb-4">
        <h5><i class="fa fa-sharp fa-light fa-table-tennis-paddle-ball fa-rotate-by display-3 mt-3 mb-3 text-warning" style="--fa-rotate-angle: 315deg;"></i><br>Sports</h5>
        <p>Sports facilities are also availale in our hotel such as Table-Tennis,Turf ground for cricket and A gym will neccesary machines and equipments</p>
      </div>
    </div>
    <div class="card1 col-lg-3 col-md-6 col-sm-12 pt-3 text-center hvr-float">
      <div class="card2 px-4 py-4 ">
        <h5><i class="fa fa-sharp fa-solid fa-car-side display-3 mt-3 mb-3 text-warning" style="color:aqua;"></i><br>Pick Up</h5>
        <p>A Vehicle operated by or on behalf of hotels, for the purpose of picking up and/or discharging hotel guests at the respective hotel or at the Airport and/or the Interlink
        </p>
      </div>
    </div>
    <div class="card1 col-lg-3 col-md-6 col-sm-12 pt-3 text-center hvr-float">
      <div class="card2 px-4 py-4 ">
        <h5><i class="fa fa-sharp fa-light fa-martini-glass display-3 mt-3 mb-3 text-warning"></i><br>Bar</h5>
        <p>In the dimmed light of the cocktail bar or under a terrace umbrella, they will delight you with their unpeccable cocktails, as well as with the tastiest appetizers in the city.</p>
      </div>
    </div>
  </div>
  <div class="row" data-aos="fade-up" data-aos-duration="1400">
    <div class="card1 col-lg-3 col-md-6 col-sm-12 pt-3 text-center hvr-float">
      <div class="card2 px-4 py-4">
        <h5><i class="fa fa-solid fa-spa display-3 mt-3 mb-3 text-warning"></i><br>Spa</h5>
        <p>The spa and wellness facilities are where people go to exercise and have special treatments in order to improve their health. The spa facility include a sauna and treatment rooms.</p>
      </div>
    </div>
    <div class="card1 col-lg-3 col-md-6 col-sm-12 pt-3 text-center hvr-float">
      <div class="card2 px-4 py-4 pb-4">
        <h5><i class="fa fa-duotone fa-solid fa-person-swimming display-3 mt-3 mb-3 text-warning"></i><br>Swimming Pool</h5>
        <p>More attractive, luxurious, and prestigious to customers and make prompt them to pay more money that of which they will want to do since it is seen as a unique experience.</p>
      </div>
    </div>
    <div class="card1 col-lg-3 col-md-6 col-sm-12 pt-3 text-center hvr-float">
      <div class="card2 px-4 py-4 ">
        <h5><i class="fa fa-sharp fa-solid fa-wifi display-3 mt-3 mb-3 text-warning"></i><br>Free WiFi</h5>
        <p>Free and fast WiFi enables guests to work from the hotel, which means they don't need to leave and spend money in a cafe, when they can stay and work from their room easily.
        </p>
      </div>
    </div>
    <div class="card1 col-lg-3 col-md-6 col-sm-12 pt-3 text-center hvr-float">
      <div class="card2 px-4 py-4 ">
        <h5><i class="fa fa-duotone fa-solid fa-bus display-3 mt-3 mb-3 text-warning"></i><br>Guided Tours</h5>
        <p>It offer guests a complete overview of the city's top attractions,historical sites,and cultural landmarks.They provide guests with useful insights and details about the place.</p>
      </div>
    </div>
  </div>
</div>
<!-- Facilities END -->


<!-- silding images -->
<div class="container mt-5">
  <h2 class="text-center font1" data-aos="fade-up" data-aos-duration="1400">Hotel<span class="text-warning"> Showcase </span></h2>
  <hr>

  <div class="slider1" data-aos="fade-up" data-aos-duration="1400">
    <div class="slide-track">
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-five.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-four.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-one.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-seven.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-six.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-three.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-two.jpg">
      </div>

      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-five.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-four.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-one.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-seven.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-six.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-three.jpg">
      </div>
      <div class="slide1">
        <img class="img1" src="https://demoxml.com/html/hotelbooking/img/showcase-slider-two.jpg">
      </div>

    </div>
  </div>
  <!-- end -->

  <!-- testimonial -->
  <section class="testimonial">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-duration="1400">
        <div class="col-lg-12 col-md-12 ">
          <div class="sec-heading text-center">
            <h1>Customer<span class="text-warning"> Says </span></h1>
            <hr>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-duration="1400">
        <div class="clients-carousel owl-carousel">
          <div class="single-box">
            <div class="img-area"><img alt="" class="img-fluid" src="https://images.pexels.com/photos/3525908/pexels-photo-3525908.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></div>
            <div class="content">
              <p>Room was just for my needs for this type of "staycation. Suprisingly fun jazz evening with good tapas table and nice wines.</p>
              <h4>Jason Doe</h4>
            </div>
          </div>
          <div class="single-box">
            <div class="img-area"><img alt="" class="img-fluid" src="https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></div>
            <div class="content">
              <p>Lovely hotel and staff. Breakfast was enjoyable and had a good selection with attentive staff. Received good recommendations for food. </p>
              <h4>Dave Wood</h4>
            </div>
          </div>
          <div class="single-box">
            <div class="img-area"><img alt="" class="img-fluid" src="https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></div>
            <div class="content">
              <p>The room was very spacious, clean, and had the amenities we needed. Breakfast was delicious; it was a very wide buffet spread.</p>
              <h4>Matt Demon</h4>
            </div>
          </div>
          <div class="single-box">
            <div class="img-area"><img alt="" class="img-fluid" src="https://images.pexels.com/photos/1270076/pexels-photo-1270076.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"></div>
            <div class="content">
              <span class="rating-star"><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></span>
              <p>I stayed at Scenic Hotel for a night, really enjoyed its location in the city centre where everything is within walking distance.</p>
              <h4>Jimmy Kimmel</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial end -->

  <?php include "footer.php" ?>