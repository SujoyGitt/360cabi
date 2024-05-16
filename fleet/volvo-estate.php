<?php include '../utils/config/config.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volvo Estate Car Hire | 360 Cabi</title>

    <!-- css link start here -->
    <?php include '../utils/header-link.php';?>
    <!-- css link end here -->
    <style>
      .banner{ background: linear-gradient(to top,rgba(0, 0, 0, 0.5607843137),rgba(0, 0, 0, 0.5764705882)),url(<?=$_baseurl?>assets/images/fleet/volvo-estate/volvo-estate-banner.webp);
  background-size: cover;
      }
    </style>
</head>

<body>
<?php include '../utils/header.php';?>
    <!-- banner section start here -->
    <section class="banner">
        <div class="container  d-flex  justify-content-between  align-items-center flex-wrap ">
            <div class="left col-12 text-center text-lg-start col-lg-6  col-xl-5 mb-4 mb-lg-0">
                <h1 class='mb-2'>Volvo Estate Car Hire - Premium Services</h1>
                <a href="<?=$_baseurl?>book-now/" class="commonbutton mt-4">Book Now</a>
            </div>
            <div class="right col-12  col-lg-6  col-xl-5 d-flex justify-content-center align-items-center justify-content-lg-start">
                <booking-widget primarycolor="black" masteraccountid="2085823" bookingpageurl="<?=$_baseurl?>book-now/"></booking-widget>
            </div>
        </div>
    </section>
    <!-- banner section end here -->
    <!-- car introduction section start here -->
    <section class="car-intro my-4">
      <div class="container flex-wrap d-flex pt-5 ">
        <div class="left col-12 col-lg-5 pe-5">
          <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/volvo-estate-img.webp" class="w-100" alt="">
        </div>
        <div class="right col-12 col-lg-7 mt-4 mt-lg-0">
          <p>We are offering Volvo Estate car hire services to give you a smooth and luxurious transportation experience. If you're looking for a sophisticated and spacious car rental option, our Volvo Estate car hire UK service has got you covered.</p>
          <ul class=" ps-0 available d-flex gap-2 my-4 flex-wrap ">
            <li class="d-flex justify-content-center align-items-center "><div class="text-center"><i class="fa-solid fa-user-group"></i><p>4 Passengers</p></div></li>
            <li class="d-flex justify-content-center align-items-center "><div class="text-center"><i class="fa-solid fa-suitcase-rolling"></i><p>4 Suitcases (23kg max)</p></div></li>
            <li class="d-flex justify-content-center align-items-center "><div class="text-center"><img src="<?=$_baseurl?>assets/images/wifi.webp" alt=""><p>Wifi Available</p></div></li>
            <li class="d-flex justify-content-center align-items-center "><div class="text-center"><img src="<?=$_baseurl?>assets/images/location.webp" alt=""><p>GPS Tracking</p></div></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- car introduction section end here -->
    <!-- car details section start here -->
    <secion class="car-detail py-5 my-5">
      <div class="container d-flex flex-wrap align-items-center">
        <div class="left col-12 col-lg-6">
          <h2 class="section-title">Volvo Estate Car Features and Specifications</h2>
          <p class="my-4">The Volvo Estate cars are equipped with strong and efficient engines. They offer a smooth and reliable driving experience. This makes them ideal for both long-distance journeys and city commutes. With a large boot and flexible interior configurations, Volvo Estates offers plenty of room for luggage, equipment, or anything else you need to carry.</p>
          <ul class="ps-0">
            <li>From premium leather seating to high-end finishes, the Volvo Estate provides a luxury experience at a cost-effective price. Our vehicles are regularly maintained to ensure they are in top condition for your rental.</li>
          </ul>
        </div>
        <div class="right carousel1 position-relative col-12 col-lg-6 ps-0 ps-lg-5 my-4 my-lg-0">
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper   mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/car-display1.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/car-display4.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/car-display3.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/car-display2.webp" />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper ">
            <div class="swiper-wrapper  d-flex  justify-content-center">
                <div class="swiper-slide">
                    <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/car-display1.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/car-display4.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/car-display3.webp" />
                </div>
                <div class="swiper-slide">
                    <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/car-display2.webp" />
                </div>
            </div>
        </div>
        <ul class="d-flex justify-content-center gap-5 contact mt-4">
          <li><p>CALL FOR TAXI</p><a href="">9876-543-210</a></li>
          <li><p>EMAIL US AT</p><a href="">360cabicar@helpdesk.com</a></li>
      </ul>
        </div>
      </div>
    </secion>
    <!-- car details section end here -->
        <!-- process section start here -->
        <section class="process">
    <h2 class="section-title text-center ">Benefits of Hiring a Volvo Estate Car</h2>
    <div class="container d-flex  align-items-center process-container mb-5 flex-wrap">
      <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">
        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?=$_baseurl?>assets/images/process-caricon.webp" alt=""></div>
        <div class="card-right"><h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?=$_baseurl?>assets/images/process-caricon.webp" alt=""></div><span>Spacious and Versatile</span></h3><p>Volvo Estates have roomy interiors and flexible seating. Space for passengers or extra luggage is available to meet your requirements.</p></div>
      </div>
      <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">
        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?=$_baseurl?>assets/images/process-mobile-icon.webp" alt=""></div>
        <div class="card-right"><h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?=$_baseurl?>assets/images/process-mobile-icon.webp" alt=""></div><span>Premium Comfort and Style</span></h3><p>Experience the luxury of the Volvo Estate's refined design, high-quality materials, and comfortable seating. </p></div>
      </div>
      <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">
        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?=$_baseurl?>assets/images/process-confirm.webp" alt=""></div>
        <div class="card-right"><h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?=$_baseurl?>assets/images/process-confirm.webp" alt=""></div><span>Advanced Safety and Technology</span></h3><p>Our fleet of Volvo Estate cars comes with a range of safety features, including collision avoidance systems, adaptive cruise control, and lane-keeping assist. </p></div>
      </div>
      
    </div>
  </section>
  <!-- process section end here -->
<!-- download section start here -->
 <?php include '../utils/download.php';?>

<!-- download section end here -->
<!-- provide section start here -->
<section class="provide py-5">
  <div class="container d-flex flex-wrap align-items-center">
      <div class="provide-left col-12 col-lg-6">
          <img src="<?=$_baseurl?>assets/images/fleet/volvo-estate/section-img3.webp" class="w-100 " alt="">
      </div>
      <div class="provide-right col-12 col-lg-6">
          <h2>How to Hire a Volvo Estate Car</h2>
          <p class="py-3">On our website or mobile app, you can select your rental period. Then choose your Volvo Estate model from our fleet to find the one that suits your style and needs. You can also reach out to our customer service team for assistance. We can arrange a chauffeur service if you prefer a stress-free ride. Once you've booked, simply pick up your Volvo Estate from our designated location, and you're ready to hit the road. </p>
          <a href="<?=$_baseurl?>book-now/" class="commonbutton providebtn">Book A Cab</a>
      </div>
  </div>
</section>
<!-- provide section end here -->
 <!-- testimonial start here -->
 <?php include '../utils/testimonial.php';?>
    <!-- testimonial end here -->
    <!-- footerr start here -->
    <?php include '../utils/footer.php';?>
    <!-- footerr end here -->
    <!-- footer link start here -->
    <?php include '../utils/footer-link.php';?>
    <!-- footer link start here -->
</body>

</html>