<!--=== BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>Memories - Birthday Celebration</title>
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
    <?php if ($this->session->has_userdata('username')) { ?>
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
        <div class="row margin-vert-40">
            <!-- Begin Sidebar Menu -->
            <div class="col-md-3">
                <ul class="list-group sidebar-nav" id="sidebar-nav">
                    <!-- Typography -->
                    <li class="list-group-item list-toggle">
                        <a href="<?php echo base_url(); ?>page_nav/goto_bday_halls">Halls</a>
                    </li>
                    <!-- End Typography -->
                    <!-- Components -->
                    <li class="list-group-item list-toggle">
                        <a href="<?php echo base_url(); ?>page_nav/goto_bday_hall_deco">Hall Decorations</a>
                    </li>
                    <!-- End Components -->
                    <!-- Icons -->
                    <li class="list-group-item list-toggle">
                        <a href="<?php echo base_url(); ?>page_nav/goto_bday_catering">Catering</a>
                    </li>
                    <!-- End Icons -->
                    <!-- Buttons -->
                    <li class="list-group-item list-toggle">
                        <a href="<?php echo base_url(); ?>page_nav/goto_bday_cakes">Cakes</a>
                    </li>
                    <!-- End Buttons -->
                    <!-- Carousels -->
                    <li class="list-group-item list-toggle">
                        <a href="<?php echo base_url(); ?>page_nav/goto_bday_photo">Photography & Videography</a>
                    </li>
                    <!-- End Accordion and Tabs -->
                    <!-- Animate On Scroll -->
                    <li class="list-group-item list-toggle">
                        <a href="<?php echo base_url(); ?>page_nav/goto_bday_sounds">Sounds</a>
                    </li>
                    <!-- End Animate On Scroll -->
                    <!-- Grid System -->
                    <li class="list-group-item list-toggle">
                        <a href="<?php echo base_url(); ?>page_nav/goto_bday_printing">Prinings</a>
                    </li>
                    <!-- End Grid System -->
                </ul>
            </div>
            <!-- End Sidebar Menu -->
            <div class="col-md-9">
                <h1>Photography & Videography</h1><br>
                <div class="row">
                    <div class="blog-post padding-bottom-20">
                        <!-- Blog Item Header -->
                        <div class="blog-post-date pull-left">
                            <span class="day">14</span>
                            <span class="month">Dec</span>
                            <br>
                            <span class="year">2014</span>
                        </div>
                        <div class="blog-item-header">
                            <!-- Title -->
                            <h2>
                                <a href="#">
                                    Seller 1</a>
                            </h2>
                            <!-- End Title -->
                            <!-- Blog Item Details -->
                            <div class="blog-post-details">
                                <!-- Author Name -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-user color-gray-light"></i>
                                    <a href="#">Admin</a>
                                </div>
                                <!-- End Author Name -->
                                <!-- Date -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-calendar color-gray-light"></i>
                                    <a href="#">22nd Apr, 2014</a>
                                </div>
                                <!-- End Date -->
                                <!-- Tags -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                    <i class="fa fa-tag color-gray-light"></i>
                                    <a href="#">HTML</a>,
                                    <a href="#">Ruby</a>,
                                    <a href="#">Javascript</a>
                                </div>
                                <!-- End Tags -->
                                <!-- # of Comments -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                    <a href="">
                                        <i class="fa fa-comments color-gray-light"></i>
                                        0 Comments
                                    </a>
                                </div>
                                <!-- End # of Comments -->
                            </div>
                            <!-- End Blog Item Details -->
                        </div>
                        <!-- Blog Item Body -->
                        <div class="blog">
                            <div class="clearfix"></div>
                            <div class="blog-post-body row margin-top-15">
                                <div class="col-md-5">
                                    <img class="margin-bottom-20" src="<?php echo base_url(); ?>/img/blog/image1.jpg" alt="thumb1">
                                </div>
                                <div class="col-md-7">
                                    <p>Seller 1 Description</p>
                                    <!-- Read More -->
                                    <a href="#" class="btn btn-primary">
                                        Read More
                                        <i class="icon-chevron-right readmore-icon"></i>
                                    </a>
                                    <!-- End Read More -->
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Item Body -->
                    </div>
                    <!-- End Blog Item -->
                    <!-- Blog Post -->
                    <div class="blog-post padding-bottom-20">
                        <!-- Blog Item Header -->
                        <div class="blog-post-date pull-left">
                            <span class="day">14</span>
                            <span class="month">Dec</span>
                            <br>
                            <span class="year">2014</span>
                        </div>
                        <div class="blog-item-header">
                            <!-- Title -->
                            <h2>
                                <a href="#">
                                    Seller 2</a>
                            </h2>
                            <!-- End Title -->
                            <!-- Blog Item Details -->
                            <div class="blog-post-details">
                                <!-- Author Name -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-user color-gray-light"></i>
                                    <a href="#">Admin</a>
                                </div>
                                <!-- End Author Name -->
                                <!-- Date -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-calendar color-gray-light"></i>
                                    <a href="#">22nd Apr, 2014</a>
                                </div>
                                <!-- End Date -->
                                <!-- Tags -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                    <i class="fa fa-tag color-gray-light"></i>
                                    <a href="#">jQuery</a>,
                                    <a href="#">HTML</a>,
                                    <a href="#">Grunt</a>
                                </div>
                                <!-- End Tags -->
                                <!-- # of Comments -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                    <a href="">
                                        <i class="fa fa-comments color-gray-light"></i>
                                        1 Comments
                                    </a>
                                </div>
                                <!-- End # of Comments -->
                            </div>
                            <!-- End Blog Item Details -->
                        </div>
                        <!-- End Blog Item Header -->
                        <!-- Blog Item Body -->
                        <div class="blog">
                            <div class="clearfix"></div>
                            <div class="blog-post-body row margin-top-15">
                                <div class="col-md-5">
                                    <img class="margin-bottom-20" src="<?php echo base_url(); ?>/img/blog/image2.jpg" alt="thumb2">
                                </div>
                                <div class="col-md-7">
                                    <p>Seller 2 Description</p>
                                    <!-- Read More -->
                                    <a href="#" class="btn btn-primary">
                                        Read More
                                        <i class="icon-chevron-right readmore-icon"></i>
                                    </a>
                                    <!-- End Read More -->
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Item Body -->
                    </div>
                    <!-- End Blog Item -->
                    <!-- Blog Post -->
                    <div class="blog-post padding-bottom-20">
                        <!-- Blog Item Header -->
                        <div class="blog-post-date pull-left">
                            <span class="day">14</span>
                            <span class="month">Dec</span>
                            <br>
                            <span class="year">2014</span>
                        </div>
                        <div class="blog-item-header">
                            <!-- Title -->
                            <h2>
                                <a href="#">
                                    Seller 3</a>
                            </h2>
                            <!-- End Title -->
                            <!-- Blog Item Details -->
                            <div class="blog-post-details">
                                <!-- Author Name -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-user color-gray-light"></i>
                                    <a href="#">Admin</a>
                                </div>
                                <!-- End Author Name -->
                                <!-- Date -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-calendar color-gray-light"></i>
                                    <a href="#">22nd Apr, 2014</a>
                                </div>
                                <!-- End Date -->
                                <!-- Tags -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                    <i class="fa fa-tag color-gray-light"></i>
                                    <a href="#">jQuery</a>,
                                    <a href="#">HTML</a>,
                                    <a href="#">HTML5</a>
                                </div>
                                <!-- End Tags -->
                                <!-- # of Comments -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                    <a href="">
                                        <i class="fa fa-comments color-gray-light"></i>
                                        8 Comments
                                    </a>
                                </div>
                                <!-- End # of Comments -->
                            </div>
                            <!-- End Blog Item Details -->
                        </div>
                        <!-- End Blog Item Header -->
                        <!-- Blog Item Body -->
                        <div class="blog">
                            <div class="clearfix"></div>
                            <div class="blog-post-body row margin-top-15">
                                <div class="col-md-5">
                                    <img class="margin-bottom-20" src="<?php echo base_url(); ?>/img/blog/image3.jpg" alt="thumb3">
                                </div>
                                <div class="col-md-7">
                                    <p>Seller 3 Description</p>
                                    <!-- Read More -->
                                    <a href="#" class="btn btn-primary">
                                        Read More
                                        <i class="icon-chevron-right readmore-icon"></i>
                                    </a>
                                    <!-- End Read More -->
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Item Body -->
                    </div>
                    <!-- End Blog Item -->
                    <!-- Blog Post -->
                    <div class="blog-post padding-bottom-20">
                        <!-- Blog Item Header -->
                        <div class="blog-post-date pull-left">
                            <span class="day">14</span>
                            <span class="month">Dec</span>
                            <br>
                            <span class="year">2014</span>
                        </div>
                        <div class="blog-item-header">
                            <!-- Title -->
                            <h2>
                                <a href="#">
                                    Seller 4</a>
                            </h2>
                            <!-- End Title -->
                            <!-- Blog Item Details -->
                            <div class="blog-post-details">
                                <!-- Author Name -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-user color-gray-light"></i>
                                    <a href="#">Admin</a>
                                </div>
                                <!-- End Author Name -->
                                <!-- Date -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-calendar color-gray-light"></i>
                                    <a href="#">22nd Apr, 2014</a>
                                </div>
                                <!-- End Date -->
                                <!-- Tags -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                    <i class="fa fa-tag color-gray-light"></i>
                                    <a href="#">CoffeeScript</a>,
                                    <a href="#">HTML</a>,
                                    <a href="#">Ruby</a>
                                </div>
                                <!-- End Tags -->
                                <!-- # of Comments -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                    <a href="">
                                        <i class="fa fa-comments color-gray-light"></i>
                                        1 Comments
                                    </a>
                                </div>
                                <!-- End # of Comments -->
                            </div>
                            <!-- End Blog Item Details -->
                        </div>
                        <!-- End Blog Item Header -->
                        <!-- Blog Item Body -->
                        <div class="blog">
                            <div class="clearfix"></div>
                            <div class="blog-post-body row margin-top-15">
                                <div class="col-md-5">
                                    <img class="margin-bottom-20" src="<?php echo base_url(); ?>/img/blog/image4.jpg" alt="thumb4">
                                </div>
                                <div class="col-md-7">
                                    <p>Seller 4 Description</p>
                                    <!-- Read More -->
                                    <a href="#" class="btn btn-primary">
                                        Read More
                                        <i class="icon-chevron-right readmore-icon"></i>
                                    </a>
                                    <!-- End Read More -->
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Item Body -->
                    </div>
                    <!-- End Blog Item -->
                    <!-- Pagination -->
                    <ul class="pagination">
                        <li>
                            <a href="#">&laquo;</a>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li class="disabled">
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#">&raquo;</a>
                        </li>
                    </ul>
                    <!-- End Pagination -->
                </div>
                <!-- End Main Column -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- === END CONTENT === -->
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
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/scripts.js"></script>
    <!-- Isotope - Portfolio Sorting -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.isotope.js" type="text/javascript"></script>
    <!-- Mobile Menu - Slicknav -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.slicknav.js" type="text/javascript"></script>
    <!-- Animate on Scroll-->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.visible.js" charset="utf-8"></script>
    <!-- Stellar Parallax -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.stellar.js" charset="utf-8"></script>
    <!-- Sticky Div -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.sticky.js" charset="utf-8"></script>
    <!-- Slimbox2-->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/slimbox2.js" charset="utf-8"></script>
    <!-- Modernizr -->
    <script src="<?php echo base_url(); ?>/js/modernizr.custom.js" type="text/javascript"></script>
    <!-- End JS -->
</body>
</html>
<!-- === END FOOTER ===-->