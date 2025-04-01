<!DOCTYPE html>
<html lang="en">
 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tours & Packages | Travel Agency</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/vendors.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    } 
    </style>
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
        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <h1 class="slide-animated two">Explore Pune</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_0">
            <div class="row_list_version_1 text-center">
                <h4>Discover Pune: Where Tradition Meets Modern Adventure!</h4>
                <p>Explore the vibrant heart of Maharashtra with Pune’s blend of rich history, culture, and modern charm. A city where every corner tells a story, waiting to be discovered!</p>
            </div>
            <div class="row_list_version_2">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-8">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            <div class="item">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/pune/p1.jpeg"><img src="img/pune/p1.jpeg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/pune/p2.jpeg"><img src="img/pune/p2.jpeg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/pune/p3.jpeg"><img src="img/pune/p3.jpeg" alt=""></a>
                            </div>
                            <div class="item">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/pune/p4.jpeg"><img src="img/pune/p4.jpeg" alt=""></a>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4">
                        <div class="box_item_info" data-jarallax-element="-25">
                            <small>Tour to </small>
                            <h2>Pune</h2>
                            <p>
                                <table>
                                  <tr>
                                    <th>Vehicle</th>
                                    <th>Charges</th> 
                                  </tr>
                                  <tr>
                                    <td>Swift Dzire</td>
                                    <td>2800</td> 
                                  </tr>
                                  <tr>
                                    <td>Ertiga</td>
                                    <td>3100</td> 
                                  </tr>
                                  <tr>
                                    <td>Innova</td>
                                    <td>4600</td> 
                                  </tr>
                                  <tr>
                                    <td>Innova Crstya</td>
                                    <td>5000</td> 
                                  </tr> 
                                </table>
                            </p> 
     
                            <!-- /box_item_footer -->
                        </div>
                        <!-- /box_item_info -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /row_list -->

           
        </div>
        <!-- /container -->  

    </main>

    <!-- Footer Start -->
        <?php include ("footer.php"); ?>
    <!-- Footer End -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->


    <?php include ("all-scripts.php"); ?>

</body> 
</html>