<?php include '../utils/config/config.php';?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>360 Cabi</title>



    <!-- css link start here -->

    <?php include '../utils/header-link.php';?>

    <!-- css link end here -->

    <style>

      .fleet{

        background: transparent;

      }

    </style>

</head>



<body>

<?php include '../utils/header.php';?>

    <!-- banner section start here -->

    <section class="banner">

        <div class="container  d-flex  justify-content-between  align-items-center flex-wrap ">

            <div class="left col-12 text-center text-lg-start col-lg-6  col-xl-5 mb-4 mb-lg-0">

                <h1>Mpv5 Car hire</h1>

                <p>Reliable and Efficient Taxi Drivers</p>

                <a href="<?=$_baseurl?>book-now/" class="commonbutton">Book Now</a>

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

          <img src="<?=$_baseurl?>assets/images/toyota-auris.webp" class="w-100" alt="">

        </div>

        <div class="right col-12 col-lg-7 mt-4 mt-lg-0">

          <p>The Toyota Auris combines sleek design with practicality, offering a smooth and efficient driving experience. With its spacious interior, advanced technology features, and impressive fuel efficiency, the Auris is the perfect companion for both city driving and long journeys. Renowned for its reliability and safety, it's a versatile hatchback that excels in comfort and performance, making every ride a pleasure.</p>

          <ul class=" ps-0 available d-flex gap-2 my-4 flex-wrap ">

            <li class="d-flex justify-content-center align-items-center "><div class="text-center"><img src="<?=$_baseurl?>assets/images/wifi.webp" alt=""><p>Wifi Available</p></div></li>

            <li class="d-flex justify-content-center align-items-center "><div class="text-center"><img src="<?=$_baseurl?>assets/images/location.webp" alt=""><p>GPS Tracking</p></div></li>

            <li class="d-flex justify-content-center align-items-center "><div class="text-center"><img src="<?=$_baseurl?>assets/images/water-drop.webp" alt=""><p>Water Available</p></div></li>

            <li class="d-flex justify-content-center align-items-center "><div class="text-center"><img src="<?=$_baseurl?>assets/images/child-seat.webp" alt=""><p>Child seat available</p></div></li>

          </ul>

        </div>

      </div>

    </section>

    <!-- car introduction section end here -->

    <!-- car details section start here -->

    <secion class="car-detail py-5 my-5">

      <div class="container d-flex flex-wrap align-items-center">

        <div class="left col-12 col-lg-6">

          <p class="welcome">WELCOME TO 360CABICAR</p>

          <h2 class="section-title">Fell the difference and Relaxation!</h2>

          <p class="my-4">In the bustling streets of the UK, business transfer services via cabi and taxis offer seamless mobility for professionals. With prompt pickups and tailored routes, these services ensure swift and efficient transportation between meetings and appointments. Simplifying the corporate commute, they provide a reliable link in the chain of business operations.</p>

          <ul class="ps-0">

            <li>1. Reliable: Our Minicabservice boasts a proven track record of punctuality, ensuring you reach your destination on time, every time.</li>

            <li>2. Convenience: With easy booking options and a fleet of well-maintained vehicles, we offer hassle-free transportation tailored to your needs.</li>

            <li>3. Professionalism: Our courteous drivers are dedicated to providing a comfortable and safe journey, making us the ideal choice for your travel needs.</li>

          </ul>

        </div>

        <div class="right carousel1 position-relative col-12 col-lg-6 ps-0 ps-lg-5 my-4 my-lg-0">

          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper   mySwiper2">

            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <img src="<?=$_baseurl?>assets/images/demo-car-swiper.webp" />

                </div>

                <div class="swiper-slide">

                    <img src="<?=$_baseurl?>assets/images/demo-car-swiper.webp" />

                </div>

                <div class="swiper-slide">

                    <img src="<?=$_baseurl?>assets/images/demo-car-swiper.webp" />

                </div>

                <div class="swiper-slide">

                    <img src="<?=$_baseurl?>assets/images/demo-car-swiper.webp" />

                </div>

            </div>

            <div class="swiper-button-next"></div>

            <div class="swiper-button-prev"></div>

        </div>

        <div thumbsSlider="" class="swiper mySwiper ">

            <div class="swiper-wrapper  d-flex  justify-content-center">

                <div class="swiper-slide">

                    <img src="<?=$_baseurl?>assets/images/demo-car-swiper.webp" />

                </div>

                <div class="swiper-slide">

                    <img src="<?=$_baseurl?>assets/images/demo-car-swiper.webp" />

                </div>

                <div class="swiper-slide">

                    <img src="<?=$_baseurl?>assets/images/demo-car-swiper.webp" />

                </div>

                <div class="swiper-slide">

                    <img src="<?=$_baseurl?>assets/images/demo-car-swiper.webp" />

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

    <h2 class="section-title text-center "> How It Works</h2>

    <div class="container d-flex  align-items-center process-container mb-5 flex-wrap">

      <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">

        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?=$_baseurl?>assets/images/process-caricon.webp" alt=""></div>

        <div class="card-right"><h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?=$_baseurl?>assets/images/process-caricon.webp" alt=""></div><span>BOOK IN SIMPLE STEPS</span></h3><p>Book your ride in just a few simple taps, making transportation as easy as it should be</p></div>

      </div>

      <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">

        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?=$_baseurl?>assets/images/process-mobile-icon.webp" alt=""></div>

        <div class="card-right"><h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?=$_baseurl?>assets/images/process-mobile-icon.webp" alt=""></div><span>BOOK IN SIMPLE STEPS</span></h3><p>Book your ride in just a few simple taps, making transportation as easy as it should be</p></div>

      </div>

      <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">

        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?=$_baseurl?>assets/images/process-confirm.webp" alt=""></div>

        <div class="card-right"><h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?=$_baseurl?>assets/images/process-confirm.webp" alt=""></div><span>BOOK IN SIMPLE STEPS</span></h3><p>Book your ride in just a few simple taps, making transportation as easy as it should be</p></div>

      </div>

      

    </div>

  </section>

  <!-- process section end here -->





