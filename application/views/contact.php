<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>Memories - Contact Us</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
</head>
<body>
<div id="social" class="visible-lg">
    <?php if ($this->session->has_userdata('buyer_username')) { ?>
        <ul class="social-icons pull-right hidden-xs">

            <li>You are logged in as <?php echo $this->session->userdata('username') ?></li>
            <li><?php echo $this->session->userdata('user') ?></li>
            <li>
                <button type="button" class="btn btn-primary btn-sm"><a
                        href="<?php echo base_url(); ?>sign_up/logout">Logout</a></button>
            </li>
            <li>
                <button type="button" class="btn btn-primary btn-sm">
                    <a href="<?php echo base_url(); ?>page_nav/goto_seller_profile">Profile</a></button>
            </li>
        </ul>

    <?php } else { ?>
        <ul class="social-icons pull-right hidden-xs">
            <li>
                <button type="button" class="btn btn-primary btn-sm">
                    <a href="<?php echo base_url(); ?>page_nav/goto_login">Login</a></button>
            </li>
            <li>
                <button type="button" class="btn btn-primary btn-sm">
                    <a href="<?php echo base_url(); ?>page_nav/goto_sign_up">Sign-Up</a></button>
            </li>
        </ul>
    <?php } ?>
</div>
<!-- Header -->
<div id="header" style="background-position: 50% 0%; <br />
<b>Notice</b>:  Undefined variable: full_page in <b>C:\xampp\htdocs\bootstrap\html\php\header.php</b> on line <b>46</b><br />
" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="logo">
                <a href="index.html" title="">
                    <img src="<?php echo base_url(); ?>img/logo.png" alt="Logo" />
                </a>
            </div>
            <!-- End Logo -->
        </div>
        <!-- Top Menu -->
        <div id="hornav" class="row text-light">
            <div class="col-md-12">
                <div class="text-center visible-lg">
                    <ul id="hornavmenu" class="nav navbar-nav">
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav/goto_home" class="fa-home active">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav/goto_services" class="fa-gears">Services</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav/goto_about_us" class="fa-copy">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>page_nav/goto_contact" class="fa-comment ">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- End Top Menu -->
    </div>
</div>
<!-- End Header -->
<!-- === END HEADER === -->
<!-- === BEGIN CONTENT === -->
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <!-- Main Column -->
            <div class="col-md-9">
                <!-- Main Content -->
                <div class="headline">
                    <h2 class="margin-bottom-20">Contact Form</h2>
                </div>
                <p>If you have any kind of question please do not hesitate to contact us.</p>
                <br>
                <!-- Contact Form -->
                <form>
                    <label>Name</label>
                    <div class="row margin-bottom-20">
                        <div class="col-md-6 col-md-offset-0">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <label>Email
                        <span class="color-red">*</span>
                    </label>
                    <div class="row margin-bottom-20">
                        <div class="col-md-6 col-md-offset-0">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <label>Message</label>
                    <div class="row margin-bottom-20">
                        <div class="col-md-8 col-md-offset-0">
                            <textarea rows="8" class="form-control"></textarea>
                        </div>
                    </div>
                    <p>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </p>
                </form>
                <!-- End Contact Form -->
                <!-- End Main Content -->
            </div>
            <!-- End Main Column -->
            <!-- Side Column -->
            <div class="col-md-3">
                <!-- Recent Posts -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact Info</h3>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, no cetero voluptatum est, audire sensibus maiestatis vis et. Vitae audire prodesset an his. Nulla ubique omnesque in sit.</p>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa-phone color-primary"></i>+353-44-55-66</li>
                            <li>
                                <i class="fa-envelope color-primary"></i>info@example.com</li>
                            <li>
                                <i class="fa-home color-primary"></i>http://www.example.com</li>
                        </ul>
                        <ul class="list-unstyled">
                            <li>
                                <strong class="color-primary">Monday-Friday:</strong>9am to 6pm</li>
                            <li>
                                <strong class="color-primary">Saturday:</strong>10am to 3pm</li>
                            <li>
                                <strong class="color-primary">Sunday:</strong>Closed</li>
                        </ul>
                    </div>
                </div>
                <!-- End recent Posts -->
                <!-- About -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">About</h3>
                    </div>
                    <div class="panel-body">
                        Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
                    </div>
                </div>
                <!-- End About -->
            </div>
            <!-- End Side Column -->
        </div>
    </div>
</div>
<!-- === END CONTENT === -->
<!-- === BEGIN FOOTER === -->

<!-- Footer -->
<div id="footer" class="background-dark text-light">
    <div class="container no-padding">
        <div class="row">
            <!-- Footer Menu -->
            <div id="footermenu" class="col-md-8">
                <ul class="list-unstyled list-inline">
                    <li>
                        <a href="#" target="_blank">Sample Link</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Sample Link</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Sample Link</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Sample Link</a>
                    </li>
                </ul>
            </div>
            <!-- End Footer Menu -->
            <!-- Copyright -->
            <div id="copyright" class="col-md-4">
                <p class="pull-right">(c) 2014 Your Copyright Info</p>
            </div>
            <!-- End Copyright -->
        </div>
    </div>
    <!-- End Footer -->
    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script>
    <!-- Isotope - Portfolio Sorting -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.isotope.js" type="text/javascript"></script>
    <!-- Mobile Menu - Slicknav -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.slicknav.js" type="text/javascript"></script>
    <!-- Animate on Scroll-->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.visible.js" charset="utf-8"></script>
    <!-- Stellar Parallax -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.stellar.js" charset="utf-8"></script>
    <!-- Sticky Div -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.sticky.js" charset="utf-8"></script>
    <!-- Slimbox2-->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/slimbox2.js" charset="utf-8"></script>
    <!-- Modernizr -->
    <script src="<?php echo base_url(); ?>js/modernizr.custom.js" type="text/javascript"></script>
    <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->