<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ocean lion || logistics - fastest international delivery..</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/gld.png" />
  
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
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
          <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
              <img src="assets/images/gld.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    <!-- Preloader Start -->
    <!-- Header Start -->
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
                            <li><a href="services.html">Services</a></li>
      
                            <li><a href="contact.html">Contact</a></li>
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
      
    <!-- Header End -->
    <!--main start-->
<main>
    <div  class="mother">
<!-- Button trigger modal -->
 <button style="margin: 20px; margin-left:140px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Add Client
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Ocean Lion Add Client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      
        <div class="modal-body">
            <form action="functions.php" class="contact-form" method="POST">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="ID"  placeholder="ID"  required/>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="sName"  placeholder="Sender Name" required />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-form">
                      <input type="text" name="sAD"  placeholder="sender Address" required />
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="spn" placeholder="sender number" required />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="input-form">
                      <input type="email"  name="sE"   placeholder="sender email" required />
                    </div>
                  </div>
                  
                  <hr>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="input-form">
                      <input type="text" name="rN"  placeholder="Receiver Name" required />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="rA"  placeholder="Receiver Address" />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="rpN"  placeholder="Receiver number" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="email" name="rE" placeholder="Receiver email" />
                    </div>
                  </div>
                 
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="pf"  placeholder="  Departure City" />
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="pt"  placeholder="  Arrival City" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="dd"  placeholder=" Departure date" />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="ad"  placeholder="  Arrival date" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="cl" placeholder="  current location" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="rmk" placeholder="  remark" />
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
        </div>
        
      </div>
    </div>
  </div>


  <?php 
  if(isset($_SESSION['message'])):
  ?>

  <div class=" alert alert-<?=$_SESSION['msg_type']?>" >

  <?php 
  echo $_SESSION['message'];
  unset($_SESSION['message']);
  ?>
  </div>
  <?php endif ?>
    

      <?php
          include_once 'dbh.inc.php';
      
        // Check connection
    if ($conn-> connect_error) {
      die("Connection failed: ".$conn -> connect_error);
    };
    $sql = "SELECT * FROM clients ;" ;
    $result = mysqli_query($conn, $sql) or die(msqli_error($result));?>
  
  <?php while($row = $result -> fetch_assoc()): ?>
   <div class="">
  <div class="tough" >
  <h4>ID</h4>
  <h1><?php echo $row['ID']; ?> </h1>   

<h2>senderName</h2>
   <h4><?php echo $row['sName']; ?>  </h4>  
   
              
<h2>senderAd</h2>
<h4><?php echo $row['sAD']; ?></h4>  


<h2>sendEm</h2>
<h4><?php echo $row['sE']; ?></h4>  
      
<h2>senderNum</h2>
<h4><?php echo $row['spn']; ?></h4>

        
<h2>rece-Nam</h2>
<h4><?php echo $row['rN']; ?></h4>  
         
<h2>rece-Ad</h2>
<h4><?php echo $row['rA']; ?> </h4>
      
<h2>rece-Num</h2>
<h4><?php echo $row['rpN']; ?> </h4>  
   
        
<h2>rece-EM</h2>
<h4><?php echo $row['rE']; ?> </h4> 
        
<h2>dept</h2>
<h4> <?php echo $row['pf'];?> </h4>   

<h2>Arrval</h2>
<h4><?php echo $row['pt']; ?>  </h4> 
       

<h2>dept-date</h2>
<h4><?php echo $row['dd']; ?> </h4>
     
                     
<h2>arr-date</h2>
<h4><?php echo $row['ad']; ?> </h4>   
      
<h2>current-Ltn</h2>
<h4><?php echo $row['cl']; ?> </h4>   
    

<h2>Remark</h2>
<h4><?php echo $row['rmk']; ?> </h4>
 
<a  href="dashboard.php?edit=<?php echo $row['ID']; ?>"  id="btn" class='btn btn-info m-6'  >Edit</a>
<a href="process.php?delete=<?php echo $row['ID']; ?>"  id="btn" class=' btn btn-danger' >Delete</a>   

</div>  
<?php endwhile; ?> 


<?Php 

$update =false;
$ID = '';
$sName ='';
$sAD = '';
$sE ='';
$spn ='';
$rN ='';
$rA ='';
$rpN ='';
$rE ='';
$pf ='';
$pt ='';
$dd ='';
$ad ='';
$cl ='';
$rmk =''; ?>


<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

 include_once'dbh.inc.php';
  if(isset($_GET['edit'])){
    $id= $_GET['edit'];
    $update = true;
  $result = $conn->query("SELECT * FROM clients WHERE ID ='$id';");
  if(count($result) == 1){
      $row = $result->fetch_array();

      $ID =$row['ID'];
      $sName =$row['sName'];
      $sAD =$row['sAD'];
      $sE =$row['sE'];
      $spn =$row['spn'];
      $rN =$row['rN'];
      $rA =$row['rA'];
      $rpN =$row['rpN'];
      $rE =$row['rE'];
      $pf =$row['pf'];
      $pt =$row['pt'];
      $dd =$row['dd'];
      $ad =$row['ad'];
      $cl =$row['cl'];
      $rmk =$row['rmk'];


}
$conn->close();
};

