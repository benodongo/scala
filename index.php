<?php
require_once( 'admin/cms.php' );
?>

<cms:template>
    <cms:editable name="slider1" type="image"/>
    <cms:editable name="slider2" type="image"/>

    <cms:editable name='main_content' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </cms:editable>
    <cms:editable name="index_image" type="image"/>
    <cms:editable name="news1" type="richtext">
        Safaricom Mpesa intergration bootcamp
    </cms:editable>
    <cms:editable name="news2" type="richtext">
        Tech competition IOT Hackathon
    </cms:editable>
    <cms:editable name="news3" type="richtext">
        opening of August intake
    </cms:editable>
    <cms:editable name='course_one_title' type='richtext'>
        Android Applications Development
    </cms:editable>
    <cms:editable name='course_one_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name="course_one_img" type="image"/>
    <cms:editable name='course_two_title' type='richtext'>
        Web Designs and Development
    </cms:editable>
    <cms:editable name='course_two_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name="course_two_img" type="image"/>
    <cms:editable name='course_three_title' type='richtext'>
        ICDL
    </cms:editable>
    <cms:editable name='course_three_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name="course_three_img" type="image"/>
    <cms:editable name='course_four_title' type='richtext'>
        Oracle JAVA Certification
    </cms:editable>
    <cms:editable name='course_four_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name="course_four_img" type="image"/>
    <cms:editable name='course_five_title' type='richtext'>
        Information Security
    </cms:editable>
    <cms:editable name='course_five_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name="course_five_img" type="image"/>
    <cms:editable name='course_six_title' type='richtext'>
        Networking and Network Management
    </cms:editable>
    <cms:editable name='course_six_info' type='richtext'>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </cms:editable>
    <cms:editable name="course_six_img" type="image"/>



</cms:template>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Scala - Institute</title>
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
  <body class="university-1x">
    <div class="edufair-container">
	
<!--        include the header file-->
        <?php
        require ('inc/header.php');
        ?>

			<!-- Start main slider -->
			<div id="carousel-example-generic" class="carousel slide edufair-slide carousel-fade" data-ride="carousel"> 
				<!-- Wrapper for slides -->		   
				<div class="carousel-inner edufair-inner " role="listbox">				
					<div class="item active">
						<div class="edufair-overlay">
							<img src="<cms:show slider1/>" alt="slide 1" class="edufair-slider-image">
							<div class="carousel-caption edufair-caption">
								<div class="edufair-slider-middle">
									<div class="container edufair-slider-text">
										<h4 class="fadeInDown animated">Education is the movement from darkness to light.</h4>
										<h2 class="fadeInLeft">Better education for <br> Excellent world</h2>
										<a href="" class="edufair-btn-larg-round fadeInUp animated"> Get Started Now <i class="fa fa-angle-right"></i></a>
									</div>
								</div>
							</div>				  
						</div>
					</div>
					
					<div class="item edufair-overlay">
						<div class="edufair-overlay">
							<img src="<cms:show slider1/>" alt="slide 1" class="edufair-slider-image">
							<div class="carousel-caption edufair-caption">
								<div class="edufair-slider-middle">
									<div class="container edufair-slider-text">
										<h4 class="fadeInDown animated">Join Scala to acquire the best in  IT</h4>
										<a href="" class="edufair-btn-larg-round fadeInUp animated"> Get Started Now </a>
									</div>
								</div>
							</div>				  
						</div>		  					  
					</div>
					
				</div>

				<!-- Controls -->
				<a class="left carousel-control edufair-control" href="#carousel-example-generic" role="button" data-slide="prev"></a>
				<a class="right carousel-control edufair-control" href="#carousel-example-generic" role="button" data-slide="next"></a>
			</div>
			<!-- End main slider -->
		</div>

	
		<!-- Start edufair About University -->
		<div class="container">
			<div class="edufair-about-university">
			
				<div class="row">
					<div class="col-md-8">

                        <div class="row">

							<div class="col-md-6">
								<h2 class="edufair-main-title">About Scala</h2>
								<p>
                                    <cms:show main_content/>
                                </p>

								<a href="#" class="edufair-course-text">Read More</a>
							</div>

							<div class="col-md-6 ">

								<img src="<cms:show index_image />" alt="Avatar" class="">