<!-- download section start here -->

<section class="download d-flex  align-items-center mb-5">

    <div class="container py-5 py-lg-0">

       <div class="download-left  col-12 col-md-6 ">

         <div class="">

            <h2>Get Free 360CabiCar App On Online Store</h2>

            <p class="py-3">Lorem ipsum may be used as a placeholder before final <br> copy is available.</p>

            <div class="d-flex justify-content-center d-md-none"><img src="<?=$_baseurl?>assets/images/phoneinfo.webp" class="w-50 " alt=""></div>

            <ul class="d-flex gap-2 align-items-center ps-0">

                <li><a href=""><img src="<?=$_baseurl?>assets/images/appstore.webp" alt=""></a></li>

                <li><a href=""><img src="<?=$_baseurl?>assets/images/playstore.webp" alt=""></a></li>

            </ul>

         </div>

       </div>

       <div class="download-right d-none d-md-block d-flex justify-content-center">

         <img src="<?=$_baseurl?>assets/images/phoneinfo.webp" class="" alt="">

       </div>

    </div>

</section>

<!-- download section end here -->

<!-- provide section start here -->

<section class="provide py-5">

  <div class="container d-flex flex-wrap align-items-center">

      <div class="provide-left col-12 col-lg-6">

          <img src="<?=$_baseurl?>assets/images/provide-left.webp" class="w-100 " alt="">

      </div>

      <div class="provide-right col-12 col-lg-6">

          <h2>We Provide Trusted Cab Service In UK</h2>

          <p class="py-3">With a steadfast commitment to excellence, we proudly offer trusted cab services throughout the UK. Our reputation stands on the pillars of reliability, convenience, and professionalism, ensuring your journey is not just a ride but an experience in trust and comfort.</p>

          <a href="" class="commonbutton providebtn">Book A Cab</a>

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