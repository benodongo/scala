<?php
/**
 * Created by PhpStorm.
 * User: benson
 * Date: 7/3/18
 * Time: 12:17 PM
 */
?>
<!-- Top menu -->
<div class="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-menu-left">
                    <p>Need help?</p>
                    <b><i class="fa fa-phone"></i> (+254) 717 632 307</b>
                    <b><i class="fa fa-envelope"></i> info@scalainstitute.co.ke</b>
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
<div class="edufair-header">
    <nav class="navbar navbar-default edufair-nav">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-right fa-2"></i>
                    </button>

                    <a class="navbar-brand edufair-brand edufair-light" href="index.php"><img src="images/scala_light.png" alt="Logo"></a>
                    <a class="navbar-brand edufair-brand edufair-dark" href="index.php"><img src="images/scala.png" alt="Logo"></a>

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
                                <li><a href="apply.php">Registration</a></li>
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
</div>
<!-- End Main Menu -->
