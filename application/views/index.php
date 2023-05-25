<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Designbees | Creative Agency</title>
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/marq.css">

</head>

<body class="sticky-header">
<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
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
        <?php require('components/homenav.php'); ?>

        <!--=====================================-->
        <!--=        Banner Area Start         =-->
        <!--=====================================-->

        <?php 
   if($this->session->flashdata('substrue')){
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('substrue'); ?>
     </div>
<?php    
} else if($this->session->flashdata('subserr')){
?>
 <div class = "alert alert-danger">
   <?php echo $this->session->flashdata('subserr'); ?>
 </div>
<?php } else if($this->session->flashdata('subserr2')){
?>
 <div class = "alert alert-danger">
   <?php echo $this->session->flashdata('subserr2'); ?>
 </div><?php }?>

        <section class="banner banner-style-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <h1 class="title">Technology &amp; design studio</h1>
                            <a href="<?php echo base_url(); ?>portfolio" class="axil-btn btn-fill-white btn-large">View Showcase</a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-18">
                <li class="shape shape-1" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100"><img src="<?php echo base_url(); ?>assets/media/banner/banner-shape-1.png" alt="Shape"></li>
                <li class="shape shape-2" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100"><img src="<?php echo base_url(); ?>assets/media/banner/banner-shape-2.png" alt="Shape"></li>
                <li class="shape shape-3" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Shape"></li>
                <li class="shape shape-4" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-15.png" alt="Shape"></li>
                <li class="shape shape-5" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-14.png" alt="Shape"></li>
                <li class="shape shape-6" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-16.png" alt="Shape"></li>
                <li class="shape shape-7" data-sal="slide-down" data-sal-duration="500" data-sal-delay="600"><img src="<?php echo base_url(); ?>assets/media/others/bubble-26.png" alt="Shape"></li>
            </ul>
        </section>
        <!--=====================================-->

                <!--=        Brand Area Start       	=-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">Top Clients</span>
                    <h2 class="title">We’ve built solutions for...</h2>
                    <p>Design anything from simple icons to fully featured websites and applications.</p>
                </div>

</div>





      <div class="marrqq">
  
    
  <div class="wrapper">

  <?php  foreach($client_logo as $IClientLogo):?>
    <div class="box"><img src="<?php echo base_url(); ?>assets/client_logo/<?php echo $IClientLogo['client_logo'] ?>" alt="<?php echo $IClientLogo['client_name'] ?>" alt=""></div>
    <?php endforeach;?>

  </div>
  
</div>



     


        </section>
        
        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading heading-left mb--20 mb_md--70">
                    <span class="subtitle">What We Can Do For You</span>
                    <h2 class="title">Services we can <br> help you with</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 mt--200 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/media/icon/icon-1.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a  href="<?php echo base_url(); ?>service" >Design</a></h5>
                                <p>We help you translate a simple idea into an exotic Digital design transformation vision</p>
                                <a href="<?php echo base_url(); ?>service" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt--100 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2 active">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/media/icon/icon-2.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a  href="<?php echo base_url(); ?>service" >Technology</a></h5>
                                <p>Comprehensive technology services that integrate digital craftsmanship and business goals.</p>
                                <a href="<?php echo base_url(); ?>service" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="<?php echo base_url(); ?>assets/media/icon/icon-6.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a  href="<?php echo base_url(); ?>service" >Marketing</a></h5>
                                <p>End-to-end performance marketing services and branding strategies of the digital world.</p>
                                <a href="<?php echo base_url(); ?>service" class="more-btn">Find out more</a>
                            </div>
                        </div>
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
        <!--=        Project Area Start         =-->
        <!--=====================================-->
        <?php require('components/portfoliocom.php'); ?>
        <!--=====================================-->
        <!--=        Counter Up Area Start      =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light">
                    <span class="subtitle">Featured Case Study</span>
                    <h2 class="title">Design startup movement</h2>
                    <p>In vel varius turpis, non dictum sem. Aenean in efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="counterup-progress active">
                            <div class="icon">
                                <img src="<?php echo base_url(); ?>assets/media/icon/icon-7.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="3">3</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Years of operation</h6>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="<?php echo base_url(); ?>assets/media/icon/icon-8.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="80">80</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Projects deliverd</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="<?php echo base_url(); ?>assets/media/icon/icon-9.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count" data-count="15">15</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Specialist</h6>
                        </div>
                    </div>
                 
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <!-- <li class="shape shape-1"><img src="<?php echo base_url(); ?>assets/media/others/line-9.png" alt="Circle"></li> -->
                <li class="shape shape-2"><img src="<?php echo base_url(); ?>assets/media/others/bubble-42.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="<?php echo base_url(); ?>assets/media/others/bubble-43.png" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Testimonial Area Start      =-->
        <!--=====================================-->

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

    <script src="<?php echo base_url(); ?>assets/js/marq.js"></script>
<!-- <script>
    $(function () {
        scrollMove('.items',60 ,1 );
    })
</script> -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>
