<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Designbees | Portfolio Two Column</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/media/favicon.png">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/css/vendor/font-awesome.css">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/slick-theme.css">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>assets/css/vendor/sal.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/green-audio-player.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/odometer-theme-default.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">

</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
      <a href="https://wa.me/9943945548" id="backto-top" class="back-to-top">
        <img src="<?php echo base_url(); ?>assets/media/whatsapp.png" alt="">
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <!-- <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div> -->

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="header axil-header header-style-1">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-logo">
                            <a href="<?php echo base_url(); ?>"><img class="light-version-logo" src="<?php echo base_url(); ?>assets/media/logo.png" alt="logo"></a>
                            <a href="<?php echo base_url(); ?>"><img class="sticky-logo" src="<?php echo base_url(); ?>assets/media/logo.png" alt="logo"></a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="<?php echo base_url(); ?>">
                                                <img class="light-mode" src="<?php echo base_url(); ?>assets/media/logo.png" alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times custom-btn-menu"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>">Digital Agency</a>
                
                                    </li>
                                    <li >
                                        <a href="<?php echo base_url(); ?>service">Services</a>
                                    
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>portfolio">Portfolio</a>
                                   
                                    </li>
                                
                                    <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>


                                    <li class="downloadcolor"><a href="<?php echo base_url(); ?>assets/media/pdf/Ourworks.pdf" download >Download Ourservice</a></li>

                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <li class="sidemenu-btn d-lg-block d-none">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <!-- <li class="my_switcher d-block d-lg-none">
                                    <ul>
                                        <li title="Light Mode">
                                            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                                <i class="fal fa-lightbulb-on"></i>
                                            </a>
                                        </li>
                                        <li title="Dark Mode">
                                            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                                <i class="fas fa-moon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h1 class="title h2">Our projects</h1>
                    <p>A quick view of industry specific problems solved with design by the awesome team at Designbees.</p>
                </div>
                <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img class="paralax-image" src="<?php echo base_url(); ?>assets/media/banner/banner-thumb-1.png" alt="Illustration">
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="<?php echo base_url(); ?>assets/media/others/bubble-9.png" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="<?php echo base_url(); ?>assets/media/others/bubble-20.png" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="<?php echo base_url(); ?>assets/media/others/line-4.png" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=       Projects  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding-2 bg-color-light">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">Our Project</span>
                    <h2 class="title">Some of our <br> finest work.</h2>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                        <?php
                
if(count($category)==0){
    
}else{
foreach($category as $categorydata):

?>

<button data-filter=".<?php echo strtolower($categorydata['category_name']); ?>"><span class="filter-text"><?php  echo $categorydata['category_name']  ?></span></button>

<?php endforeach;
}

    ?>
                    </div>


                    
                    <div class="row row-35 isotope-list">
                    <?php

if(count($post)==0){

}else{
foreach($post as $postdata):

?>
<div class="col-md-6 project <?php echo strtolower($postdata["category"]); ?>">
        
        <div class="project-grid">
            <div class="thumbnail">
                <a  href="<?php echo base_url(); ?>ourworks/<?php echo $postdata["id"]; ?>">
                    <img src="<?php echo base_url(); ?>assets/our_work_image/<?php echo $postdata["tump"]; ?>" alt="project">
                </a>
            </div>
            <div class="content">
                <h4 class="title"><a href="<?php echo base_url(); ?>ourworks/<?php echo $postdata["id"]; ?>"> <?php echo $postdata["name"]; ?></a></h4>
                <span class="subtitle"> <?php echo $postdata['category']; ?></span>
            </div>
        </div>
    </div>

<?php endforeach;
}

?>
                    </div>
                </div>
            </div>
            <ul class="shape-group-7 list-unstyled">
                <li class="shape shape-1"><img src="<?php echo base_url(); ?>assets/media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="<?php echo base_url(); ?>assets/media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="<?php echo base_url(); ?>assets/media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
                        <a href="<?php echo base_url(); ?>contact" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="<?php echo base_url(); ?>assets/media/others/chat-group.png" alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                                <img class="paralax-image" src="<?php echo base_url(); ?>assets/media/others/laptop-poses.png" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                                <img class="paralax-image" src="<?php echo base_url(); ?>assets/media/others/bill-pay.png" alt="Bill">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="<?php echo base_url(); ?>assets/media/others/bubble-12.png" alt="Comments"></li>
                <li class="shape shape-2"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-3"><img src="<?php echo base_url(); ?>assets/media/others/bubble-13.png" alt="Comments"></li>
                <li class="shape shape-4"><img src="<?php echo base_url(); ?>assets/media/others/bubble-14.png" alt="Comments"></li>
                <li class="shape shape-5"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Comments"></li>
                <li class="shape shape-6"><img src="<?php echo base_url(); ?>assets/media/others/bubble-15.png" alt="Comments"></li>
                <li class="shape shape-7"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Comments"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <?php require('components/footer.php'); ?>





        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <?php require('components/sidebar.php'); ?>

    </div>

    <?php require('components/js.php'); ?>

</body>
</html>