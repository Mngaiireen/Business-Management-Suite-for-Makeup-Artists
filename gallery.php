<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Divine || Gallery</title>
        
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
      .gallery img {
        width: 100%;
        height: 350px; /* uniform height */
        object-fit: cover;
        border-radius: 8px;
        transition: transform .3s ease, box-shadow .3s ease;
      }
      .gallery img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      }
      .category-title {
        text-align: center;
        margin-bottom: 15px;
        font-weight: 600;
        font-size: 18px;
      }
      /* VIDEO STYLING */
  .video-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    transition: transform .3s ease, box-shadow .3s ease;
  }
  .video-wrapper video {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 8px;
  }
  .video-wrapper:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
  }
</style>
    </style>
  </head>
  <body>
    <?php include_once('includes/header.php');?>


    <!-- GALLERY SECTION -->
    <section class="ftco-section bg-light">
      <div class="container">

        <!-- TOP CATEGORY SECTION -->
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Our Work</span>
            <h2 class="mb-4">Makeup Gallery</h2>
            <p>Browse some of our favorite looks from weddings, photoshoots, events, and corporate clients.</p>
          </div>
        </div>

        <div class="row gallery mb-5">
          <div class="col-md-3 mb-4 ftco-animate">
            <div class="category-title">Weddings</div>
            <img src="images/joyce2.jpeg" alt="Wedding Makeup" class="img-fluid">
          </div>
          <div class="col-md-3 mb-4 ftco-animate">
            <div class="category-title">Photoshoots</div>
            <img src="images/71.jpeg" alt="Photoshoot Makeup" class="img-fluid">
          </div>
          <div class="col-md-3 mb-4 ftco-animate">
            <div class="category-title">Events</div>
            <img src="images/66.jpeg" alt="Events Makeup" class="img-fluid">
          </div>
          <div class="col-md-3 mb-4 ftco-animate">
            <div class="category-title">Corporates</div>
            <img src="images/41.jpeg" alt="Corporate Makeup" class="img-fluid">
          </div>
        </div>


        <!-- ALL COLLECTION SECTION -->
        <div class="row justify-content-center mb-4">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h3 class="mb-4">Full Collection</h3>
            <p>Here’s a wider look at some of our endless makeup projects.</p>
          </div>
        </div>

        <div class="row gallery">
          <!-- Example main photos -->
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/18.jpeg" alt="Makeup Sample 1" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/37.jpeg" alt="Makeup Sample 2" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/58.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/36.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/19.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/21.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/35.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/60.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/23.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/9.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/1.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/20.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/28.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>
          <div class="col-md-4 mb-4 ftco-animate">
            <img src="images/31.jpeg" alt="Makeup Sample 3" class="img-fluid">
          </div>

          <!-- Placeholders for extra -->
          <?php for($i=61;$i<=112;$i++){ ?> 
  <div class="col-md-4 mb-4 ftco-animate">
    <img src="images/<?php echo $i; ?>.jpeg" alt="Makeup <?php echo $i; ?>" class="img-fluid">
  </div>
<?php } ?>

        </div>

      </div>
    </section>

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
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

