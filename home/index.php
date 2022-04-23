<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<style>
    #cen
   {
       padding-left: 90%;
   }
   #chat{
       justify-content: center;
   }
</style>
<body>
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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
            <img src="img/banner/illustration.png" alt="">
        </div>
    </div>
    
    <?php
 $conn=mysqli_connect("localhost","root","","alumni");
        
        $sql="SELECT * FROM notable_alumni";
        $result=mysqli_query($conn,$sql);
        if(!$result)
        {
            echo mysqli_error($conn);
        }
        else
        {
           
            ?>
       <div class="featured_candidates_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">  <br>
                        <h3>Featured Candidates</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                       <?php while ( $result1=mysqli_fetch_array($result) ) { ?>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                
                                <img src="<?php echo $result1['photo'];?>">
                            </div>
                            <a onclick="functiona('<?php echo $result1['name']; ?>' )">
                            <h4 id="aj"><?php echo $result1['name']; ?></h4></a>
                            <p><?php echo $result1['des'];?></p>
                        </div>
                       <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
   <div class="d-none d-lg-block" id="cen">
            <a class="boxed-btn3" href="Home_post.html">Post</a>
        </div>
    <div class="job_listing_area plus_padding">
        <!-- <div class="container"> -->
        
       <?php $conn=mysqli_connect("localhost","root","","alumni");
        
        $sql="SELECT * FROM post";
        $result=mysqli_query($conn,$sql);
        
        if(!$result)
        {
            echo mysqli_error($conn);
        }

        else
        {  ?>    
            
            <div class="job_lists m-0">
                        <div class="row justify-content-center">
                          <div id="chat"></div>
                            <div class="col-lg-7 col-md-8 col-sm-9">
                                <div class="single_jobs white-bg d-flex justify-content-between" style="flex-wrap: wrap;flex-direction: row;">
                                      <?php while ($result1=mysqli_fetch_array($result) ){ ?>
                                        <div class="container newsfeed_item" style="padding-top: 10px;" >
                                            <div class="owner_details" style="display: flex;justify-content: center;align-items: center;width:max-content;" > 
                                                    <img src="<?php echo $result1['profile_pic']; ?>" class="rounded float-left" height="70px" width="70px" >
                                                <div style="padding: 5px;">
                                                    <h4 style="font-weight: bold;"><?php echo $result1['name'];?></h4>
                                                    <span style="color:grey"><?php echo $result1['des'];?></span>
                                                </div>
                                            </div>
                                            <div class="container news_details">
                                                <div class="row justify-content-center"> 
                                                <div class="col-10" >
                                                <?php echo $result1['para'];?>
    
                                                    </div>
                                                    <div class="news_img" style="display: flex;width: fit-content;flex-wrap: wrap;height: fit-content;justify-content:space-evenly;" style="border: 2px solid green;">
                                                        <img src="" alt="" style="width:40%;height: 40%;">
                                                    </div>
                                                </div>
                                                    <div class="row like_comment justify-content-center" style="background-color:whitesmoke;" >
                                                        <div class="col-8 btn" style="display:flex;justify-content:space-evenly;align-items: center;">
                                                            <button style="color: white; background-color: rgb(0, 110, 255);" class="btn">Like</button>
                                                            <form action="post" style="display: flex;" >
                                                            <textarea name="comment" rows="1" style="border-radius: 10px;"></textarea>
                                                            <button style="color: white;background-color: rgb(0, 110, 255);" type="submit" class="btn">Comment</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <?php
                                           }
                                       ?>
                                        
                              </div>   
                                 </div>
                        </div>
                                        <?php } ?>
                                        </div>
                                        </div>

                                        <script>
 function functiona(a){
     
     window.location.href = "../profile/notable_profile.php?width=" + a;
 }
 </script>
 
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
    </footer>  
</body>

</html>