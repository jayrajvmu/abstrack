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
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <div class="my_switcher d-none d-lg-block">
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
    </div>

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
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Digital Agency</a>
                                        <ul class="axil-submenu">
                                            <li><a href="index-1.html">Digital Agency</a></li>
                                            <li><a href="index-2.html">Creative Agency</a></li>
                                            <li><a href="index-3.html">Personal Portfolio</a></li>
                                            <li><a href="index-4.html">Home Startup</a></li>
                                            <li><a href="index-5.html">Corporate Agency</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Services</a>
                                        <ul class="axil-submenu">
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-2.html">Service Two</a></li>
                                            <li><a href="service-design.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Portfolio</a>
                                        <ul class="axil-submenu">
                                            <li><a href="portfolio.html">Two Column</a></li>
                                            <li><a href="portfolio-2.html">Three Column</a></li>
                                            <li><a href="portfolio-3.html">Four Column</a></li>
                                            <li><a href="portfolio-4.html">Three Column Width</a></li>
                                            <li><a href="portfolio-5.html">Four Column Width</a></li>
                                            <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Pages</a>
                                        <ul class="axil-submenu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="our-office.html">Our Office</a></li>
                                            <li><a href="case-study.html">Case Study</a></li>
                                            <li><a href="single-case-study.html">Case Study Details</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="single-team.html">Team Details</a></li>
                                            <li><a href="our-clients.html">Our Clients</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="pricing-table.html">Pricing Table</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Blog</a>
                                        <ul class="axil-submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single-blog.html">Standard Post</a></li>
                                            <li><a href="single-blog-gallery.html">Gallery Post</a></li>
                                            <li><a href="single-blog-video.html">Video Post</a></li>
                                            <li><a href="single-blog-audio.html">Audio Post</a></li>
                                            <li><a href="single-blog-quote.html">Quote Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
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
                                <li class="my_switcher d-block d-lg-none">
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
                                </li>
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
                                    <h5 class="title"> <a href="service-design.html">Logo &amp; Branding</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="service-design.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-27.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-design.html">Website Design</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="service-design.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-28.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-design.html">Mobile app design</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="service-design.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-4.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-design.html">Graphic/print design</a></h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                    <a href="service-design.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-30.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-design.html">Video production</a></h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                    <a href="service-design.html" class="more-btn">Find out more</a>
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
                                    <h5 class="title"> <a href="service-development.html">Content Managment</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="service-development.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-32.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-development.html">Mobile app development</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="service-development.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-33.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-development.html">eCommerce</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="service-development.html" class="more-btn">Find out more</a>
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
                                    <h5 class="title"> <a href="service-marketing.html">SEO</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="service-marketing.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-35.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.html">Pay-per click</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="service-marketing.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-36.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.html">Email marketing</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="service-marketing.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-37.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.html">Display marketing</a></h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                    <a href="service-marketing.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-38.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.html">Social Media marketing</a></h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                    <a href="service-marketing.html" class="more-btn">Find out more</a>
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
                                    <h5 class="title"> <a href="service-business.html">Digital strategy</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="service-business.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-40.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.html">Business consulting</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="service-business.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-41.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.html">Content writing</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="service-business.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-42.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.html">Reporting</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="service-business.html" class="more-btn">Find out more</a>
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
                                    <h5 class="title"> <a href="service-technology.html">Hosting</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="service-technology.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-44.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-technology.html">Big data analysis</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="service-technology.html" class="more-btn">Find out more</a>
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
                                    <h5 class="title"> <a href="service-content-strategy.html">Web Audit Practices</a></h5>
                                    <p>industry-icon-1 Web Audit Practices A reputable marketing strategy company runs a complete digital,</p>
                                    <a href="service-content-strategy.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-46.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-content-strategy.html">Marketing Flexibility</a></h5>
                                    <p>Do you cater to other businesses, investors, decision-makers or consumers? A trustworthy digital</p>
                                    <a href="service-content-strategy.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/media/icon/icon-47.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-content-strategy.html">Advertising Strategy</a></h5>
                                    <p>Promoting your products and services online requires cutting-edge organic and paid search strategies to rise</p>
                                    <a href="service-content-strategy.html" class="more-btn">Find out more</a>
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
                        <a href="contact.html" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
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
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.pinterest.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.linkedin.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://vimeo.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="https://dribbble.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="https://www.behance.net/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                            <div class="footer-widget border-end">
                                <div class="footer-newsletter">
                                    <h2 class="title">Get in touch!</h2>
                                    <p>Fusce varius, dolor tempor interdum tristique, dui urna bib
                                        endum magna, ut ullamcorper purus</p>
                                    <form>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Email address">
                                            <button class="subscribe-btn" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Services</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="service-design.html">Logo &amp; Branding</a></li>
                                                <li><a href="service-development.html">Website Development</a></li>
                                                <li><a href="service-development.html">Mobile App Development</a></li>
                                                <li><a href="service-marketing.html">Search Engine Optimization</a></li>
                                                <li><a href="service-marketing.html">Pay-Per-Click</a></li>
                                                <li><a href="service-marketing.html">Social Media Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Resourses</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="case-study.html">Case Studies</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Support</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="terms-of-use.html">Terms of Use</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2021. All rights reserved by <a href="https://axilthemes.com/">Axilthemes</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-use.html">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="#" class="side-nav-search-form">
                    <div class="form-group">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            <li><a href="index-1.html">Digital Agency</a></li>
                            <li><a href="index-2.html">Creative Agency</a></li>
                            <li><a href="index-3.html">Personal Portfolio</a></li>
                            <li><a href="index-4.html">Home Startup</a></li>
                            <li><a href="index-5.html">Corporate Agency</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="contact-info-wrap">
                            <div class="contact-inner">
                                <address class="address">
                                    <span class="title">Contact Information</span>
                                    <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                </address>
                                <address class="address">
                                    <span class="title">We're Available 24/7. Call Now.</span>
                                    <a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                        456-2790</a>
                                    <a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                        255-53333</a>
                                </address>
                            </div>
                            <div class="contact-inner">
                                <h5 class="title">Find us here</h5>
                                <div class="contact-social-share">
                                    <ul class="social-share list-unstyled">
                                        <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('components/js.php'); ?>

</body>

</html>