<?php include 'utils/config/config.php';?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About-us /  360 cabi </title>



    <!-- css link start here -->

    <?php include 'utils/header-link.php';?>

    <!-- css link end here -->

    <style>
      .banner{
         background: linear-gradient(to top,rgba(0, 0, 0, 0.6607843137),rgba(0, 0, 0, 0.6764705882)),url(<?=$_baseurl?>assets/images/about-us-banner.webp);
         background-size: cover;
      }
    </style>

</head>



<body>

   <?php include 'utils/header.php';?>

    <!-- banner section start here -->

    <section class="banner">

        <div class="container  d-flex  justify-content-between  align-items-center flex-wrap ">

            <div class="left col-12 text-center text-lg-start col-lg-6  col-xl-5 mb-4 mb-lg-0">

                <h1>Best & Affordable Minicab Service in Buckinghamshire and Milton Keynes</h1>

                <p>Reliable transportation for you</p>

                <a href="<?=$_baseurl?>book-now/" class="commonbutton">Book Now</a>

            </div>

            <div class="right col-12  col-lg-6  col-xl-5 d-flex justify-content-center align-items-center justify-content-lg-start">

                <booking-widget primarycolor="black" masteraccountid="2085823" bookingpageurl="<?=$_baseurl?>book-now/"></booking-widget>

            </div>

        </div>

    </section>

    <!-- banner section end here -->

   

   <section class="intro">

    <div class="container d-flex flex-wrap align-items-center">

        <div class="left col-12 col-xl-6">

            <div class="left-one">

                <img src="<?=$_baseurl?>assets/images/about/about-intro-left-img1.webp" alt="">

            </div>

            <div class="left-two">

                <img src="<?=$_baseurl?>assets/images/about/about-intro-left-img2.webp" alt="">

            </div>

            <div class="left-three">

                <img src="<?=$_baseurl?>assets/images/about/about-intro-left-img3.webp" alt="">

                <div class="play">

                    <img src="<?=$_baseurl?>assets/images/playicon.webp" alt="">

                </div>

            </div>

            <div class="horizontal">

                <img src="<?=$_baseurl?>assets/images/welcome-horizontal.webp" alt="">

            </div>

            <div class="vertical">

                <img src="<?=$_baseurl?>assets/images/welcome-vertical.webp" alt="">

            </div>

        </div>

        <div class="right col-12 col-xl-6 ps-lg-5">

          <p>WELCOME TO 360CABICAR</p>

          <h2 class="section-title welcome-title">Who Are We?</h2>

          <p class="pb-4 pt-3 mb-0">You're seeking the top-notch and affordable minicab service in Buckinghamshire. Your search ends with 360cabi. We offer reliable and affordable minicab services tailored to your transportation needs. You're headed to the airport, an event, or just exploring the town. We're here to help.</p>

          <ul>

            <p class="pb-2">1. <b>Events:</b> Our minicabi are ideal for weddings, conferences, and nights out. Sit back and let us drive you anywhere.</p>

            <p class="pb-2">2. <b>Sightseeing:</b> Explore Buckinghamshire and the surrounding areas with ease. Our drivers will guide you to all the key sights, ensuring a memorable visit.</p>

          </ul>

          <ul class="d-flex justify-content-center gap-5 contact mt-4">

            <li><p>CALL FOR MINICAB</p><a href="">9876-543-210</a></li>

            <li><p>EMAIL US AT</p><a href="">360cabicar@helpdesk.com</a></li>

        </ul>

        </div>

        

    </div>

   </section>

         <!-- welcome section end here -->

  <!-- best services section start here -->

  <section class="best-services mb-5 py-5 ">

    <div class="container d-flex best-container   justify-content-between py-5 flex-wrap">

      <div class="best-left col-12 col-lg-5 ">

        <h2>Our Services</h2>

        <ul>

          <h3 class="d-flex gap-2 my-3"><a href="<?=$_baseurl?>services/airport-transfer-Buckingham/"><span>01.</span> Airport transfer buckinghamshire </a> <img src="<?=$_baseurl?>assets/images/double-greaterthan.webp" alt=""></h3>

          <h3 class="d-flex gap-2 my-3"><a href="<?=$_baseurl?>services/airport-transfer-milton-keynes/"><span>02.</span> Airport transfer milton keynes</a> <img src="<?=$_baseurl?>assets/images/double-greaterthan.webp" alt=""></h3>
          <h3 class="d-flex gap-2 my-3"><a href="<?=$_baseurl?>services/corporate-taxi-service/"><span>03.</span> Corporate Minicab services</a> <img src="<?=$_baseurl?>assets/images/double-greaterthan.webp" alt=""></h3>
          <h3 class="d-flex gap-2 my-3"><a href="<?=$_baseurl?>services/event-taxi-service/"><span>04.</span> Event Minicab services</a> <img src="<?=$_baseurl?>assets/images/double-greaterthan.webp" alt=""></h3>

        </ul>

      </div>

      <div class="best-right col-12 col-lg-7">

        <div class="right-img"><img src="<?=$_baseurl?>assets/images/best-service-right.webp" alt=""></div>

      </div>

      <div class="center-card">

        <p class="py-1"><b>Airport Transfer:</b> Get a ride to or from the airport without hassle. We offer prompt airport transfer service.</p>
        <p class="py-1"><b>Corporate Minicab Services:</b> Wow your clients and colleagues with our excellent minicabs when they are for meetings and events.</p>
        <p class="py-1"><b>Event Minicab Services:</b> We offer transportation for your concert, or night out. We ensure you arrive on time and stress-free.</p>

        <h3>CITY TRANSPORT</h3>

      </div>

    </div>

  </section>

  <!-- best services section end here -->

  <!-- process section start here -->

  <section class="process">

    <h2 class="section-title text-center "> Why Trust Us</h2>

    <div class="container d-flex  align-items-center process-container mb-5 flex-wrap">

      <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">

        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?=$_baseurl?>assets/images/process-caricon.webp" alt=""></div>

        <div class="card-right"><h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?=$_baseurl?>assets/images/process-caricon.webp" alt=""></div><span>Punctuality</span></h3><p>We understand the importance of being on time. That's why we strive to arrive promptly. We come for your scheduled pickups and drop-offs.</p></div>

      </div>

      <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">

        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?=$_baseurl?>assets/images/process-mobile-icon.webp" alt=""></div>

        <div class="card-right"><h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?=$_baseurl?>assets/images/process-mobile-icon.webp" alt=""></div><span>Affordability</span></h3><p>We believe that quality transportation shouldn't break the bank. That's why we offer competitive rates and transparent pricing with no hidden fees.</p></div>

      </div>

      <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">

        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?=$_baseurl?>assets/images/process-confirm.webp" alt=""></div>

        <div class="card-right"><h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?=$_baseurl?>assets/images/process-confirm.webp" alt=""></div><span>Professionalism</span></h3><p>Professionalism is our core value. It guides our drivers and our customer service team. You can trust us. We will provide polite and reliable service at every step.</p></div>

      </div>

      

    </div>

  </section>

  <!-- process section end here -->

