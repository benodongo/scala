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
                                    <img src="<cms:show course_six_img/>" alt="Avatar" class="edufair-blog-image" style="height: 170px">
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