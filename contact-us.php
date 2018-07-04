<?php
require_once( 'admin/cms.php' );
?>

<cms:template>
    <cms:editable name='location' type='richtext'>
        y plaza mlolongo,
        machakos county.
    </cms:editable>
    <cms:editable name='contact_us' type='richtext'>
        Mobile: (00) 123 456 789
        Fax: (00) 123 456 789
    </cms:editable>
    <cms:editable name='email' type='richtext'>
        info@scala.ac.ke
        helpdesk@scala.com
    </cms:editable>




</cms:template>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Scala - Contact Us</title>
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
  <body class="contact-us-1x">
	
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
										<h2 class="fadeInLeft">Contact Us</h2>	
										<ol class="breadcrumb edufair-single-breadcrumbs">
										  <li><a href="#">Home</a></li>
										  <li class="active">Contact Us</li>
										</ol>										
									</div>
								</div>
							</div>				  
						</div>
				</div>
				<!-- End main slider -->
			</div>
	
		</div>
		
		
		
		
		<!-- Start Online course fratured category -->				

		<div class="online-course-2x">
			<div class="edufair-featured-category-1x padding-top-large margin-bottom-large">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="featured-category-container">
								
								<div class="col-md-4">
									<div class="single-featured-category">
									
										<div class="featured-category-img">
											<i class="fa fa-map-marker"></i>
										</div>
										
										<h4>Our Location</h4>
										<p><cms:show location/></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="single-featured-category">
									
										<div class="featured-category-img">
											<i class="fa fa-phone"></i>
										</div>
										
										<h4>Contact Us</h4>
										<p> <cms:show contact_us/>
										</p>
										
									</div>
								</div>
								<div class="col-md-4">
									<div class="single-featured-category">
									
										<div class="featured-category-img">
											<i class="fa fa-location-arrow"></i>
										</div>
										
										<h4>Email</h4>
										<p> <cms:show email/>
										</p>	
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Online course fratured category -->



		<!-- Contact Form -->
		<div class="uuniversity-2x admission-apply-1x">
			<div class="admission-form-1x">					
				<div class="container">
					<div class="row">		
						<div class="edufair-subscription-1x contact-us-header">
							<h2>Leave a Message</h2>
							<h3>Your email address will not be published. Required fields are marked.</h3>
							
							<div class="edufair-subscription-form-1x">
								<form action="contact-form.php" method="POST">
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" id="name" class="form-control" placeholder="Name" required="" name="name" >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="email" class="form-control" id="email2" placeholder="Email" required name="email" >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="number" class="form-control" id="phone-no" placeholder="Phone Number" required  name="telephone">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea type="text" class="form-control" id="message" placeholder="Message" required  name="comments"></textarea>
										</div>
									</div>
									<div class="col-md-12">
                                        <input type="submit" value="Submit" name="submit"  class="edufair-btn-larg notice-read-more">
									</div>

								</form>
							</div>
						</div>
					</div>		
				</div>		
			</div>		
		</div>		
		<!-- End Contact Form -->
		
		
		<!-- Start Client Map -->
		<div class="client_map wow fadeInDown padding-top-middle">
			<div class="row">
				<div id="map"></div>
			</div>
		</div>
		<!-- End Client Map -->	
		
		
				
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
	<!-- Google map js -->
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa6w23do1qZsmF1Xo3atuFzzMYadTuTu0" type="text/javascript"></script>	
	<script src="js/map.js"></script>
	<!-- Custom script -->
    <script src="js/custom.js"></script>
	
  </body>
</html>
<?php COUCH::invoke(); ?>