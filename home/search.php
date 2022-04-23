<?php 
session_start(); ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Search</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <!-- CSS here -->
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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<?php
 
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
                                        <img src="img/logo-kongu.png"width="150">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                    <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="jobs.php">Job Offers</a></li>
                                            <li><a href="search.php">Search</a></li>
                                            <li><a href="../profile/profile.php">Profile</a></li>
                                            <li><a href="../Gallery/index.html">Gallery</a></li>
                                            <li><a href="contact.html">Contact</a></li>
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
                                        <a class="boxed-btn3" href="..\login_register\index.html">Log Out</a>
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

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3> Find Your friends</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <div class="s003">
        <form action="search_back.php" method="post">
          <div class="inner-form">
            <div class="input-field first-wrap">
              <div class="input-select">
                <select data-trigger="" name="batch">
                  <option placeholder="">Batch  </option>
                  <option>2012-2016</option>
                  <option>2013-2017</option>
                  <option>2014-2018</option>
                  <option>2015-2019</option>
                  <option>2016-2020</option>
                </select>
              </div>
            </div>
            <div class="input-field first-wrap">
                <div class="input-select">
                  <select data-trigger="" name="dept">
                    <option placeholder="">Department</option>
                    <option>IT</option>
                    <option>CSE</option>
                    <option>Civil</option>
                    <option>Mech</option>
                    <option>MTS</option>
                    <option>ECE</option>
                    <option>EEE</option>
                    <option>EIE</option>
                    <option>Auto</option>
                  </select>
                </div>
              </div>
              
            <div class="input-field second-wrap">
              <input id="search" type="text" name="rollno_search"placeholder="enter your friends name or rollno" />
            </div>
            <div class="input-field third-wrap">
              <button class="btn-search" type="submit">
                submit
              </button>
            </div>
          </div>
        </form>
      </div>

<?php $search=$_SESSION["search"];
$search_batch=$_SESSION["batch"];
$search_dept=$_SESSION["dept"];

     ?>
 <?php if($search =="0") {?> 
    <div class="featured_candidates_area candidate_page_padding">
        <div class="container">
            <div class="row">
            <?php
            $conn=mysqli_connect("localhost","root","","alumni");
            $name=$_SESSION['name'];
            $rollno=$_SESSION['rollno'];
            
            $sql="SELECT class FROM signup where rollno='$rollno'";
            $result=mysqli_query($conn,$sql);
            $res=mysqli_fetch_array($result);
            $class= $res["class"];
            $result="SELECT name,C_company,C_des,profile_pic_path from signup where class='$class'";
            $res1=mysqli_query($conn,$result); 
            while ( $result1=mysqli_fetch_array($res1) ) { ?>
                <div class="col-md-6 col-lg-3">
               
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="<?php echo $result1['profile_pic_path'];?>" alt="">
                        </div>
                        <a href="#"><h4><?php echo $result1['name'];?></h4></a>
                        <p><?php echo $result1['C_des'];?></p>
                        <p><?php echo $result1['C_company'];?></p>
                    </div>
            </div>
            <?php }?>
               
        </div>
        
    </div>
    
    
          <?php } ?>
            </div>
            <?php
         if(isset($search))
           {
              $conn=mysqli_connect("localhost","root","","alumni");
              $search=$_SESSION["search"];
              //echo $search ,"hello";
              $sql="SELECT name,C_company,C_des,profile_pic_path from signup where rollno ='$search'";
              $res=mysqli_query($conn,$sql); ?>
    <div class="featured_candidates_area candidate_page_padding">
        <div class="container">
            <div class="row">
            <?php while ( $result1=mysqli_fetch_array($res) ) { ?>
                <div class="col-md-6 col-lg-3">
               
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="<?php echo $result1['profile_pic_path'];?>" alt="">
                        </div>
                        <a href="#"><h4><?php echo $result1['name'];?></h4></a>
                        <p><?php echo $result1['C_des'];?></p>
                        <p><?php echo $result1['C_company'];?></p>
                    </div>
            </div>
            <?php }?>
               
        </div>
        
    </div>
    
    
          <?php } ?>
            </div>
            <?php 
           if(isset($search_batch))
           {
              $conn=mysqli_connect("localhost","root","","alumni");
              $search=$_SESSION["search"];
              //echo $search ,"hello";
              $sql="SELECT name,C_company,C_des,profile_pic_path from signup where batch ='$search_batch'";
              $res=mysqli_query($conn,$sql); ?>
    <div class="featured_candidates_area candidate_page_padding">
        <div class="container">
            <div class="row">
            <?php while ( $result1=mysqli_fetch_array($res) ) { ?>
                <div class="col-md-6 col-lg-3">
               
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="<?php echo $result1['profile_pic_path'];?>" alt="">
                        </div>
                        <a href="#"><h4><?php echo $result1['name'];?></h4></a>
                        <p><?php echo $result1['C_des'];?></p>
                        <p><?php echo $result1['C_company'];?></p>
                    </div>
            </div>
            <?php }?>
               
        </div>
        
    </div>
    
 
          <?php } ?>
            </div>
            <?php
           if(isset($search_dept))
           {
              $conn=mysqli_connect("localhost","root","","alumni");
              $search=$_SESSION["search"];
             
              $sql="SELECT name,C_company,C_des,profile_pic_path from signup where dept ='$search_dept'";
              $res=mysqli_query($conn,$sql); ?>
    <div class="featured_candidates_area candidate_page_padding">
        <div class="container">
            <div class="row">
            <?php while ( $result1=mysqli_fetch_array($res) ) { ?>
                <div class="col-md-6 col-lg-3">
               
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="<?php echo $result1['profile_pic_path'];?>" alt="">
                        </div>
                        <a href="#"><h4><?php echo $result1['name'];?></h4></a>
                        <p><?php echo $result1['C_des'];?></p>
                        <p><?php echo $result1['C_company'];?></p>
                    </div>
            </div>
            <?php }?>
               
        </div>
        
    </div>
    
    
          <?php } ?> 
            </div>
    
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
    <script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>

    <script src="js/main1.js"></script>
</body>

</html>