<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ocean lion || logistics - fastest international delivery..</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/images/gld.png"
    />
   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.min.css" />
    <link rel="stylesheet" href="assets/css/display.css" />

  </head>
  <body>
   <!--? Preloader Start -->
   <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
          <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
              <img src="assets/images/gld.png" alt="loading...." />
            </div>
          </div>
        </div>
      </div>
    <!-- Preloader Start -->
    <header>
        <div class="header-area">
          <div class="main-header">
            <div class="header-top d-none d-lg-block">
              <div class="container">
                <div class="col-xl-12">
                  <div class="row d-flex justify-content-between align-items-center">
                    <div class="header-info-left">
                      <ul>
                        <li>Welcome to the Ocean..</li>
                        <li>Email: oceanlionlogistic@yahoo.com</li>
                      </ul>
                    </div>
                    <div class="header-info-right">
                      <ul class="header-social">
                        <li>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-bottom header-sticky">
              <div class="container">
                <div class="row align-items-center">
                  <!-- Logo -->
                  <div class="col-xl-2 col-lg-2">
                    <div class="logo">
                      <a href="index.html"
                        ><img
                          src="assets/images/gld.png"
                          height="80"
                          width="80"
                          alt="logo"
                      /></a>
                    </div>
                  </div>
                  <div class="col-xl-10 col-lg-10">
                    <div
                      class="menu-wrapper d-flex align-items-center justify-content-end"
                    >
                      <!-- Main-menu -->
                      <div class="main-menu d-none d-lg-block">
                        <nav>
                          <ul id="navigation">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#services">Services</a></li>

                            <li><a href="#contact">Contact</a></li>
                          </ul>
                        </nav>
                      </div>
                      <!-- Header-btn -->
                      <div class="header-right-btn d-none d-lg-block ml-20">
                        <a href="contact.html" class="btn header-btn">Complain</a>
                      </div>
                    </div>
                  </div>
                  <!-- Mobile Menu -->
                  <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!--? slider Area Start-->
      <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Customer information</h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
<div class="phpside display">
  <div class='shift'>
<?php
    include_once 'dbh.inc.php';

    if(isset($_POST['search'])){
      $set = $_POST['search'];
      $show = "SELECT * FROM clients WHERE ID = '$set'";
      $result = mysqli_query($conn,$show);
      while($rows=mysqli_fetch_array($result)){
      
      echo "<div class='color-pin'  style='background-color:cyan;'>";
      echo "<h2>ID</h2>";
      echo "<h5>";
      echo $rows['ID'];
      echo "</h5>";
      echo "</div>";

      echo "<div class='color-pin' style='background-color:darkgray;'>";
      echo "<h2>Sender-Name</h2>";
      echo "<h5>";
      echo $rows['sName'];
      echo "</h5>";
      echo "</div>";

      echo "<div class='color-pin' style='background-color:darkgray;'>";
      echo "<h2>sender-Address</h2>";
      echo "<h5>";
      echo $rows['sAD'];
      echo "</h5>";
      echo "</div>";

    echo "<div class='color-pin' style='background-color:darkgray;'>";
    echo "<h2>sender-Email</h2>";
    echo "<h5>";
    echo $rows['sE'];
    echo "</h5>";
    echo "</div>";

    echo "<div class='color-pin' style='background-color:darkgray;'>";
    echo "<h2>sender-Number</h2>";
    echo "<h5>";
    echo $rows['spn'];
    echo "</h5>";
    echo "</div>";

      
    echo "<div class='color-pin'>";
    echo "<h2>Receiver-Name</h2>";
    echo "<h5>";
    echo $rows['rN'];
    echo "</h5>";
    echo "</div>";
     
    echo "<div class='color-pin'>";
    echo "<h2>Receiver-address</h2>";
    echo "<h5>";
    echo $rows['rA'];
    echo "</h5>";
    echo "</div>";
  
    echo "<div class='color-pin'>";
    echo "<h2>Receiver-number</h2>";
    echo "<h5>";
    echo $rows['rpN'];
    echo "</h5>";
    echo "</div>";

    echo "<div class='color-pin'>";
    echo "<h2>Receiver-Email</h2>";
    echo "<h5>";
    echo $rows['rE'];
    echo "</h5>";
    echo "</div>";
   
    echo "<div class='color-pin'>";
    echo "<h2>Departure-City</h2>";
    echo "<h5>";
    echo $rows['pf'];
    echo "</h5>";
    echo "</div>";
    
    echo "<div class='color-pin'>";
    echo "<h2>Arrival City</h2>";
    echo "<h5>";
    echo $rows['pt'];
    echo "</h5>";
    echo "</div>";

    echo "<div class='color-pin'>";
    echo "<h2>Departure-Date</h2>";
    echo "<h5>";
    echo $rows['dd'];
    echo "</h5>";
    echo "</div>";
 
      echo "<div class='color-pin'>";
      echo "<h2>Arrival Date</h2>";
      echo "<h5>";
      echo $rows['ad'];
      echo "</h5>";
      echo "</div>";
      
      echo "<div class='color-pin'>";
      echo "<h2>Current-Location</h2>";
      echo "<h5>";
      echo $rows['cl'];
      echo "</h5>";
      echo "</div>";
        
      echo "<div class='color-pin' style='background-color:cyan;'>";
      echo "<h2>Condition</h2>";
      echo "<h5 >";
      echo $rows['rmk'];
      echo "</h5>";
      echo "</div>";

         
      echo "<div class='color-pin' style='background-color:cyan;'>";
      echo "<h2>Status</h2>";
      echo "<h5 >";
      echo "<h4>hello</h4>";
      echo "</h5>";
      echo "</div>";


    }  
    
     
    
 }
  
    ?>
