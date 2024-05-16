<?php include "utils/config/config.php"; ?>

    <!DOCTYPE html>

    <html lang="en">



    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Fleet | 360 cabi   </title>
        <!-- <meta name="description" content="Enjoy luxury travel with our London chauffeur service. At 360 cabi we provide professional drivers, premium vehicles, and personalized service. "/> -->
        <meta name="revisit-after" content="" />
        <link rel="canonical" href="https://360cabi.com/fleet/"/>
        <meta property="og:locale" content="en_GB" />
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="https://360cabi.com/assets/images/logo.webp"/>
        <meta property="og:title" content="London Chauffeur Service | 360 cabi " />
        <meta property="og:description" content=" Enjoy luxury travel with our London chauffeur service. At 360 cabi we provide professional drivers, premium vehicles, and personalized service. " />
        <meta property="og:url" content="https://360cabi.com/fleet/"/>
        <meta property="og:site_name" content="360 cabi" />
        <meta name="p:domain_verify" content=""/>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:description" content="Enjoy luxury travel with our London chauffeur service. At 360 cabi we provide professional drivers, premium vehicles, and personalized service." />
        <meta name="twitter:title" content="London Chauffeur Service | 360 cabi" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:image" content="https://360cabi.com/assets/images/logo.webp"/>
        <meta name="twitter:creator" content="360 cabi" />



        <!-- css link start here -->

        <?php include "utils/header-link.php"; ?>

            <!-- css link end here -->

            <style>
                .fleet{
            
                    background: transparent;
            
                  }
                  .process .container .process-card{
                    min-height:350px;
                  }
                  .banner{ background: linear-gradient(to top,rgba(0, 0, 0, 0.5607843137),rgba(0, 0, 0, 0.5764705882)),url(<?=$_baseurl?>assets/images/fleet/fleet-main-banner.webp);
  background-size: cover;
      }
            </style>

    </head>



    <body>

        <?php include "utils/header.php"; ?>

            <!-- banner section start here -->

            <section class="banner">

                <div class="container  d-flex  justify-content-between  align-items-center flex-wrap ">

                    <div class="left col-12 text-center text-lg-start col-lg-6  col-xl-5 mb-4 mb-lg-0">

                        <h1>Discover Our Luxury Fleets</h1>

                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton mt-4">Book Now</a>

                    </div>

                    <div class="right col-12  col-lg-6  col-xl-5 d-flex justify-content-center align-items-center justify-content-lg-start">

                        <booking-widget primarycolor="black" masteraccountid="2085823" bookingpageurl="<?= $_baseurl ?>book-now/"></booking-widget>

                    </div>

                </div>

            </section>

            <!-- banner section end here -->

            <!-- fleet section start here -->
            <section id="parent" class="py-5">
                <div class="menu d-flex justify-content-center flex-wrap">
                    <button class="active">saloon Cars</button>
                    <button>Estate CarsS</button>
                    <button>Executive Cars</button>
                    <button> MVP5 Cars</button>
                    <button> MVP6 Cars</button>
                </div>
                <div class="tabs">
                    <div class="tab active fleet py-5 ">


                        <div class="container my-4">

                            <div class="owl-carousel fleet-carousel owl-theme">

                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Salon/salon-mercedes-c-class.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Mercedes-Benz C-Class</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>

                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Salon/salon-bmw-3.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>BMW 3 Series</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>

                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Salon/salon-audi-A4.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Audi A4</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>

                           

                            </div>

                        </div>

                    </div>
                    <div class="tab  fleet py-5 ">

                        <div class="container my-4">
                            <div class="owl-carousel fleet-carousel owl-theme">
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Estate/estate-volvo-v60.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Volvo V60</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                               <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Estate/estate-volkswagen-Golf.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Volkswagen Golf Estate</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Estate/estate-ford-focus.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Ford Focus Estate</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                               <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab  fleet py-5 ">
                        <div class="container my-4">
                            <div class="owl-carousel fleet-carousel owl-theme">
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Executive/executive-mercedes-e-class.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Mercedes-Benz E-Class</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Executive/executive-bmw-5.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>BMW 5 Series</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                               <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Executive/executive-audi-A6.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Audi A6</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                               <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab  fleet py-5 ">
                        <div class="container my-4">

                            <div class="owl-carousel fleet-carousel owl-theme">
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Mvp5/mvp5-ford-galaxy.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Ford Galaxy</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Mvp5/mvp5-vw-sharan.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Volkswagen Sharan</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Mvp5/mvp5-Seat-Alhambra.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Seat Alhambra</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab  fleet py-5 ">
                        <div class="container my-4">
                            <div class="owl-carousel fleet-carousel owl-theme">
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Mvp6/mvp6-mercedes-v-class.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Mercedes-Benz V-Class</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Mvp6/mvp6-toyota-previa.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Toyota Previa</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                                <div class="item">

                                    <div class="img-section">

                                        <div class="car-img"><img src="<?=$_baseurl?>assets/images/fleet/fleets/Mvp6/mvp6-chrysler-pacifica.webp" alt=""></div>

                                        <div class="img-1"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-img.webp" alt=""></div>

                                        <div class="img-2"><img src="<?= $_baseurl ?>assets/images/fleet-card-bg-yellow.webp" alt=""></div>

                                    </div>

                                    <div class="content-section">

                                        <h4 class="d-flex gap-1 align-items-center"><p>Chrysler Pacifica</p> <img src="<?= $_baseurl ?>assets/images/i-in-circle.webp" class="d-inline-block" alt=""></h4>

                                        <ul>

                                            <li>
                                                <p>Heathrow to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$2.50</p>
                                            </li>

                                            <li>
                                                <p>Gatwick to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$4.50</p>
                                            </li>

                                            <li>
                                                <p>Luton to/from Milton Keynes - Buckinghamshire</p>
                                                <p>$1.50</p>
                                            </li>

                                            <li>
                                                <div class="passenger"><i class="fa-solid fa-user-group"></i>  <span>7 passengers </span> <i class="fa-solid fa-suitcase-rolling ms-2"></i> <span> 7 suitcases (23kg max)</span> </div>
                                            </li>

                                        </ul>

                                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton fleet-button d-block w-100 text-center">Book A Minicab</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- fleet section end here -->

            <!-- process section start here -->

            <section class="process">

                <h2 class="section-title text-center ">Why Choose Our Fleet</h2>

                <div class="container d-flex  align-items-center process-container mb-5 flex-wrap">

                    <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">

                        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?= $_baseurl ?>assets/images/process-caricon.webp" alt=""></div>

                        <div class="card-right">
                            <h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?= $_baseurl ?>assets/images/process-caricon.webp" alt=""></div><span>Safety First</span></h3>
                            <p>Each vehicle in our fleet undergoes regular maintenance and safety checks to ensure optimal condition. Our drivers are highly trained and have clean driving records, to guarantee your safety on every journey.</p>
                        </div>

                    </div>

                    <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">

                        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?= $_baseurl ?>assets/images/process-mobile-icon.webp" alt=""></div>

                        <div class="card-right">
                            <h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?= $_baseurl ?>assets/images/process-mobile-icon.webp" alt=""></div><span>Comfort and Style</span></h3>
                            <p>Travel should be enjoyable, and our fleet is designed with your comfort in mind. From spacious interiors to cosy seating, we make sure you're travelling in style. We have the perfect vehicle for you.</p>
                        </div>

                    </div>

                    <div class="col-12 col-lg-4 process-card d-flex mt-3  align-items-center px-3 px-lg-0 ">

                        <div class="card-left d-none d-lg-flex justify-content-center align-items-center"><img src="<?= $_baseurl ?>assets/images/process-confirm.webp" alt=""></div>

                        <div class="card-right">
                            <h3 class="d-flex align-items-center  gap-2"><div class="icon d-lg-none"><img src="<?= $_baseurl ?>assets/images/process-confirm.webp" alt=""></div><span>A Diverse Fleet for Every Need</span></h3>
                            <p>No matter the size of your group or the nature of your trip, we have a vehicle to suit you. For solo travellers or groups who need extra space for luggage or equipment, we have all vehicles for your needs.</p>
                        </div>

                    </div>



                </div>

            </section>

            <!-- process section end here -->

            <section class="intro">

                <div class="container d-flex flex-wrap">

                    <div class="left col-12 col-xl-6">

                        <div class="left-one">

                            <img src="<?=$_baseurl?>assets/images/fleet/section-img1a.webp" alt="">

                        </div>

                        <div class="left-two">

                            <img src="<?=$_baseurl?>assets/images/fleet/section-img1b.webp" alt="">

                        </div>

                        <div class="left-three">

                            <img src="<?=$_baseurl?>assets/images/fleet/section-img1c.webp" alt="">

                            <div class="play">

                                <img src="<?= $_baseurl ?>assets/images/playicon.webp" alt="">

                            </div>

                        </div>

                        <div class="horizontal">

                            <img src="<?= $_baseurl ?>assets/images/welcome-horizontal.webp" alt="">

                        </div>

                        <div class="vertical">

                            <img src="<?= $_baseurl ?>assets/images/welcome-vertical.webp" alt="">

                        </div>

                    </div>

                    <div class="right col-12 col-xl-6 ps-lg-5">

                        <p>Features of Our Service</p>

                        <h2 class="section-title welcome-title">What Sets Us Apart From the Competition</h2>

                        <p class="pb-4 pt-3 mb-0">Choosing the right transportation service can make all the difference in your travel experience. At 360cabi, we understand this, which is why we have designed our fleet to meet the highest standards of safety, comfort, and reliability. Here are some of the features of our fleet.</p>

                        <ul>
                            <p class="pb-2">1. <b>Environmentally Conscious Vehicles</b>: Our Minicab service boasts a proven track record of punctuality, ensuring you reach your destination on time, every time.</p>
                            <p class="pb-2">2. <b>Easy Booking Process:</b> To book with us, you can reserve your ride through our website or mobile app, giving you flexibility and convenience. We also offer 24/7 customer support to answer any questions or address any concerns.</p>
                            <p class="pb-2">3. <b>Exceptional Customer Service:</b> Our commitment to customer satisfaction sets us apart. Our drivers are always ready to assist with any special requests. We believe in creating a pleasant and hassle-free experience from booking to drop-off.</p>


                        </ul>

                        <ul class="d-flex justify-content-center gap-5 contact">

                            <li>
                                <p>CALL FOR TAXI</p><a href="">9876-543-210</a></li>

                            <li>
                                <p>EMAIL US AT</p><a href="">360cabicar@helpdesk.com</a></li>

                        </ul>

                    </div>



                </div>

            </section>

            <!-- welcome section end here -->



 <!-- download section start here -->
 <?php include 'utils/download.php';?>

<!-- download section end here -->

            <!-- provide section start here -->

            <section class="provide py-5">

                <div class="container d-flex flex-wrap align-items-center">

                    <div class="provide-left col-12 col-lg-6">

                        <img src="<?=$_baseurl?>assets/images/fleet/corporate-taxi-section-img.webp" class="w-100 " alt="">

                    </div>

                    <div class="provide-right col-12 col-lg-6">

                        <h2>Competitive Pricing</h2>

                        <p class="py-3">Quality transportation doesn't have to break the bank. Our rates are competitive, and we offer various pricing options to suit your budget. With 360cabi, you get excellent value for your money.</p>

                        <a href="<?= $_baseurl ?>book-now/" class="commonbutton providebtn">Book A Minicab</a>

                    </div>

                </div>

            </section>

            <!-- provide section end here -->



            <!-- testimonial start here -->

            <?php include "utils/testimonial.php"; ?>

                <!-- testimonial end here -->

                <!-- footerr start here -->

                <?php include "utils/footer.php"; ?>

                    <!-- footerr end here -->

                    <!-- footer link start here -->

                    <?php include "utils/footer-link.php"; ?>

                        <!-- footer link start here -->

    </body>



    </html>