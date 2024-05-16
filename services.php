<?php include 'utils/config/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>  Services | 360 cabi  </title>
        <!-- <meta name="description" content="Enjoy luxury travel with our London chauffeur service. At 360 cabi we provide professional drivers, premium vehicles, and personalized service. "/> -->
        <meta name="revisit-after" content="" />
        <link rel="canonical" href="https://360cabi.com/services/"/>
        <meta property="og:locale" content="en_GB" />
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="https://360cabi.com/assets/images/logo.webp"/>
        <meta property="og:title" content="London Chauffeur Service | 360 cabi " />
        <meta property="og:description" content=" Enjoy luxury travel with our London chauffeur service. At 360 cabi we provide professional drivers, premium vehicles, and personalized service. " />
        <meta property="og:url" content="https://360cabi.com/services/"/>
        <meta property="og:site_name" content="360 cabi" />
        <meta name="p:domain_verify" content=""/>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:description" content="Enjoy luxury travel with our London chauffeur service. At 360 cabi we provide professional drivers, premium vehicles, and personalized service." />
        <meta name="twitter:title" content="London Chauffeur Service | 360 cabi" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:image" content="https://360cabi.com/assets/images/logo.webp"/>
        <meta name="twitter:creator" content="360 cabi" />

    <!-- css link start here -->

    <?php include 'utils/header-link.php';?>



    <!-- css link end here -->

    <style>

      .fleet{
        background: transparent;
      }
.banner{ background: linear-gradient(to top,rgba(0, 0, 0, 0.5607843137),rgba(0, 0, 0, 0.5764705882)),url(<?=$_baseurl?>assets/images/service/service-main-banner.webp);
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

                <h1>Book our Reliable Services Anywhere, Anytime!</h1>

                <p>Reliable and efficient Minicab drivers</p>

                <a href="<?=$_baseurl?>book-now/" class="commonbutton">Book Now</a>

            </div>

            <div class="right col-12  col-lg-6  col-xl-5 d-flex justify-content-center align-items-center justify-content-lg-start">

                <booking-widget primarycolor="black" masteraccountid="2085823" bookingpageurl="<?=$_baseurl?>book-now/"></booking-widget>

            </div>

        </div>

    </section>

    <!-- banner section end here -->

<section class="service-cards my-5">

  <div class="container d-flex flex-wrap">
    <a href="<?=$_baseurl?>services/airport-transfer-buckingham/" class="col-12 d-block col-md-6 col-lg-4 px-3 mt-4">

      <div class="card ">

        <div class="card-img">

          <img src="<?=$_baseurl?>assets/images/service/service-card-img1.webp" class="w-100" alt="">

        </div>

        <div class="card-content p-3 py-2">

          <h3>Airport Transfer</h3>

          <p>Get a ride to or from the airport without hassle. We offer prompt airport transfer service.</p>

          <div class="d-flex justify-content-end mt-3"><img src="<?=$_baseurl?>assets/images/go-head.webp" alt=""></div>

        </div>

      </div>

    </a>

    <a href="<?=$_baseurl?>services/corporate-taxi-service/" class="col-12 d-block col-md-6 col-lg-4 px-3 mt-4">

      <div class="card ">

        <div class="card-img">

          <img src="<?=$_baseurl?>assets/images/service/service-card-img2.webp" class="w-100" alt="">

        </div>

        <div class="card-content p-3 py-2">

          <h3>Corporate Minicab Service</h3>

          <p>Wow your clients and colleagues with our excellent taxis. They are for meetings and events.</p>

          <div class="d-flex justify-content-end mt-3"><img src="<?=$_baseurl?>assets/images/go-head.webp" alt=""></div>

        </div>

      </div>

    </a>

    <a href="<?=$_baseurl?>services/event-taxi-service/" class="col-12 d-block col-md-6 col-lg-4 px-3 mt-4">

      <div class="card ">

        <div class="card-img">

          <img src="<?=$_baseurl?>assets/images/service/service-card-img3.webp" class="w-100" alt="">

        </div>

        <div class="card-content p-3 py-2">

          <h3>Event Minicab Service</h3>

          <p>We offer transportation for your wedding, concert, or night out. We ensure you arrive on time and stress-free.</p>

          <div class="d-flex justify-content-end mt-3"><img src="<?=$_baseurl?>assets/images/go-head.webp" alt=""></div>

        </div>

      </div>

    </a>
  </div>

</section>





<!-- download section start here -->
 <?php include 'utils/download.php';?>
<!-- download section end here -->

<!-- provide section start here -->

<section class="provide py-5">

  <div class="container d-flex flex-wrap align-items-center">

      <div class="provide-left col-12 col-lg-6">

          <img src="<?=$_baseurl?>assets/images/service/section-img.webp" class="w-100 " alt="">

      </div>

      <div class="provide-right col-12 col-lg-6">

          <h2>Why choose our Milton Keynes Minicab service?</h2>

          <p class="py-3">360 Cabi is your top choice. We offer reliable and easy transportation in Milton Keynes. We have a dedicated team of professionals at your service. We ensure safe and comfortable journeys. Book a minicab anytime with our 24/7 service. Easy booking, no more waiting. Travel hassle-free with us. </p>

          <a href="<?=$_baseurl?>book-now/" class="commonbutton providebtn">Book A Minicab</a>

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