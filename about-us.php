<!DOCTYPE html>
<html lang="en">
 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/regular.min.css">
    <title>About Us | Travel Agency</title>
    
    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/vendors.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body> 

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    <div class="layer"></div><!-- Opacity Mask -->

    <!-- Header Start -->
        <?php $page_name=basename($_SERVER['PHP_SELF']);?>
        <?php include ("header.php"); ?>
    <!-- Header End --><!-- /Header --> 
 
    <main>
      <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="img/about.jpg" alt="About">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <h1 class="slide-animated two">About Us</h1>
              </div>
          </div>
      </div>


      <div class="container margin_120_95">
          <div class="row justify-content-between align-items-center">
  
              <div class="col-lg-5">
                  <div class="intro">
                      <div class="title">
                          <small>Travel Agency</small>
                          <h2>About Us</h2>
                      </div>
                      <p class="lead">At Travel Agency, we believe that travel is more than just visiting new places – it’s about creating lasting memories and unforgettable experiences.</p>
                      <p>With years of expertise and a deep passion for exploration, we’ve dedicated ourselves to making your journeys seamless, exciting, and tailored to your unique desires.</p> 
                      
                  </div>
              </div>
          </div>
          <!-- /Row -->
      </div>
      <!-- /container -->
      
          </div>
          <!-- /container-->
      </div>
      <!-- /bg_white -->
 
        <!-- Testimonial End -->

      <div class="container margin_120_95">
          <div class="title text-center mb-5">
              <h2 data-cue="slideInUp" data-delay="100">Services</h2>
          </div>
          <div class="row mt-4">
          <div class="col-lg-3 col-md-6">
            <div class="box_facilities no-border" data-cue="slideInUp">
                <h3><i class="fa fa-map-marker-alt"></i><br> Customized Travel Planning</h3>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
    <div class="box_facilities" data-cue="slideInUp">
        <h3><i class="fa fa-plane"></i><br> Flight & Hotel Booking</h3>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="box_facilities" data-cue="slideInUp">
        <h3><i class="fa fa-suitcase"></i><br> Group Tours & Travel Packages</h3>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="box_facilities" data-cue="slideInUp">
        <h3><i class="fa fa-shield-alt"></i><br> Travel Insurance</h3>
    </div>
</div>

          </div>
          <!-- /Row -->
          
                      <!-- /card --> 
                  </div>
                  <!-- /accordion -->
              </div>
          </div>
          <!-- /Row -->
      </div>
      <!-- /container -->

  </main>

   <!-- /footer start -->
    <?php include ("footer.php"); ?>
    <!-- /footer end -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->


    <?php include ("all-scripts.php"); ?>

</body> 
</html>