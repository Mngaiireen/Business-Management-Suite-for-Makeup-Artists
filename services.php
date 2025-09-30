```php
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DIVINE Beauty-Services</title>
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
      /* VIDEO SHOWCASE STYLING */
      .video-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
      }
      .video-wrapper video {
        width: 100%;
        height: 450px;
        object-fit: cover;
        display: block;
        border-radius: 12px;
        filter: brightness(90%) contrast(105%);
        transition: filter 0.3s ease;
      }
      .video-wrapper:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 25px rgba(0,0,0,0.3);
      }
      .video-wrapper:hover video {
        filter: brightness(100%) contrast(110%);
      }

      /* PAYMENT BOX STYLING */
      .payment-box {
        border: 1px solid #eee;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .payment-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      }
    </style>
  </head>
  <body>
    <?php include_once('includes/header.php');?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-0 bread">Services</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <!-- VIDEO SHOWCASE SECTION -->
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Our Work in Motion</span>
            <h2 class="mb-4">Service Highlights</h2>
            <p>Watch some of our makeup and beauty transformations come alive.</p>
          </div>
        </div>

        <div class="row">
          <!-- Video 1 -->
          <div class="col-md-4 mb-4 ftco-animate">
            <div class="video-wrapper">
              <video muted autoplay loop playsinline preload="metadata" class="video">
                <source src="images/116.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <!-- Video 2 -->
          <div class="col-md-4 mb-4 ftco-animate">
            <div class="video-wrapper">
              <video muted autoplay loop playsinline preload="metadata" class="video">
                <source src="images/115.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <!-- Video 3 -->
          <div class="col-md-4 mb-4 ftco-animate">
            <div class="video-wrapper">
              <video muted autoplay loop playsinline preload="metadata" class="video">
                <source src="images/114.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <!-- Video 4 -->
          <div class="col-md-4 mb-4 ftco-animate">
            <div class="video-wrapper">
              <video muted autoplay loop playsinline preload="metadata" class="video">
                <source src="images/122.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <!-- Video 5 -->
          <div class="col-md-4 mb-4 ftco-animate">
            <div class="video-wrapper">
              <video muted autoplay loop playsinline preload="metadata" class="video">
                <source src="images/118.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <!-- Video 6 -->
          <div class="col-md-4 mb-4 ftco-animate">
            <div class="video-wrapper">
              <video muted autoplay loop playsinline preload="metadata" class="video">
                <source src="images/120.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PRICING SECTION -->
    <section class="ftco-section ftco-pricing">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h1 class="big">Pricing</h1>
            <span class="subheading">Pricing</span>
            <h2 class="mb-4">Our Service Prices</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <table class="table table-bordered"> 
          <thead> 
            <tr> 
              <th>#</th> 
              <th>Service Name</th> 
              <th>Service Price</th> 
            </tr> 
          </thead> 
          <tbody>
            <?php
            $ret=mysqli_query($con,"select *from tblservices");
            $cnt=1;
            while ($row=mysqli_fetch_array($ret)) {
            ?>
            <tr> 
              <th scope="row"><?php echo $cnt;?></th> 
              <td><?php echo $row['ServiceName'];?></td> 
              <td><?php echo $row['Cost'];?></td> 
            </tr>   
            <?php 
              $cnt=$cnt+1;
            }?>
          </tbody> 
        </table> 
      </div>
    </section>

    <!-- PAYMENTS SECTION -->
    <section class="ftco-section bg-light" id="payments">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-8 heading-section text-center ftco-animate">
            <span class="subheading">Secure & Convenient</span>
            <h2 class="mb-4">Payments</h2>
            <p>Pay safely online using PayPal or card. Your information is protected with end-to-end encryption.</p>
          </div>
        </div>
        
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="payment-box shadow-sm p-4 bg-white text-center rounded">
              <h5 class="mb-3">Select Service & Pay</h5>
              
              <!-- Service dropdown -->
              <select id="service-select" class="form-control mb-3">
                <option value="" disabled selected>-- Choose a service --</option>
                <option value="20">Makeup Application - $20</option>
                <option value="50">Bridal Makeup - $50</option>
                <option value="30">Photoshoot Glam - $30</option>
                <option value="15">Casual Look - $15</option>
              </select>

              <!-- PayPal button -->
              <div id="paypal-button-container"></div>

              <p class="mt-3 text-muted" style="font-size: 0.9rem;">
                We also accept major credit & debit cards via PayPal checkout.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PayPal Integration -->
    <script src="https://www.paypal.com/sdk/js?client-id=ARk2a3X-VjkDVB-2_Pdkz7ZEXt2LpMCC2MPblKB7q_V3xVElp78IsXBeUmvLj-vcYU5Ef7I0jeHzGmd1&currency=USD"></script>
    <script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          var amount = document.getElementById("service-select").value;
          if (!amount) {
            alert("Please select a service before proceeding.");
            return;
          }
          return actions.order.create({
            purchase_units: [{
              amount: { value: amount }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name);
          });
        }
      }).render('#paypal-button-container');
    </script>

    <?php include_once('includes/footer.php');?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
      </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>



