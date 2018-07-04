<?php
require_once( 'admin/cms.php' );
?>

<cms:template>

    <cms:editable name='main_content_p1' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </cms:editable>
    <cms:editable name='main_content_p2' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </cms:editable>
    <cms:editable name="about_image" type="image"/>



</cms:template>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Scala - About Us</title>
	<!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
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
  <body class="about-us-1x">
	
    <div class="edufair-container">

        <!--        include the header file-->
        <?php
        require ('inc/header.php');
        ?>
			
			<!-- Start main slider -->
			<div id="carousel-example-generic" class="carousel slide edufair-slide carousel-fade" data-ride="carousel"> 
				<!-- Wrapper for slides -->		   
				<div class="carousel-inner edufair-inner single-inner" role="listbox">									
						<div class="edufair-overlay">
							<img src="images/about.jpg" alt="slide 1" class="edufair-slider-image edufair-single-image">
							<div class="carousel-caption edufair-caption edufair-single-caption">
								<div class="edufair-slider-middle">
									<div class="container edufair-slider-text">
										<h2 class="fadeInLeft">About Us</h2>	
										<ol class="breadcrumb edufair-single-breadcrumbs">
										  <li><a href="#">Home</a></li>
										  <li><a href="#">About Us</a></li>										 
										</ol>										
									</div>
								</div>
							</div>				  
						</div>
				</div>
				<!-- End main slider -->
			</div>
						
		</div>
	


		
		<!-- Start edufair About University -->
		<div class="container">
			<div class="edufair-about-university">
			
				<div class="row">				

					<div class="col-md-6">
						<h2 class="edufair-main-title">About Scala</h2>
						<p><cms:show main_content_p1/></p>
						<p><cms:show main_content_p2/></p>
						<a href="#" class="edufair-course-text">Read More</a>
					</div>
					<div class="col-md-6 about-university-img">
						<img src="<cms:show about_image />" alt="Avatar" class="">
					</div>

				</div>
			</div>
		</div>

		<div class="margin-bottom-large"></div>
		
		<!-- Start Counter -->
		<div class="edufair-countdown-timer-1x university-countdown-1x edufair-counter-1x">		
			<div class="countdown-overlay">
			  <img src="images/university/uv-image5.jpg" alt="" class="school-overlay-image">
			  
			  <div class="countdown-overlay-middle">
				<div class="countdown-overlay-text">
					<div class="container">
						<div class="row">					
							<div class="col-md-3 single-counter">
								<i class="fa fa-male"></i><br/>
								<span class="counter">4550</span>
								<h6>Students</h6>
							</div>
							<div class="col-md-3 single-counter">
								<i class="fa fa-user"></i><br/>
								<span class="counter">210</span>
								<h6>Teachers</h6>
							</div>
							<div class="col-md-3 single-counter">
								<i class="fa fa-shield"></i><br/>
								<span class="counter">430</span>
								<h6>Awards</h6>
							</div>
							<div class="col-md-3 single-counter">
								<i class="fa fa-trophy"></i><br/>
								<span class="counter">256</span>
								<h6>Sport Activities</h6>
							</div>
							
						</div>		
					</div>				
				</div>
			  </div>
			</div>				
		</div>	
		<!-- End Counter -->

		<div class="margin-bottom-large"></div>

		<!-- Start Video Section -->
		<!-- Modal -->
		<div class="modal fade" id="myModalone" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">							      
		      <div class="modal-body">
		        <div class="embed-responsive embed-responsive-16by9">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BzMLA8YIgG0?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
				</div>
		      </div>							     
		    </div>
		  </div>
		</div>
		
		<div class="edufair-video-section-1x wow fadeIn" id="video"> <!-- Start Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="edufair-modal-video">
						  <img src="images/university/uv-image2.jpg" alt="Avatar" class="edufair-modal-video-image">
						  <div class="edufair-modal-video-middle">
							<div class="edufair-modal-video-text">

								<h4>Making your achivement</h4>
								<h2>Take a Tour</h2>
								
								<div class="clearfix"></div>
								<!-- Button trigger modal -->
								<button type="button" class="edufair-btn-round-full" data-toggle="modal" data-target="#myModalone">
								  <i class="fa fa-play"></i>
								</button>							

							</div>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="about-university">
							<h2 class="edufair-main-title">Our Campus</h2>
							<p>Quo eu probo omnium scriptorem, cum nostrudassu e ei. Sea nisl cibo gubergren et. Choro temporreferre ex eum. Nobis vivendum urbanitas pro te vel anpart inermis dolorem. Ea sit feugiat expetendis,Partiendo vitupesim Sed.</p>
								<br> 
							<p>eos brute bonorum te. mazim vulputate disputando sed te. Case aeterno utroque qui no. Prima auguelk molestie cu has. Vocibus hendrerit no pri, vel facilis principes ea. Partiendo vituperatoribus eu qui, ne sit.</p>	
								<br>	
							<a href="#" class="edufair-course-text">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- End Video Section -->




		<!-- Start Footer -->
        <?php
        require ('inc/footer.php');
        ?>
    </div>
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