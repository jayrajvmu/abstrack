<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css">
        <!-- Meta Data -->
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Designbees | Subscriber</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/media/favicon.png">
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/subscriber.css">

</head>
<body>
<div id="main-wrapper" class="main-wrapper">
<a href="https://wa.me/9943945548" id="backto-top" class="back-to-top">
        <img src="<?php echo base_url(); ?>assets/media/whatsapp.png" alt="">
    </a>
<?php require('components/homenav.php'); ?>

</div>




<?php

$imagedata=json_decode($images[0]["images"], true);
?>

<div class="container-fluid plr--30">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">

                <?php

                foreach($imagedata as $imagesrc):

?>

<div class="col">
                        <div class="project-grid">
                            <div class="thumbnail">
                                <a href="<?php echo base_url(); ?>portfolio">
                                    <img src="<?php echo base_url(); ?>assets/our_work_image/<?php echo $imagesrc["image_name"]; ?>" alt="project">
                                </a>
                            </div>
                        
                        </div>
                    </div>
  <?php endforeach;

    ?>
                   
                 
                 
                </div>
        
            </div>

        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <?php require('components/footer.php'); ?>





        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <?php require('components/sidebar.php'); ?>
<?php require('components/js.php'); ?>



<script>

$( document ).ready(function() {
    
    $(".confirm_delete").click(function(e){


        confirmDialog=confirm("Are you want to delete subscriber in our list permently ?");

        if(confirmDialog){
            var id = $(this).val();

            $.ajax({
                type:"DELETE",
                url:'/deletesubs'+id,
                success: function(response){
                    alert("User Deleted Successfully")
                }
            })
        }
    })
});

</script>
<?php require('components/js.php'); ?>

</body>
</html>