<!--                                <img src="images/university/uv-image7_2.jpg" alt="Avatar" class="">-->
							</div>
						</div>

					</div>
					<div class="col-md-4">	
						
						<div class="latest-post-right-sidebar">
							<h3>Latest News</h3>
							
							<div class="single-latest-post">
								<div class="media">
								  <div class="media-body">									
									<a href="#" class="">
										Tech competition IOT Hackathon
									</a><br>
									<span><i class="fa fa-clock-o"></i> 22 July, 2018</span>
								  </div>
								</div>
							</div>
							<div class="single-latest-post">
								<div class="media">
								  <div class="media-body">									
									<a href="#" class="">
										Safaricom Mpesa intergration bootcamp
									</a><br>
									<span><i class="fa fa-clock-o"></i> 22 July, 2018</span>
								  </div>
								</div>
							</div>
							<div class="single-latest-post">
								<div class="media">
								  <div class="media-body">									
									<a href="#" class="">
										opening of August intake
									</a><br>
									<span><i class="fa fa-clock-o"></i> 22 August, 2018</span>
								  </div>
								</div>
							</div>
							
							<a href="#" class="latest-post-read-more"> See All News <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	
		<!-- Start edufair features -->
		<div class="container">
			<div class="row">
				<div class="edufair-features">		
					<div class="col-md-4 wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
						<div class="media edufair-single-features edufair-single-features-1x wow fadeInDown">
						  <div class="media-left">
							<img src="images/kindergarten/icon1.png" alt="" />
						  </div>
						  <div class="media-body">
							<h4 class="media-heading edufair-subtitle">industry <br> leaders</h4>
							<a href="#" class="">View More</a>
						  </div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
						<div class="media edufair-single-features  edufair-single-features-2x">
							<div class="media-left">
								<img src="images/kindergarten/icon7.png" alt="" />
							</div>
							<div class="media-body">
								<h4 class="media-heading edufair-subtitle">Modern Computer <br> Laboratories</h4>
								<a href="#" class="">View More</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
						<div class="media edufair-single-features  edufair-single-features-6x">
							<div class="media-left">
								<img src="images/kindergarten/icon2.png" alt="" />
							</div>
							<div class="media-body">
								<h4 class="media-heading edufair-subtitle">Highly Experienced <br> Instructors </h4>
								<a href="#" class="">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End edufair slider features -->	


		<!-- Start edufair course -->
		<div class="edufair-course-1x university-course-1x">
			<div class="container">			
				<div class="row">
					<div class="col-md-12">
						<h2 class="edufair-main-title">Our Courses</h2>
						
						<!-- Controls -->
						<a class="left carousel-control  edufair-controll-1x" href="#course-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="right carousel-control edufair-controll-1x" href="#course-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				
				<div id="course-carousel" class="carousel slide carousel-fade" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">					
								<div class="col-md-4">						
									<div class="edufair-single-blog">						
										<div class="edufair-blog-overlay">
										  <img src="<cms:show course_one_img/>" alt="Avatar" class="edufair-blog-image" style="height: 170px">
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
										  <img src="<cms:show course_two_img/>" alt="Avatar" class="edufair-blog-image" style="height: 170px">
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
										  <img src="<cms:show course_three_img/>" alt="Avatar" class="edufair-blog-image" style="height: 170px">
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
	
							</div>
						</div>
						<div class="item">
							<div class="row">					
								<div class="col-md-4">						
									<div class="edufair-single-blog">						
										<div class="edufair-blog-overlay">
										  <img src="<cms:show course_four_img/>" alt="Avatar" class="edufair-blog-image" style="height: 170px">
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
										  <img src="<cms:show course_five_img/>" alt="Avatar" class="edufair-blog-image" style="height: 170px">
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
								<div class="col-md-4">						
									<div class="edufair-single-blog">						
										<div class="edufair-blog-overlay">
										  <img src="<cms:show course_six_img/>" alt="Avatar" class="edufair-blog-image" style="height: 170px"   >
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
	
							</div>
						</div>						
						
																
					</div>				
					
				</div>		
			</div>
		</div>
		<!-- End edufair course-->
		<!-- Start edufair count down timer -->
		<div class="edufair-countdown-timer-1x university-countdown-1x margin-top-large">
			<div class="countdown-overlay">
				<img src="images/university/page-bg4.jpg" alt="slide 1" class="edufair-slider-image">

				<div class="countdown-overlay-middle">
					<div class="countdown-overlay-text">
						<div class="container">
							<div class="row">
								<div class="col-md-12 text-center university-countdown">
									<h2 class="edufair-main-title">Admission Going On... </h2>
									<div class="edufair-countdown">
										<div class="col-md-8 col-md-offset-2">
											<div id="edufaircd"></div>
										</div>
									</div>
									<div class="col-md-12">
										<a href="#" class="edufair-course-text">Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start edufair count down timer -->
		
		
		<!-- Start event -->
		<div class="edufair-events-1x">
			<div class="container">
				<div class="row">
					<div class="col-md-8 margin-bottom-middle">
						<h4 class="edufair-sub-title">Join our uppcomming events</h4>
						<h2 class="edufair-main-title">Latest Events</h2>						
					</div>
					<div class="col-md-4">
						<a href="#" class="edufair-btn-larg events-all-button"> All events </a>
					</div>
					<div class="event-container-1x">								
						<div class="col-md-8">
							<div class="single-events-1x">
								<div class="media">
									<div class="media-left media-middle">
										<b>25</b>
										<span>Jun</span>
									</div>
									<div class="media-body">
										<h4 class="media-heading">Arts Therapy For Self-Exploration Project</h4>
										<div class="event-schedule">
											<i class="fa fa-clock-o"></i> 8:00 am - 5:00 pm &nbsp;&nbsp;&nbsp;&nbsp;
											<i class="fa fa-map-marker"></i> New York, US								
										</div>
									</div>
									<p>Tech you how to build a complete Learning Management System with WordPress and LearnPress.Tech you how to build a complete Learning Management System with WordPress and LearnPress.</p>
									<div class="event-cost">
										<b>Entry Fee : <span> $50</span></b>
									</div>
								</div>					
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-events-image-1x">
								<div class="edufair-course-overlay">
									<img src="images/scala.png" alt="Avatar" class="edufair-course-image edufair-event-image">
									<div class="edufair-course-middle">
										<a href="#" class="edufair-course-text">Read More</a>
									</div>
								</div>
							</div>								
						</div>								
					</div>
					<div class="event-container-1x">
						<div class="col-md-8">
							<div class="single-events-1x">
								<div class="media">
									<div class="media-left media-middle">
										<b>28</b>
										<span>Jun</span>
									</div>
									<div class="media-body">
										<h4 class="media-heading">Shamanic Initiation for Spiritual Awakening</h4>
										<div class="event-schedule">
											<i class="fa fa-clock-o"></i> 8:00 am - 5:00 pm &nbsp;&nbsp;&nbsp;&nbsp;
											<i class="fa fa-map-marker"></i> New York, US								
										</div>
									</div>
									<p>Tech you how to build a complete Learning Management System with WordPress and LearnPress.Tech you how to build a complete Learning Management System with WordPress and LearnPress.</p>
									<div class="event-cost">
										<b>Entry Fee : <span> $50</span></b>
									</div>
								</div>					
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-events-image-1x">
								<div class="edufair-course-overlay">
									<img src="images/scala.png" alt="Avatar" class="edufair-course-image edufair-event-image">
									<div class="edufair-course-middle">
										<a href="#" class="edufair-course-text">Read More</a>
									</div>
								</div>
							</div>								
						</div>								
					</div>
					<div class="event-container-1x">
						<div class="col-md-8">
							<div class="single-events-1x">
								<div class="media">
									<div class="media-left media-middle">
										<b>31</b>
										<span>Jun</span>
									</div>
									<div class="media-body">
										<h4 class="media-heading">Investing In Stocks The Complete Course</h4>
										<div class="event-schedule">
											<i class="fa fa-clock-o"></i> 8:00 am - 5:00 pm &nbsp;&nbsp;&nbsp;&nbsp;
											<i class="fa fa-map-marker"></i> New York, US								
										</div>
									</div>
									<p>Tech you how to build a complete Learning Management System with WordPress and LearnPress.Tech you how to build a complete Learning Management System with WordPress and LearnPress.</p>
									<div class="event-cost">
										<b>Entry Fee : <span> $50</span></b>
									</div>
								</div>					
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-events-image-1x">
								<div class="edufair-course-overlay">
									<img src="images/scala.png" alt="Avatar" class="edufair-course-image edufair-event-image">
									<div class="edufair-course-middle">
										<a href="#" class="edufair-course-text">Read More</a>
									</div>
								</div>
							</div>								
						</div>								
					</div>
				</div>
			</div>
		</div>
		<!-- End event -->

		<div class="padding-bottom-large"></div>
		
	<?php
    require ('inc/footer.php');
	?>
	</div>

		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>		
	<!-- Countdown Script -->
	<script src="js/countdown.js"></script>
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