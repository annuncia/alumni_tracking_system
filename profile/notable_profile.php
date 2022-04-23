<?php
$name=$_GET['width']; 
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icomoon.css">
</head>
<style>
    #h1_style1{
        color: white;
    }
    #profile_pic{
        padding-left: 5%;
        float: left;
        animation-name: fadeIn;
    }
    #heading
    {
        text-align: center;
        color:#007bff;
    }
   #cen
   {
       padding-left: 90%;
   }
</style>
<body>
    <?php 
    $conn=mysqli_connect("localhost","root","","alumni");
     //$rollno=$_SESSION['rollno'];   
    $sql="SELECT * from signup where name='$name'";
    $result_1=mysqli_query($conn,$sql);
    $result1=mysqli_fetch_array($result_1);
    $sql="SELECT * from user_details where name='$name'";
    $result_2=mysqli_query($conn,$sql);
    $result2=mysqli_fetch_array($result_2);
    ?>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="https://kongu.ac.in/">
                                        <img src="img/logo-kongu.png"width="100">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                    <ul id="navigation">
                                            <li><a href="../home/index.php">Home</a></li>
                                            <li><a href="../home/jobs.php">Job Offers</a></li>
                                            <li><a href="../home/search.php">Search</a></li>
                                            <li><a href="profile.php">Profile</a></li>
                                            <li><a href="../Gallery/index.html">Gallery</a></li>
                                            <li><a href="../home/contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <!-- <a href="#">Log in</a> -->
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="..\html\index.html">Log Out</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
<!-- header-end -->

    <!-- slider_area_start -->
     <!-- bradcam_area  -->
     <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3> Hello <?php echo $result1['name'];?> </h3>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="ilstration_img wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
          <img src="<?php echo $result1['profile_pic_path'];?>" width="500" id="profile_pic">
          <h3> &nbsp;&nbsp;&nbsp;Name :<?php echo $result1['name'];?> </h3><br>
          <h3>&nbsp;&nbsp;&nbsp;Age :<?php echo $result1['age'];?> </h3><br>
          <h3>&nbsp;&nbsp;&nbsp;Batch & Dept  :<?php echo $result1['batch'];?> ,<?php  echo $result1['dept']; ?> </h3><br>
          <h3>&nbsp;&nbsp;&nbsp;Phone No :<?php echo $result1['phonenumber'];?></h3><br>
          <h3>&nbsp;&nbsp;&nbsp;Presently at  :<?php echo $result1['C_company'];?></h3><br>
          <div class="d-none d-lg-block" id="cen">
            <a class="boxed-btn3" href="">chat</a>
        </div>
    </div>
     
<div class="ilstration_img wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
        
     <div class="featured_candidates_area candidate_page_padding">
        <div class="container">
            <h3 id="heading">Compaines Worked </h3>
            <div class="row">
            <?php if(!empty($result2['company_1'])) { ?>
                <div class="col-md-6 col-lg-3">
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="" alt="">
                        </div>
                        <a href="#"><h4><?php echo $result2['company_1'];?></h4></a>
                        <p><?php echo $result2['des_1'];?></p>
                        
                    </div>
                </div>    
            <?php }?>
            <?php if(!empty($result2['company_2'])) { ?>
                <div class="col-md-6 col-lg-3">
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="" alt="">
                        </div>
                        <a href="#"><h4><?php echo $result2['company_2'];?></h4></a>
                        <p><?php echo $result2['des_2'];?></p>
                        
                    </div>
                </div>    
            <?php }?>
            <?php if(!empty($result2['company_3'])) { ?>
                <div class="col-md-6 col-lg-3">
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="" alt="">
                        </div>
                        <a href="#"><h4><?php echo $result2['company_3'];?></h4></a>
                        <p><?php echo $result2['des_3'];?></p>
                        
                    </div>
                </div>    
            <?php }?>   
            </div>
        </div>
    </div>
  </div>
  <br>
  <div class="ilstration_img wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
  <section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
              <div class="col-md-12 heading-section text-center ftco-animate">
                   <h3 id="heading">Skills</h3>
               </div>
          </div>
        <div class="row">
        <?php if(!empty($result2['skill_1'])) { ?>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h4><?php echo $result2['skill_1'] ;?></h4>
                    <div class="progress">
                         <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                          aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $result2['skill_1_per'];?>%">
                         <span><?php echo $result2['skill_1_per'];?>%</span>
                        </div>
                    </div>
                </div>
        <?php }?>
        
            </div>
            <?php if(!empty($result2['skill_2'])) { ?>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h4><?php echo $result2['skill_2'] ;?></h4>
                    <div class="progress">
                         <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                          aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $result2['skill_2_per'];?>%">
                         <span><?php echo $result2['skill_2_per'];?>%</span>
                        </div>
                    </div>
                </div>
        <?php }?>
        
          </div>
          <?php if(!empty($result2['skill_3'])) { ?>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate"> <br> <br>
                    <h4><?php echo $result2['skill_3'] ;?></h4>
                    <div class="progress">
                         <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                          aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $result2['skill_3_per'];?>%">
                         <span><?php echo $result2['skill_3_per'];?>%</span>
                        </div>
                    </div>
                </div>
        <?php }?>
        </div>
     </section>
     </div>
     <br>
     <div class="ilstration_img wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
        
        <div class="featured_candidates_area candidate_page_padding">
           <div class="container">
               <h3 id="heading"> Contact </h3>
               <div class="row">
                   
                   <div class="col-md-6 col-lg-3">
                       <div class="single_candidates text-center">
                           <div class="thumb">
                               <img src="img/location-pin.jpg" alt="">
                           </div>
                           <a href="#"><h4>Location</h4></a>
                           <p><?php echo $result2['C_location'];?></p>
                       </div>
                   </div>        
                   <div class="col-md-6 col-lg-3">
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="img/email-loo.png" alt="">
                        </div>
                        <a href="#"><h4>E-mail</h4></a>
                        <p><?php echo $result1['email'];?></p>
                    </div>
                </div>        
               
               <div class="col-md-6 col-lg-3">
                <div class="single_candidates text-center">
                    <div class="thumb">
                        <img src="img/website.png" alt="">
                    </div>
                    <a href="#"><h4>Website</h4></a>
                    <p><?php echo $result2['website_link'];?></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="single_candidates text-center">
                    <div class="thumb">
                        <img src="img/linkedin.jpg" alt="150">
                    </div>
                    <a href="#"><h4>LinkedIn</h4></a>
                    <p> <?php echo $result2['linkedin_link'];?> </p>
                </div>
            </div>
            </div>        
           </div>
       </div>
    
    </div>
     <br>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <footer class="footer">
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
            
                    </div>
                </div>
            </div>
        </div>
    </footer>  
</body>

</html>