<?php
/**
 * Created by PhpStorm.
 * User: benson
 * Date: 7/4/18
 * Time: 2:33 PM
 */
?>
<?php
require_once( 'admin/cms.php' );
?>

<cms:template>

</cms:template>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Scala - Application</title>
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
                            <h2 class="fadeInLeft">Admission</h2>
                            <ol class="breadcrumb edufair-single-breadcrumbs">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Admission</a></li>
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

<!-- Contact Form -->
<div class="uuniversity-2x">
    <div class="admission-form-1x">
        <div class="container">
            <div class="row">
                <div class="edufair-subscription-1x">
                    <div class="edufair-subscription-title-1x">
                        <h3>Scala Admission</h3>
                    </div>
                    <div class="edufair-subscription-form-1x">
                        <form action="php/contact-form.php" method="POST">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email" required >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="phone-no" placeholder="Phone Number" required >
                                </div>
                            </div>
                            <div class="col-md-4">
                                Gender
                                <div class="form-group">
                                    <select name="gender" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                               Intake
                                <div class="form-group">
                                    <select name="gender" class="form-control">
                                        <option value="january">January</option>
                                        <option value="february">February</option>
                                        <option value="march">March</option>
                                        <option value="april">April</option>
                                        <option value="may">May</option>
                                        <option value="june">June</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12"><b>Select the Course you are Applying for:</b> </div>

                            <div class="col-md-3">
                                <b>Application Knowledge Base</b>
                                <div class="form-group">
                                    <input type="checkbox" name="course" value="computer essentials">Computer Essentials<br>
                                    <input type="checkbox" name="course" value="ICDL">ICDL<br>
                                    <input type="checkbox" name="course" value="digital graphics design">Digital Graphics Design<br>
                                </div>
                            </div>
                            <div class="col-md-3">
                               <b>Technical Courses</b>
                                <div class="form-group">
                                    <input type="checkbox" name="course" value="A+">A+<br>
                                    <input type="checkbox" name="course" value="N+">N+<br>
                                    <input type="checkbox" name="course" value="CCNA">CCNA<br>
                                    <input type="checkbox" name="course" value="Laptop Repair">Laptop Repair+<br>
                                    <input type="checkbox" name="course" value="Mobile Phone Repair">Mobile Phone Repair<br>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <b>Programming Courses</b>
                                <div class="form-group">
                                <input type="checkbox" name="course" value="Elementary Web Development">Elementary Web Development<br>
                                <input type="checkbox" name="course" value="Web Application Development">Web Application Development<br>
                                <input type="checkbox" name="course" value="Dynamic Website Development">Dynamic Website Development<br>
                                <input type="checkbox" name="course" value="Programming with Java">Programming with Java<br>
                                <input type="checkbox" name="course" value="Visual Studio Programming">Visual Studio Programming<br>
                                <input type="checkbox" name="course" value="Mobile App Development">Mobile App Development<br>
                                <input type="checkbox" name="course" value="Database Management Systems">Database Management Systems<br>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <b>Accounting Courses</b>
                                <div class="form-group">
                                <input type="checkbox" name="course" value="Computerised Accounting">Computerised Accounting<br>
                                <input type="checkbox" name="course" value="Accounting Technician Diploma">Accounting Technician Diploma (ATD)<br>
                                <input type="checkbox" name="course" value="Certificied Public Accountant">Certificied Public Accountant(CPA)<br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="edufair-btn-larg notice-read-more"> Register Now </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






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