</div>
</div>
<!-- stats starts here -->
<section class="stats py-md-5"  >
        <div class="container py-4 mt-2 stats">
            <h3 class="tittle-w3ls text-center mb-3">Our Stats</h3>
            <p class="tit text-center mx-auto">Our service is fast, steady and realiable. <strong>ocean lion</strong> Logistics always delivering to your test for your happiness.</p>
        <div class="row inner_w3l_agile_grids-1 pt-4 mt-md-4 stats2">
            <div class="col-sm-4 w3layouts_stats_left w3_counter_grid stats2">
              <h3>Satisfied Clients</h3>
                <p class="counter">10,785</p>

                <h6>Pure Satisfaction</h6>
            </div>
            <div class="col-sm-4 w3layouts_stats_left w3_counter_grid1 stats2">
              <h3>Total Delivered</h3>
                <p class="counter">19,765,948</p>

                <h6>Successful Shipping</h6>
            </div>
            <div class="col-sm-4 w3layouts_stats_left w3_counter_grid2 stats2">
              <h3>Countries</h3>
                <p class="counter">190</p>

                <h6>Highest level of credibility</h6>
            </div>
        </div>
   </div>
</section> 
      <!-- stats ends here -->

      <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
          <div class="container">
            <div class="footer-top footer-padding">
              <!-- footer Heading -->
              <div class="footer-heading">
                <div class="row justify-content-between">
                  <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                      <h2>We Understand The Importance Approaching Each Work!</h2>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4">
                    Contact:
                    <span id="mail" class="contact-number f-right" style="font-size: large;">  oceanlionlogistic@yahoo.com
                    </span>
                  </div>
                </div>
              </div>
              <!-- Footer Menu -->
              <div class="row d-flex justify-content-between">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                  <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                      <h4>COMPANY</h4>
                      <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Company</a></li>
                        <li><a href="#"> Press & Blog</a></li>
                        <li><a href="#"> Privacy Policy</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                      <h4>Open hour</h4>
                      <ul>
                        <li><a href="#">Monday 9am-7pm</a></li>
                        <li><a href="#"> Tuesday-Friday 11am-8pm</a></li>
                        <li><a href="#"> Saturday 10am-6pm</a></li>
                        <li><a href="#"> Sunday 11am-6pm</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                      <h4>RESOURCES</h4>
                      <ul>
                        <li><a href="#">Home Insurance</a></li>
                        <li><a href="#">Travel Insurance</a></li>
                        <li><a href="#"> Car Insurance</a></li>
                        <li><a href="#"> Business Insurance</a></li>
                        <li><a href="#"> Heal Insurance</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                  <div class="single-footer-caption mb-50">
                    <!-- logo -->
                    <div class="footer-logo" >
                      <a href="index.html"
                        ><img src="assets/images/gld.png" alt="" width='60' height='60'
                      /></a>
                    </div>
                    <div class="footer-tittle">
                      <div class="footer-pera">
                        <p class="info1">
                          We are engaged in International logistics, air
                          transportations around the globe. Among all our services we
                          provide both standard and urgent transportation,
                          organization of charter flights, delivery of various
                          cargoes, such as dangerous or bulky ones and tracking of the
                          cargo from the starting point of the shipment to the very
                          end of the delivery process.
                        </p>
                      </div>
                    </div>
                    <!-- Footer Social -->
                    <div class="footer-social">
                      <a href="https://www.facebook.com/sai4ull"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                      <a href=""><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fas fa-globe"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
              <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                  <div class="footer-copy-right text-center">
                    <p>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy; 2020 ocean lion Logistics.  All rights reserved.</p>

                      <script>
                        document.write(new Date().getFullYear());
                      </script>
                      All rights reserved | This template is made with
                      <i class="fa fa-heart" aria-hidden="true"></i> by
                      <a href="https://colorlib.com" target="_blank">Colorlib</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </footer>
      <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
      </div>
    <!--footer ends-->
    <!-- JS here -->

<script src= "assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/animated.headline.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>

<!-- Nice-select, sticky -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="assets/js/contact.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/mail-script.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<script src="/public/app.js"></script>
<script src="assets/jquery.js"></script>
<script src="assets/js/SmoothScroll.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>
    <!--js starts below-->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.countup.js"></script>
   
<script>
      $(".counter").countUp();

    

    </script>
    <script>
      jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
          event.preventDefault();

          $("html,body").animate(
            {
              scrollTop: $(this.hash).offset().top,
            },
            1000
          );
        });
      });
    </script>
<script>
  $(document).ready(function ($) {
      $(".scroll").click(function (event) {
          event.preventDefault();

          $('html,body').animate({
              scrollTop: $(this.hash).offset().top
          }, 1000);
      });
  });
</script>
<!--script area ends here-->
</body>
</html>