<!-- download section start here -->
 <?php include 'utils/download.php';?>

<!-- download section end here -->

<!-- provide section start here -->

<section class="provide py-5">

  <div class="container d-flex flex-wrap align-items-center">

      <div class="provide-left col-12 col-lg-6">

          <img src="<?=$_baseurl?>assets/images/about/about-provide-left.webp" class="w-100 " alt="">

      </div>

      <div class="provide-right col-12 col-lg-6">

          <h2>Convenient Options for Airport Transfers, Events, and More</h2>

          <p class="py-3">Our minicab service in Buckinghamshire offers convenient options. They work for many occasions, including:Airport Transfers: Our airport transfers ensure quick pickups. They also ensure timely drop-offs. They make for a stress-free trip.</p>
          <p class="pb-3">Experience the convenience and reliability of our minicab service in Buckinghamshire for yourself. Book your ride with 360cabi today and enjoy a hassle-free transportation experience.</p>

          <a href="<?=$_baseurl?>book-now/" class="commonbutton providebtn">Book A Cab</a>

      </div>

  </div>

</section>

<!-- provide section end here -->



 <!-- testimonial start here -->

 <?php include 'utils/testimonial.php';?>

    <!-- testimonial end here -->

    <!-- footerr start here -->

    <?php include 'utils/footer.php';?>

    <!-- footerr end here -->

    <!-- footer link start here -->

    <?php include 'utils/footer-link.php';?>

    <!-- footer link start here -->

</body>



</html>