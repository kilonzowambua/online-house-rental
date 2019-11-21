
<?php
			
			session_start();
			include('includes/config.php');
			if(isset($_POST['login']))
			{
			
			$email=$_POST['email'] ;
			$password=$_POST['password'];
			$stmt=$conn->prepare("SELECT email,password,cid FROM client WHERE email=? and password=? ");
							$stmt->bind_param('ss',$email,$password);
							$stmt->execute();
							$stmt -> bind_result($email,$password,$cid);
							$rs=$stmt->fetch();
							$_SESSION['cid']=$cid;
							
							if($rs)
							{
								header("location:client/");
							}
			
							else
							{
								echo "<script>alert('Access Denied Please Check Your Credentials');</script>";
							}
			}
							/*			if(isset($_POST['register'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$mname = ($_POST['mname']);
							$lname= $_POST['lname'];
							$age= ($_POST['age']);
						  $email = $_POST['email'];
							$password = ($_POST['password']);
							
							
							$qry = "INSERT INTO client (fname,mname,lname,age,email,password)
							VALUES('$fname','$mname','$lname','$age','$email','$password')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Joined!!.\");
											
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											
											</script>";
							}
						}
						*/
					  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>E-House:Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Vicarage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
	 <!-- gallery smoothbox  -->
    <link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" /<!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
</head>
<body>
    <!-- banner -->
    <div class="inner-banner">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="index.php">
                        E-house Rental
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="services.php">services</a>
                        </li>
                        <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Other service
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="about.php">About</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="typo.php">Typography</a>
                            </div>
                        </li>
                        <li class="nav-item active mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //header -->
       
    </div>
    <!-- //container -->
    <!-- //banner -->
	<!-- gallery -->
    <div class="agileits-services py-sm-5" id="gallery">
        <div class="container py-lg-5 pt-3 pb-5">
            <div class="w3ls-titles text-center mb-5">
				<h3 class="heading-agileinfo">Our  <span>Gallery</span></h3>
			</div>
            <div class="w3ls_gallery_grids pt-md-5 pt-3">
                <div class="row agileits_w3layouts_gallery_grid">
                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g1.jpg" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 hover14 my-sm-0 my-4">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g2.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g2.jpg" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 hover14">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g3.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g3.jpg" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row agileits_w3layouts_gallery_grid my-4">
                    <div class="col-sm-4 agileits_w3layouts_gallery_grid1 hover14 mt-sm-0 mt-4">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g8.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g8.jpg" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 agileits_w3layouts_gallery_grid1 hover14 mt-sm-0 mt-4">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g7.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g7.jpg" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 agileits_w3layouts_gallery_grid1 hover14 mt-sm-0 mt-4">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g9.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g9.jpg" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row agileits_w3layouts_gallery_grid">
                    <div class="col-sm-4 agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 mt-sm-0 mt-4">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g4.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g4.jpg" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 agileits_w3layouts_gallery_grid1 hover14 mt-sm-0 mt-4">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g5.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g5.jpg" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 agileits_w3layouts_gallery_grid1 hover14 mt-sm-0 mt-4">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g6.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g6.jpg" alt=" " class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->

	<!-- Footer -->
		<footer id="footer" class="py-5">
			<div class="container">
				<div class="row  py-lg-5">
					<div class="col-lg-3 col-sm-6 footer-logo">
						<h5>about us</h5>
						<h2>
							<a href="index.html">Real Estate</a>
						</h2>
						<p class="mt-3">Nulla quis lorem ut libermalesuada ultrices posuere cubilia feugiatrice praesent sapien massa</p>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li>
								<a href="index.php">
								<i class="fa fa-angle-double-right"></i>Home</a>
							</li>
							<li>
								<a href="about.php">
									<i class="fa fa-angle-double-right"></i>About</a>
							</li>
							<li>
								<a href="services.php">
									<i class="fa fa-angle-double-right"></i>Services</a>
							</li>
							<li>
								<a href="gallery.php">
									<i class="fa fa-angle-double-right"></i>Gallery</a>
							</li>
							<li>
								<a href="contact.php">
									<i class="fa fa-angle-double-right"></i>Contact</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
						<h5>working hours</h5>
						<ul class="list-unstyled quick-links">
							<li>
								Monday - Friday
								<br>
								<span>9.00 - 20.00</span>
							</li>
							<li>
								Saturday
								<br>
								<span> 10.00 - 16.00 </span>
							</li>
							<li>
								Sunday
								<br>
								<span> 9.30 - 18.00 </span>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 footer_grid1 mt-lg-0 mt-4">
						<h5>Address</h5>
						<div class="fv3-contact">
							<span class="fas fa-envelope-open mr-2"></span>
							<p>
								<a href="mailto:example@email.com">info@example.com</a>
							</p>
						</div>
						<div class="fv3-contact my-2">
							<span class="fas fa-phone-volume mr-2"></span>
							<p>+456 123 7890</p>
						</div>
						<div class="fv3-contact">
							<span class="fas fa-home mr-2"></span>
							<p>+90 nsequursu dsdesdc,
								<br>xxx Street State 34789.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="cpy-right text-center py-4">
			<p class="text-white">© 2018 E-house rental. All rights reserved | Design by
				<a href="http://kilonzowambua254.github.io"> Kilodev.</a>
			</p>
		</div>
	</div>
	<!-- /Footer -->

	<!-- login  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="email" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="login" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-secondary">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-secondary">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter2" class="text-dark font-weight-bold">
                                Register Now</a>
								
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
	 <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="modal-title text-center text-dark mb-4">REGISTER NOW</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="col-form-label">First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2 col-form-label">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>
							<div class="reg-w3l">
								<button type="submit" class="form-control submit mb-4">Register</button>
                           </div>
						   <p class="text-center pb-4">
                                <a href="#" class="text-secondary">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

    <!-- //footer -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
	<!-- gallery smoothbox -->
    <script src="js/smoothbox.jquery2.js"></script>

    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>