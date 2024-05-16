<?php include 'utils/config/config.php';?>

    <!DOCTYPE html>

    <html lang="en">



    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Book now /  360 cabi </title>



        <!-- css link start here -->

        <?php include 'utils/header-link.php';?>

            <!-- css link end here -->

    </head>



    <body onload="createCaptcha()">

        <?php include 'utils/header.php';?>

            <!-- banner section start here -->

            <section class="banner">

                <div class="container  d-flex  justify-content-between  align-items-center flex-wrap ">

                    <div class="left col-12 text-center text-lg-start col-lg-6  col-xl-5 mb-4 mb-lg-0">

                        <h1>Book Now </h1>

                        <p>Reliable and Efficient Taxi Drivers</p>

                    </div>

                </div>

            </section>

            <!-- banner section end here -->

            <!-- Booking dashboard script -->
            <section>
                <div id="guestbookingcontainer"> </div>
            </section>

            <!-- footerr start here -->

            <?php include 'utils/footer.php';?>

            <!-- footerr end here -->

            <!-- footer link start here -->

            <?php include 'utils/footer-link.php';?>

            <!-- footer link start here -->
            <script>
                function loadExternalScript() {
                var script = document.createElement('script');
                script.src = "https://clientbooking.logistifie.com/logistifyclientbooking.js";
                script.setAttribute("masteraccountid", "3067261");
                script.onload = function () {
                    setTimeout(function () {
                    // Find the button inside the dynamically generated Angular component
                    //document.addEventListener('DOMContentLoaded', function () {
                    //loadExternalScript();
                    
                        // Use event delegation to handle click events on dynamically generated buttons
                        document.addEventListener('click', function (event) {
                        const target = event.target;
                        console.log(target);
                            if(target && target.textContent.trim() === 'Book Now') {
                                console.log('book now')
                                const request = indexedDB.open('lfBookingDB', 1);
                                request.onsuccess = (event) => {
                                const db = event.target.result;
                                
                                const transaction = db.transaction('booking', 'readwrite');
                                const objectStore = transaction.objectStore('booking');
                                
                                const clearRequest = objectStore.clear();
                                    clearRequest.onsuccess = () => {
                                    console.log('Booking data cleared successfully');
                                    window.location.reload();
                                    //resolve();
                                    };
                                } 
                            }
                        });
                    //});
                    }, 0); // Adjust the timing as needed
                };
                document.head.appendChild(script);
                }
                // Run the function after the page has loaded
                document.addEventListener('DOMContentLoaded', function () {
                loadExternalScript();
                });    
            </script>

    </body>

</html>