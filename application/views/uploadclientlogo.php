<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($this->session->userdata['logged'] !== TRUE)
{
    redirect( base_url().'login'); //if session is not there, redirect to login page
}
  
?>

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
    <title>Designbees | Client Logo</title>
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

<?php require('components/homenav.php'); ?>

</div>
<h4 class="text-align-center">Upload Client Logo</h4>

<?php  if($this->session->flashdata('ImageError')){?>

<div class="alert alert-danger"> 
<?php echo ($this->session->flashdata('ImageError')['ImageError']); ?>
     </div>

     <?php     } ?>

<?php 
  if($this->session->flashdata('insertlogotr')){
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('insertlogotr'); ?>
     </div>
<?php    
} else if($this->session->flashdata('insertlogoer')){
?>
 <div class = "alert alert-danger">
   <?php echo $this->session->flashdata('insertlogoer'); ?>
 </div>
<?php } 

else if($this->session->flashdata('insertlogoer2')){
  ?>
   <div class = "alert alert-danger">
     <?php echo $this->session->flashdata('insertlogoer2'); ?>
   </div>
  <?php } 


?>
<div class="container wrap-container">







  <form method='post' action='<?php echo base_url(); ?>controll/uploadclientlogofunc' enctype='multipart/form-data'>
  <div class="mb-3">
<input type="text" name="client_name" placeholder="Client Name">
</div>
<div class="mb-3">
   <input type='file' name='file' >
   </div>
   <div class="mb-3"> 
   <input type='submit' value='Upload' name='upload' class="btn btn-primary" />
   </div>

  </form>








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
                url:'/deleteclientlogo'+id,
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