<!--=== BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title>Memories</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
</head>
<body>
<div id="social" class="visible-lg">
    <?php if ($this->session->has_userdata('buyer_username')) { ?>
        <ul class="social-icons pull-right hidden-xs">

            <li>You are logged in as <?php echo $this->session->userdata('buyer_username') ?></li>

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
                    <img src="<?php echo base_url(); ?>img/logo.png" alt="Logo"/>
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
            <div class="col-md-12 margin-top-30">
                <!-- Tab v3 -->
                <div class="row tabs">
                    <div class="col-sm-2">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active">
                                <a href="#new_orders" data-toggle="tab">
                                    <i class="fa fa-home"></i> New Orders</a>
                            </li>
                            <li>
                                <a href="#sample-3b" data-toggle="tab">
                                    <i class="fa fa-cloud"></i> Order History</a>
                            </li>
                            <li>
                                <a href="#sample-3c" data-toggle="tab">
                                    <i class="fa fa-comments"></i> Packages</a>
                            </li>
                            <li>
                                <a href="#sample-3d" data-toggle="tab">
                                    <i class="fa fa-gear"></i> Sample Heading 4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-10">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="new_orders">
                                <table class="table table-striped table-hover" id="keywords" cellspacing="20"
                                       cellpadding="10">
                                    <thead>
                                    <tr>
                                        <th><span>Order ID</span></th>
                                        <th><span>Buyer ID</span></th>
                                        <th><span>Package ID</span></th>
                                        <th><span>Package Name</span></th>
                                        <th><span>Seller id</span></th>
                                        <th><span>Order date</span></th>
                                        <th><span>Accepted</span></th>
                                        <th><span>Viewed</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php
                                        foreach ($neworder as $bla){
                                        ?>
                                        <td class="lalign"><?php echo $bla->order_id; ?></td>
                                        <td><?php echo $bla->buyer_id; ?></td>
                                        <td><?php echo $bla->package_id; ?></td>
                                        <td><?php echo $bla->package_name; ?></td>
                                        <td><?php echo $bla->seller_id; ?></td>
                                        <td><?php echo $bla->order_date; ?></td>
                                        <td><?php echo $bla->accepted; ?></td>
                                        <td><?php echo $bla->viewed; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade in" id="sample-3b">
                                <table class="table table-striped" id="keywords" cellspacing="20" cellpadding="10">
                                    <thead>
                                    <tr>
                                        <th><span>Order ID</span></th>
                                        <th><span>Buyer ID</span></th>
                                        <th><span>Package ID</span></th>
                                        <th><span>Package Name</span></th>
                                        <th><span>Seller id</span></th>
                                        <th><span>Order date</span></th>
                                        <th><span>Accepted</span></th>
                                        <th><span>Viewed</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php
                                        foreach ($allorders as $bla){
                                        ?>
                                        <td class="lalign"><?php echo $bla->order_id; ?></td>
                                        <td><?php echo $bla->buyer_id; ?></td>
                                        <td><?php echo $bla->package_id; ?></td>
                                        <td><?php echo $bla->package_name; ?></td>
                                        <td><?php echo $bla->seller_id; ?></td>
                                        <td><?php echo $bla->order_date; ?></td>
                                        <td><?php echo $bla->accepted; ?></td>
                                        <td><?php echo $bla->viewed; ?></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade in" id="sample-3c">
                                <div class="row">
                                    <table class="table table-striped" id="keywords" cellspacing="20" cellpadding="10">
                                        <thead>
                                        <tr>
                                            <th><span>Package ID</span></th>
                                            <th><span>Package Name</span></th>
                                            <th><span>Seller id</span></th>
                                            <th><span>Type ID</span></th>
                                            <th><span>Package Description</span></th>
                                            <th><span>Package items</span></th>
                                            <th><span>Package Price</span></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <?php
                                            foreach ($allpackaged as $bla){
                                            ?>
                                            <td><?php echo $bla->package_id; ?></td>
                                            <td><?php echo $bla->package_name; ?></td>
                                            <td><?php echo $bla->type_id; ?></td>
                                            <td><?php echo $bla->package_description; ?></td>
                                            <td><?php echo $bla->package_items; ?></td>
                                            <td><?php echo $bla->package_price; ?></td>
                                            <td>
                                                <button type="button" formaction="<?php echo base_url(); ?>page_nav/edit_package" class="btn btn-primary btn-xs">
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Tab v3 -->            </div>

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
        <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/js/bootstrap.min.js"
                type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.isotope.js"
                type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.slicknav.js"
                type="text/javascript"></script>
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