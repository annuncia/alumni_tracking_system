<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Chat</title>
		<meta name="description" content="#">
		<meta name="viewport" content="">
		<!-- Bootstrap core CSS -->
		<link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
		<!-- Swipe core CSS -->
		<link href="dist/css/swipe.min.css" type="text/css" rel="stylesheet">
		<!-- Favicon -->
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/gijgo.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slicknav.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"> </script>
	</head>
	<body>
	<header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo-kongu.png"width="100" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                             <li><a href="jobs.html">Job offers</a></li>
                                            <li><a href="search.html">Search</a></li>
                                            <li><a href="../profile/index.html  ">Profile</a></li>
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
                                        <a class="boxed-btn3" href="../html/index.html">Logout</a>
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
	<div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>CHAT</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<main>
			<div class="layout">
				<!-- Start of Sidebar -->
				<div class="sidebar" id="sidebar">
					<div class="container">
						<div class="col-md-12">
							<div class="tab-content">
								<!-- Start of Discussions -->
								<div id="discussions" class="tab-pane fade active show">				
									<div class="discussions">
										<h1>Chat</h1>
										<div class="list-group" id="chats" role="tablist">
											<?php 
												$conn=mysqli_connect("localhost","root","","alumni");
												$sql="SELECT chated_rollno from chat_contacts where rollno='18itr004'";
												$result=mysqli_query($conn,$sql);
												while($res=mysqli_fetch_array($result)) {
												$roll=$res['chated_rollno'];
												$sql="SELECT name,rollno,profile_pic_path from signup where rollno='$roll'";
												$result1=mysqli_query($conn,$sql);
												$result_1=mysqli_fetch_array($result1);
                                                ?>

        
											<a href="" onclick="my('<?php echo $result_1['rollno'];?>')"class="filterDiscussions all unread single active" id="list" data-toggle="list" role="tab">
												<img class="avatar-md" src="<?php echo $result_1['profile_pic_path']; ?>" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												
												
												<div class="data">
													<h5> <?php echo $result_1['name']; ?> </h5>
													
												</div>
											</a>
											<?php } ?>									
										</div>
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sidebar -->
				
			
				
				<div class="main"id="">
					<div class="tab-content" id="nav-tabContent">
						<!-- Start of Babble -->
						<div class="babble tab-pane fade active show" id="list-chat" role="tabpanel" aria-labelledby="list-chat-list">
							<!-- Start of Chat -->
							<div class="chat" id="chat1">
								<div class="top">
									<div class="container">
										<div class="col-md-12">
											<div class="inside"> 
											
												
												<div class="data">
													<h5><a href="#" id="name">  </a></h5>
													<span></span>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="content" id="content">
									<div class="container">
										<div class="col-md-12">
											
											<div class="message">
												<img class="avatar-md" src="dist/img/avatars/avatar-female-5.jpg" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
												<div class="text-main">
													<div class="text-group">
														<div class="text">
															<p id="message"></p>
														</div>
													</div>
													<span id="message"> </span>
												</div>
											</div>
											<div class="message me">
												<div class="text-main">
													<div class="text-group me">
														<div class="text me">
															<p id="message-me"> </p>
														</div>
													</div>
													<span id="message-me"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="col-md-12">
										<div class="bottom">
											<form class="position-relative w-100">
												<textarea class="form-control" placeholder="Start typing for reply..." rows="1"></textarea>
												
												<button type="submit" class="btn send"><i class="material-icons">send</i></button>
											</form>
											
										</div>
									</div>
								</div>
							</div>
							<!-- End of Chat -->
						</div>	
						
					</div>
				</div>
													
			</div> <!-- Layout -->
		</main>
		
		<script src="dist/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="dist/js/vendor/popper.min.js"></script>
		<script src="dist/js/swipe.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script type ="text/javascript">
			function my(str)
			{ 	
				var xhttp;
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					document.getElementById("name").innerHTML = this.responseText;
					}
				};
				xhttp.open("GET", "name.php?q="+str, true);
				xhttp.send();

				var xhttp1;
				xhttp1 = new XMLHttpRequest();
				xhttp1.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					document.getElementById("message").innerHTML = this.responseText;
					}
				};
				xhttp1.open("GET", "message.php?q="+str, true);
				xhttp1.send();
                 
				var xhttp2;
				str="18itr004";
				xhttp2 = new XMLHttpRequest();
				xhttp2.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					document.getElementById("message-me").innerHTML = this.responseText;
					}
				};
				xhttp2.open("GET", "message-me.php?q="+str, true);
				xhttp2.send();

			}
         

		</script>
	</body>

</html>