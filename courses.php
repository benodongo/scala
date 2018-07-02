<?php
require_once( 'admin/cms.php' );
?>

<cms:template>

    <cms:editable name='course_one_title' type='richtext'>
        Android Applications Development
    </cms:editable>
    <cms:editable name='course_one_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name='course_two_title' type='richtext'>
        Web Designs and Development
    </cms:editable>
    <cms:editable name='course_two_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name='course_three_title' type='richtext'>
        ICDL
    </cms:editable>
    <cms:editable name='course_three_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name='course_four_title' type='richtext'>
        Oracle JAVA Certification
    </cms:editable>
    <cms:editable name='course_four_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name='course_five_title' type='richtext'>
        Information Security
    </cms:editable>
    <cms:editable name='course_five_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name='course_six_title' type='richtext'>
        Networking and Network Management
    </cms:editable>
    <cms:editable name='course_six_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
</cms:template>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Scala - Courses</title>
    <!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,500,700" rel="stylesheet">
	
	
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawsome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Lightbox Gallery -->
    <link href="inc/lightbox/css/jquery.fancybox.css" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Preloader CSS-->
    <link href="css/fakeLoader.css" rel="stylesheet">
	<!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">

	<!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="all-course-1x">

	
    <div class="edufair-container">
	
		<!-- Top menu -->
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top-menu-left">
							<p>Need help?</p>
							<b><i class="fa fa-phone"></i> (+254) 723 456 789</b>
							<b><i class="fa fa-envelope"></i> info@scala.com</b>
						</div>				
					</div>				
					<div class="col-md-6">
						<div class="top-menu-right">
							<a href="#" class="" data-toggle="modal" data-target="#regiater"><i class="fa fa-user"></i> Register</a>
							<a href="#" class="" data-toggle="modal" data-target="#log-in"><i class="fa fa-lock"></i> Login</a>

						
						</div>				
					</div>
					
					<div class="col-md-12">
						<!-- Modal -->
						<div class="modal fade" id="regiater" tabindex="-1" role="dialog">
						  <div class="modal-dialog modal-sm" role="document">
							<div class="modal-content">
														  
							  <div class="modal-body">
								<div class="edufair-subscription-1x">
									<div class="edufair-subscription-title-1x">
										<h3>Register Now</h3>
									</div>
									<div class="edufair-subscription-form-1x">							
										<form action="php/contact-form.php" method="POST">
											<div class="col-md-12">
												<a href="#" class="edufair-btn-larg btn-block facebook-login"><i class="fa fa-facebook"></i> Register with Facebook </a>
											</div>
											<div class="col-md-12">
												<a href="#" class="edufair-btn-larg btn-block google-login"><i class="fa fa-google"></i> Register with Google </a>
											</div>
											<div class="col-md-12">
												<div class="form-group">									    				    	
													<input type="text" id="name" class="form-control" placeholder="Name" required >
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">									    										    
													<input type="email" class="form-control" id="email1" placeholder="Email" required >
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">									    										    
													<input type="password" class="form-control" id="password1" placeholder="Password" required >
												</div>
											</div>
											<div class="col-md-12">
												<a href="#" class="edufair-btn-larg btn-block"> Submit </a>
											</div>
											<div class="col-md-12 terms-condition">
												<p>Already a member? <a href="#" class="" data-toggle="modal" data-target="#log-in"> Login </a></p>
												<h6>By signing up, you agree to our <a href="#" class=""> Terms of Use and Privacy Policy. </a></h6>
											</div>
										</form>	
									</div>			
								</div>	
							  </div>
							  
							</div>
						  </div>
						</div>
						
						<!-- Modal -->
						<div class="modal fade" id="log-in" tabindex="-1" role="dialog">
						  <div class="modal-dialog modal-sm" role="document">
							<div class="modal-content">
														  
							  <div class="modal-body">
								<div class="edufair-subscription-1x">
									<div class="edufair-subscription-title-1x">
										<h3>Login</h3>
									</div>
									<div class="edufair-subscription-form-1x">							
										<form action="php/contact-form.php" method="POST">
											<div class="col-md-12">
												<a href="#" class="edufair-btn-larg btn-block facebook-login"><i class="fa fa-facebook"></i> Login with Facebook </a>
											</div>
											<div class="col-md-12">
												<a href="#" class="edufair-btn-larg btn-block google-login"><i class="fa fa-google"></i> Login with Google </a>
											</div>
											<div class="col-md-12">
												<div class="form-group">									    										    
													<input type="email" class="form-control" id="email2" placeholder="Email" required >
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">									    										    
													<input type="password" class="form-control" id="password2" placeholder="Password" required >
												</div>
											</div>
											<div class="col-md-12">
												<a href="#" class="edufair-btn-larg btn-block"> Login </a>
											</div>
											<div class="col-md-12 terms-condition">
												<p>Or <a href="#" class=""> Forget Password </a></p>
												<h6>By signing up, you agree to our <a href="#" class=""> Terms of Use and Privacy Policy. </a></h6>
											</div>

										</form>	
									</div>			
								</div>	
							  </div>
							  
							</div>
						  </div>
						</div>					
					</div>
					
				</div>				
			</div>
		</div>
		<!-- End top menu -->
		
		<!-- Start Main Nav -->
		<div class="edufair-header edufair-course-header">		
			<nav class="navbar navbar-default edufair-nav">
				<div class="container">	
				  <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>				
						<i class="fa fa-align-right fa-2"></i>
					  </button>
					  <a class="navbar-brand edufair-brand edufair-light" href="#"><img src="images/scala.png" alt="Logo"></a>
					  <a class="navbar-brand edufair-brand edufair-dark" href="#"><img src="images/scala.png" alt="Logo"></a>
					</div>

					  <!-- Collect the nav links, forms, and other content for toggling -->
					  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


						  <ul class="nav navbar-nav navbar-right">
							  <li class="dropdown">
								  <a href="index.php">Home</a>
							  </li>

							  <li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Course  <i class="fa fa-angle-down"></i></a>
								  <ul class="dropdown-menu">
									  <li><a href="courses.php">All Courses</a></li>
									  <li><a href="#">IT Courses</a></li>
									  <li><a href="#"></a></li>
								  </ul>
							  </li>
							  <li><a href="about-us.php">About Us</a></li>

							  <li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apply <i class="fa fa-angle-down"></i></a>
								  <ul class="dropdown-menu">
									  <li><a href="#">Registration</a></li>
								  </ul>
							  </li>
							  <li><a href="contact-us.php">Contact Us</a></li>
						  </ul>

						  <div class="edufair-cart hidden-xs">
							  <div class="box">
								  <div class="container-2">
									  <span class="icon"><i class="fa fa-search"></i></span>
									  <input type="search" id="search" placeholder="Search..." />
								  </div>
							  </div>

						  </div><!-- /.navbar-collapse -->
					
				  </div><!-- /.container-fluid -->
				</div>
			</nav>			
			<!-- End Main Menu -->
			
			<!-- Start main slider -->
			<div id="carousel-example-generic" class="carousel slide edufair-slide carousel-fade" data-ride="carousel"> 
				<!-- Wrapper for slides -->		   
				<div class="carousel-inner edufair-inner single-inner" role="listbox">									
						<div class="edufair-overlay">
							<img src="images/online-course/slider-7.jpg" alt="slide 1" class="edufair-slider-image edufair-single-image">
							<div class="carousel-caption edufair-caption edufair-single-caption">
								<div class="edufair-slider-middle">
									<div class="container edufair-slider-text">
										<h2 class="fadeInLeft">OUR PROGRAMMES</h2>
										<ol class="breadcrumb edufair-single-breadcrumbs">
										  <li><a href="#">Home</a></li>
										  <li><a href="#">All Course One</a></li>										 
										</ol>										
									</div>
								</div>
							</div>				  
						</div>
				</div>
				<!-- End main slider -->
			</div>
						
		</div>


		<div class="margin-top-middle"></div>

        <!-- Start edufair course -->
        <div class="university-1x">
            <div class="edufair-course-1x university-course-1x">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="edufair-single-blog">
                                <div class="edufair-blog-overlay">
                                    <img src="images/university/course1.jpg" alt="Avatar" class="edufair-blog-image">
                                    <div class="edufair-blog-middle">
                                        <div class="blog-share">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-google"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <a href="#" class="">
                                        <h3><cms:show course_one_title/></h3>
                                    </a>

                                    <p><cms:show course_one_info/></p>

                                    <div class="blog-footer">
                                        <a href="#" class="edufair-course-text">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="edufair-single-blog">
                                <div class="edufair-blog-overlay">
                                    <img src="images/university/course2.jpg" alt="Avatar" class="edufair-blog-image">
                                    <div class="edufair-blog-middle">
                                        <div class="blog-share">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-google"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <a href="#" class="">
                                        <h3><cms:show course_two_title/></h3>
                                    </a>

                                    <p><cms:show course_two_info/></p>
                                    <div class="blog-footer">
                                        <a href="#" class="edufair-course-text">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="edufair-single-blog">
                                <div class="edufair-blog-overlay">
                                    <img src="images/university/course3.jpg" alt="Avatar" class="edufair-blog-image">
                                    <div class="edufair-blog-middle">
                                        <div class="blog-share">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-google"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <a href="#" class="">
                                        <h3><cms:show course_six_title/></h3>
                                    </a>

                                    <p><cms:show course_six_info/></p>
                                    <div class="blog-footer">
                                        <a href="#" class="edufair-course-text">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="edufair-single-blog">
                                <div class="edufair-blog-overlay">
                                    <img src="images/university/course4.jpg" alt="Avatar" class="edufair-blog-image">
                                    <div class="edufair-blog-middle">
                                        <div class="blog-share">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-google"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <a href="#" class="">
                                        <h3><cms:show course_three_title/></h3>
                                    </a>

                                    <p><cms:show course_three_info/></p>
                                    <div class="blog-footer">
                                        <a href="#" class="edufair-course-text">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="edufair-single-blog">
                                <div class="edufair-blog-overlay">
                                    <img src="images/university/course5.jpg" alt="Avatar" class="edufair-blog-image">
                                    <div class="edufair-blog-middle">
                                        <div class="blog-share">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-google"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <a href="#" class="">
                                        <h3><cms:show course_four_title/></h3>
                                    </a>

                                    <p><cms:show course_four_info/></p>
                                    <div class="blog-footer">
                                        <a href="#" class="edufair-course-text">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="edufair-single-blog">
                                <div class="edufair-blog-overlay">
                                    <img src="images/university/course6.jpg" alt="Avatar" class="edufair-blog-image">
                                    <div class="edufair-blog-middle">
                                        <div class="blog-share">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-google"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <a href="#" class="">
                                        <h3><cms:show course_five_title/></h3>
                                    </a>

                                    <p><cms:show course_five_info/></p>
                                    <div class="blog-footer">
                                        <a href="#" class="edufair-course-text">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="text-center padding-bottom-large">
                                <nav class="course-pagination" aria-label="Page navigation">
                                    <ul class="pagination edufair-pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <i class="fa fa-angle-left"></i>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End edufair course-->






        <!-- Start Footer -->
		<footer class="edufair-footer-1x">		
			
			  <div class="edufair-footer-content">
					<div class="container">
						<div class="row">
							<div class="col-md-12 edufair-footer-subscription">	
								
							</div>	
							<div class="col-md-4 edufair-footer-address">	
								<a href="#"><img src="images/scala.png" alt="Logo"></a><br>
								
									<p> <i class="fa fa-phone"></i>(00) 123 456 789 </p>				
									<p> <i class="fa fa-envelope"></i>hello@edufair.com </p>								
									<p> <i class="fa fa-map-marker"></i> 123 walton gorgia street,<br> west town hall, London, UK. </p>											
							</div>
							<div class="col-md-2">
								<h5> Company </h5>
								<ul>
									<li><a href="#"> Help Center </a></li>				
									<li><a href="#"> Student support </a></li>				
									<li><a href="#"> Language Packs </a></li>				
									<li><a href="#"> Privacy policy </a></li>				
									<li><a href="#"> Become a Teacher </a></li>	
								</ul>
							</div>
							
							<div class="col-md-2">	
								<h5> Useful Links </h5>
								<ul>
									<li><a href="#"> Help Center </a></li>				
									<li><a href="#"> Student support </a></li>				
									<li><a href="#"> Language Packs </a></li>				
									<li><a href="#"> Privacy policy </a></li>				
									<li><a href="#"> Become a Teacher </a></li>				
								</ul>			
							</div>
							<div class="col-md-2">	
								<h5> Support </h5>
								<ul>
									<li><a href="#"> Help Center </a></li>				
									<li><a href="#"> Student support </a></li>				
									<li><a href="#"> Language Packs </a></li>				
									<li><a href="#"> Privacy policy </a></li>				
									<li><a href="#"> Become a Teacher </a></li>				
								</ul>			
							</div>
							<div class="col-md-2">	
								<h5> Community </h5>
								<ul>
									<li><a href="#"> Help Center </a></li>				
									<li><a href="#"> Student support </a></li>				
									<li><a href="#"> Language Packs </a></li>				
									<li><a href="#"> Privacy policy </a></li>				
									<li><a href="#"> Become a Teacher </a></li>				
								</ul>			
							</div>					
							
							<div class="col-md-12 footer-info">	
								<div class="row">	
									<div class="col-md-6 footer-info-left">
										<p>All Rights Reserved <a href="#"> Scala Institute </a></p>
									</div>			
									<div class="col-md-6 footer-info-right">
										<ul>
											<li><a href="#"> <i class="fa fa-facebook"></i> </a></li>										
											<li><a href="#"> <i class="fa fa-twitter"></i> </a></li>											
											<li><a href="#"> <i class="fa fa-google"></i> </a></li>									
											<li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>											
										</ul>					
									</div>					
								</div>					
							</div>					
						</div>					
					</div>			
			  </div>		  
		</footer>	
		<!-- End Footer -->	
	</div>

		
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>		
	<!-- Preloader js -->
    <script src="js/fakeLoader.min.js"></script>	
	<!-- Masonry Portfolio Script -->
    <script src='https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js'></script>
	<!-- Lightbox js -->
	<script src="inc/lightbox/js/jquery.fancybox.pack.js"></script>
	<script src="inc/lightbox/js/lightbox.js"></script>
	<!-- Wow js -->
    <script src="js/wow.min.js"></script>
	<!-- Counter Script -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Scroll bottom to top -->
	<script src="js/scrolltopcontrol.js"></script>	
	<!-- Stiky menu -->
	<script src="js/jquery.sticky.js"></script>	
	<!-- Stiky Sidebar -->
	<script src="js/theia-sticky-sidebar.min.js"></script>
	
	<!-- Custom script -->
    <script src="js/custom.js"></script>
	
  </body>
</html>
<?php COUCH::invoke(); ?>