?>

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once'dbh.inc.php';
if(isset($_POST['update'])){
  $ID = $_POST['ID'];
  $sName =$_POST['sName'];
  $sAD = $_POST['sAD'];
  $sE =$_POST['sE'];
  $spn = $_POST['spn'];
  $rN =$_POST['rN'];
  $rA =$_POST['rA'];
  $rpN =$_POST['rpN'];
  $rE =$_POST['rE'];
  $pf =$_POST['pf'];
  $pt =$_POST['pt'];
  $dd =$_POST['dd'];
  $ad =$_POST['ad'];
  $cl =$_POST['cl'];
  $rmk =$_POST['rmk'];

  $result= $conn-> query("UPDATE clients SET ID='$ID',sName='$sName',sAD='$sAD',sE='$sE',spn='$spn',rN='$rN',rA='$rA', rpN='$rpN',rE='$rE',pf='$pf',pt='$pt',dd='$dd',ad='$ad',cl='$cl' ,rmk='$rmk' WHERE ID='$ID'");
if($result){
  
$_SESSION['message'] = 'clients updated successful';
$_SESSION['msg_type']= 'warning';
};



};

?>

<div class="container">
     <form action="dashboard.php" class="contact-form" method="POST" id="formUpdate">
     <!-- <input type="hidden" name="id" value="<?php echo $id?>"> -->
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="ID" value="<?php echo $ID; ?>" placeholder="ID"  required/>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="sName" value="<?php echo $sName; ?>" placeholder="Sender Name" required />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-form">
                      <input type="text" name="sAD" value="<?php echo $sAD; ?>" placeholder="sender Address" required />
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="spn" value="<?php echo $spn; ?>" placeholder="sender number" required />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="input-form">
                      <input type="email"  name="sE"  value="<?php echo $sE; ?>" placeholder="sender email"  />
                    </div>
                  </div>
                  
                  <hr>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="input-form">
                      <input type="text" name="rN" value="<?php echo $rN; ?>" placeholder="Receiver Name" required />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="rA" value="<?php echo $rA; ?>" placeholder="Receiver Address" />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="rpN" value="<?php echo $rpN; ?>" placeholder="Receiver number" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="email" name="rE" value="<?php echo $rE; ?>" placeholder="Receiver email" />
                    </div>
                  </div>
                 
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="pf"  value="<?php echo $pf; ?>" placeholder="  Departure City" />
                    </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="pt" value="<?php echo $pt; ?>" placeholder="  Arrival City" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="dd"  value="<?php echo $dd; ?>"placeholder=" Departure date" />
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="ad" value="<?php echo $ad; ?>" placeholder="  Arrival date" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="cl" value="<?php echo $cl; ?>" placeholder="  current location" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="input-form">
                      <input type="text" name="rmk" value="<?php echo $rmk; ?>" placeholder="  remark" />
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                    <?php if($update == true): ?>
                    <button type="submit" id='fit' name="update" class="btn btn-primary">update</button>
                    <?php else: ?>
                    <button type="submit" id='fit' class="btn btn-primary">Save</button>
                    <?php endif; ?>
                  </div>
              </form>
</div>

  <!--infors-->
  <!-- slider Area End-->
  <!--? our info Start -->
  <div class="our-info-area pt-70 pb-40">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-info mb-30">
            <div class="info-icon">
              <span class="flaticon-support"></span>
            </div> 
             <div class="info-caption">
              <p>Call Us Anytime</p>
              <span>+ (123) 1800-567-8990</span>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 flex">
          <div class="single-info mb-30">
            <div class="info-icon">
              <span class="flaticon-clock"></span>
            </div>
            <div class="info-caption">
              <p>Sunday CLOSED</p>
              <span>Mon - Sat 8.00 - 18.00</span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="single-info mb-30">
            <div class="info-icon">
              <span class="flaticon-place"></span>
            </div>
            <div class="info-caption">
              <p>UK, London 29201</p>
              <span>USA, New York - 10620</span>
            </div>
          </div>
        </div>
      
 
  <!-- our info End -->
  <!--? Categories Area Start -->
  <div class="categories-area section-padding30">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Section Tittle -->
          <div class="section-tittle text-center mb-80">
            <span>Our Services</span>
            <h2>Did You Get Your Delivery ?</h2>
            <h4>Its always a fast, Next day Delivery</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Categories Area End -->
  </main>
    <!--main end-->

    <!--footer-->
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
                    <div class="footer-logo">
                      <a href="index.html"
                        ><img src="assets/img/logo/logo2_footer.png" alt=""
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

<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="/assets/js/owl.carousel.min.js"></script>
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


<script src="js/SmoothScroll.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>
<script>
  $(document).ready(function () {

      $().UItoTop({
          easingType: 'easeOutQuart'
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
