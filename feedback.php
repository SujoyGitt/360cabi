<?php include 'utils/config/config.php';?>

    <!DOCTYPE html>

    <html lang="en">



    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Contact-us /360 cabi </title>



        <!-- css link start here -->

        <?php include 'utils/header-link.php';?>

            <!-- css link end here -->

            <style>

                #captcha{text-align:center; color:#000; height:46px !important; border-radius:4px !important; border-color:#dee2e6 !important;}

            </style>

    </head>



    <body onload="createCaptcha()">

        <?php include 'utils/header.php';?>

            <!-- banner section start here -->

            <section class="banner">

                <div class="container  d-flex  justify-content-between  align-items-center flex-wrap ">

                    <div class="left col-12 text-center text-lg-start col-lg-6  col-xl-5 mb-4 mb-lg-0">

                        <h1>How May We Help You</h1>


                        <a href="<?=$_baseurl?>book-now/" class="commonbutton mt-4">Book now</a>

                    </div>

                    <div class="right col-12  col-lg-6  col-xl-5 d-flex justify-content-center align-items-center justify-content-lg-start">

                        <booking-widget primarycolor="black" masteraccountid="2085823" bookingpageurl="<?=$_baseurl?>book-now/"></booking-widget>

                    </div>

                </div>

            </section>

            <!-- banner section end here -->

            <section class="map-from my-5 ">

                <div class="container d-flex flex-wrap ">

                    <div class="map col-12 col-lg-6 pe-lg-5 ">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1713504395594!5m2!1sen!2sin"

                        class="w-100 " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                    <div class="form col-12 col-lg-6 contact-form">

                        <h2>Write Your Valuable Feedback</h2>

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
                                                <span class="txt">
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

                let body = "New Message From360 Cabi Contact Form" + "<br/><br/>"+ "User Name: " + fullname + "<br/> Email: " + email + "<br/> Phone No: " + phone + "<br/> Subject: " + subject + "<br/> Comment: " + comment + "<br/> <br/> ";

                if (fullname.length != "" && phone.length != "" && email.length != "" && comment.length != ""){
                    // alert(fname);
                    formValidate = true;
                    Email.send({
                    SecureToken : "fc86980c-7a39-4e22-846b-13f42d3a105f",
                    To : 'info@360cabi.com',
                    From : "contact@360cabi.com",
                    Bcc : 'mahen@logistifie.com',
                    Subject : "New Message -360 Cabi",
                    Body : body
                    }).then(
                        message => {
                        // alert("Thanks for contacting us. We will contact you ASAP!");
                        // location.reload(true);
                        window.location = 'https://steppercode.com/360cabi/thankyou/';
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