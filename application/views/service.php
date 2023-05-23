<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Abstrak | Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/media/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/sal.css">
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
      <a href="https://wa.me/9345049165" id="backto-top" class="back-to-top">
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
                            <a href="index-1.html"><img class="light-version-logo" src="<?php echo base_url(); ?>assets/media/logo.svg" alt="logo"></a>
                            <a href="index-1.html"><img class="dark-version-logo" src="<?php echo base_url(); ?>assets/media/logo-3.svg" alt="logo"></a>
                            <a href="index-1.html"><img class="sticky-logo" src="<?php echo base_url(); ?>assets/media/logo-2.svg" alt="logo"></a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="index-1.html">
                                                <img class="light-mode" src="<?php echo base_url(); ?>assets/media/logo-2.svg" alt="Site Logo">
                                                <img class="dark-mode" src="<?php echo base_url(); ?>assets/media/logo-3.svg" alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
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
                    <h1 class="title h2">Best solutions for your business</h1>
                    <p>Give your business a unique logo to stand out from crowd. We’ll create logo specifically for your company.</p>
                </div>
                <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img class="paralax-image" src="<?php echo base_url(); ?>assets/media/banner/banner-thumb-4.png" alt="Illustration">
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="<?php echo base_url(); ?>assets/media/others/bubble-9.png" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="<?php echo base_url(); ?>assets/media/others/bubble-21.png" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="<?php echo base_url(); ?>assets/media/others/line-4.png" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        <div class="service-scroll-navigation-area">
            <!-- Service Nav -->
            <nav id="onepagenav" class="service-scroll-nav navbar onepagefixed">
                <div class="container">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#section1">Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">Development</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">Online Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section4">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section5">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section6">Content Strategy</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Design Service -->
            <div class="section section-padding" id="section1">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Design</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-29.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Logo &amp; Branding</h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-27.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Website Design</h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-28.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Mobile app design</h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-4.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Graphic/print design</h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-30.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Video production</h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Development Service -->
            <div class="section section-padding bg-color-light" id="section2">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Development</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-31.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Content Managment</h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-32.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Mobile app development</h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-33.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">eCommerce</h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Online Marketing Service -->
            <div class="section section-padding" id="section3">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Online Marketing</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-34.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> SEO</h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-35.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Pay-per click</h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-36.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Email marketing</h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-37.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Display marketing</h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-38.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Social Media marketing</h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Business Service -->
            <div class="section section-padding bg-color-light" id="section4">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Business</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-39.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Digital strategy</h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-40.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Business consulting</h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-41.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Content writing</h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-42.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Reporting</h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Technology Service -->
            <div class="section section-padding" id="section5">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Technology</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-43.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Hosting</h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-44.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Big data analysis</h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content strategy Service -->
            <div class="section section-padding bg-color-light" id="section6">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Content strategy</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-45.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Web Audit Practices</h5>
                                    <p>industry-icon-1 Web Audit Practices A reputable marketing strategy company runs a complete digital,</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-46.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> Marketing Flexibility</h5>
                                    <p>Do you cater to other businesses, investors, decision-makers or consumers? A trustworthy digital</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-47.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title">Advertising Strategy</h5>
                                    <p>Promoting your products and services online requires cutting-edge organic and paid search strategies to rise</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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