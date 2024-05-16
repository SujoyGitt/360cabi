<?php include 'utils/config/config.php';?>

    <!DOCTYPE html>

    <html lang="en">



    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Driver Signup /  360 cabi </title>



        <!-- css link start here -->

        <?php include 'utils/header-link.php';?>

            <!-- css link end here -->

            <style>

                #captcha{text-align:center; color:#000; height:46px !important; border-radius:4px !important; border-color:#dee2e6 !important;}
.banner{ background: linear-gradient(to top,rgba(0, 0, 0, 0.5607843137),rgba(0, 0, 0, 0.5764705882)),url(<?=$_baseurl?>assets/images/contact-us-banner.webp);
  background-size: cover;
      }
            </style>

    </head>



    <body onload="createCaptcha()">

        <?php include 'utils/header.php';?>

            <!-- banner section start here -->

            <section class="banner">

                <div class="container  d-flex  justify-content-between  align-items-center flex-wrap ">

                    <div class="left col-12 text-center text-lg-start col-lg-6  col-xl-5 mb-4 mb-lg-0">

                        <h1>Driver Signup</h1>

                        <p>Reliable and Efficient Minicab Drivers</p>

                        <a href="<?=$_baseurl?>book-now/" class="commonbutton">Book Now</a>

                    </div>

                    <div class="right col-12  col-lg-6  col-xl-5 d-flex justify-content-center align-items-center justify-content-lg-start">

                       

                    </div>

                </div>

            </section>

            <!-- banner section end here -->

            <section class="map-from my-5 ">

                <div class="container d-flex flex-wrap align-items-center">

                    <div class="map col-12 col-lg-6 pe-lg-5  ">

                        <img src="<?=$_baseurl?>assets/images/driver-signup-left-img.avif" class="w-100" alt="">

                    </div>

                    <div class="form col-12 col-lg-6 contact-form">

                        <h2>Get in touch</h2>

                       <form class="contact-form default-form2" id="contact-form" name="contact_form" role="form" method="post" novalidate="novalidate" onsubmit="validateCaptcha()" >

                                <div class="row mt-4">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" class="form-control" id="full-name" autocomplete="off" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-xl-6 ">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" class="form-control" placeholder="Phone Number" maxlength="15" onkeypress='validate(event)' name="form_phone" id="phone" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mt-3 mt-lg-0">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" class="form-control" placeholder="Your Email" id="email" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" class="form-control" placeholder="Subject" id="sub" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <textarea class="form-control" id="msg" rows="5" placeholder="Your Message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-xl-6 ">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <div id="captcha" class="form-control leftside" style="background-color:#fff; border-radius: 0px; display: block; height: 70px; border: 1px solid #000; margin-right:4px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mt-4 mt-lg-0">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" class="form-control rightside" placeholder="Captcha" id="cpatchaTextBox" autocomplete="off"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-xl-12 text-center">
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="btn-one commonbutton border-0 outline-0" type="submit" data-loading-text="Please wait...">
                                                <span class="txt text-capitalize">
                                                    send a message
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                    </div>

                </div>

            </section>

            <!-- footerr start here -->

            <?php include 'utils/footer.php';?>

                <!-- footerr end here -->



                <!-- footer link start here -->

                <?php include 'utils/footer-link.php';?>

                    <!-- footer link start here -->

                     <script src="https://smtpjs.com/v3/smtp.js"></script>   
        <script>
            var code;
            function createCaptcha() {
                //clear the contents of captcha div first
                document.getElementById('captcha').innerHTML = "";
                // var charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
                var charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                var lengthOtp = 6;
                var captcha = [];
                for (var i = 0; i < lengthOtp; i++) {
                //below code will not allow Repetition of Characters
                var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
                if (captcha.indexOf(charsArray[index]) == -1)
                    captcha.push(charsArray[index]);
                else i--;
                }
                var canv = document.createElement("canvas");
                canv.id = "captcha";
                canv.width = 100;
                canv.height = 50;
                var ctx = canv.getContext("2d");
                ctx.font = "25px Georgia";
                ctx.strokeText(captcha.join(""), 0, 30);
                //storing captcha so that can validate you can save it somewhere else according to your specific requirements
                code = captcha.join("");
                document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
            }
            function validateCaptcha() {
                event.preventDefault();
                debugger
                if (document.getElementById("cpatchaTextBox").value == code) {
                // alert("Valid Captcha")
                let formValidate = false;
                let fullname = document.getElementById("full-name").value;
                let phone = document.getElementById("phone").value;
                let email = document.getElementById("email").value;
                let subject = document.getElementById("sub").value;
                let comment = document.getElementById("msg").value;

                let body = "New Message From  360 Cabi Contact Form" + "<br/><br/>"+ "User Name: " + fullname + "<br/> Email: " + email + "<br/> Phone No: " + phone + "<br/> Subject: " + subject + "<br/> Comment: " + comment + "<br/> <br/> ";

                if (fullname.length != "" && phone.length != "" && email.length != "" && comment.length != ""){
                    // alert(fname);
                    formValidate = true;
                    Email.send({
                    SecureToken : "fc86980c-7a39-4e22-846b-13f42d3a105f",
                    To : 'drivewithus@360cabi.com',
                    From : "driver@360cabi.com",
                    Bcc : 'mahen@logistifie.com',
                    Subject : "New Message -  360 Cabi",
                    Body : body
                    }).then(
                        message => {
                        // alert("Thanks for contacting us. We will contact you ASAP!");
                        // location.reload(true);
                        window.location = 'https://www.360cabi.com/success/';
                        }
                    );
                }else{
                    formValidate = false;
                    createCaptcha();
                    // alert("Something Went wrong!! Please try Again.");
                }

                }else{
                alert("Something went wrong, Please fill up required field");
                createCaptcha();
                location.reload(true);
                }
            }

        </script>

<script>
        $(document).ready(function() {
            $("#contact-form").validate();

        });

        </script>

        <script>
          function validate(evt) {
              var theEvent = evt || window.event;

              // Handle paste
              if (theEvent.type === 'paste') {
                  key = event.clipboardData.getData('text/plain');
              } else {
              // Handle key press
                  var key = theEvent.keyCode || theEvent.which;
                  key = String.fromCharCode(key);
              }
              var regex = /[0-9]|\./;
              if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
              }
            }
        </script>



    </body>



    </html>