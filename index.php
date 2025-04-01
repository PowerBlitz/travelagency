<!DOCTYPE html>
<html lang="en">
 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Travel Agency</title>
    
   
    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body class="datepicker_mobile_full"> 

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    <div class="layer"></div><!-- Opacity Mask --> 

    <!-- Header Start -->
        <?php $page_name=basename($_SERVER['PHP_SELF']);?>
        <?php include ("header.php"); ?>
    <!-- Header End -->

    <main>
        <!-- Main Slider Start -->
        <?php include ("slider.php"); ?>
        <!-- Main Slider End -->

        <div class="pattern_2">
            <div class="container margin_120_95" id="first_section">
                <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                    <div class="col-lg-5">
                        <div class="parallax_wrapper">
                            <img src="img/main1.jpg" alt="" class="img-fluid rounded-img">
                            <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="img/main2.jpg" alt="" class="rounded-img"></span></div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="intro">
                            <div class="title">
                                <small>About us</small>
                                <h2>Welcome to Travel Agency</h2>
                            </div>
                            <p class="lead"></p>
                            <p>
                                
                            </p> 
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
 
            <!-- /pinned content -->
        </div>


                </div>
                <!-- /carousel-->
            </div>
            
        </div>
        <!-- /container-->

      
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