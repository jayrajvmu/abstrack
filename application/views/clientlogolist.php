<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ($this->session->userdata['logged'] !== TRUE)
{
    redirect( base_url().'login'); //if session is not there, redirect to login page
}
  
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css">
        <!-- Meta Data -->
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Abstrak | Client Logo</title>
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
<h4 class="text-align-center">Client Logo List</h4>
<?php 
   if($this->session->flashdata('deleteclilogotr')){
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('deleteclilogotr'); ?>
     </div>
<?php    
} else if($this->session->flashdata('deleteclilogoer')){
?>
 <div class = "alert alert-danger">
   <?php echo $this->session->flashdata('deleteclilogoer'); ?>
 </div>
<?php } else if($this->session->flashdata('deleteclilogoer2')){
?>
 <div class = "alert alert-danger">
   <?php echo $this->session->flashdata('deleteclilogoer2'); ?>
 </div>
<?php }


?>
<div class="container wrap-container">



<?php
if(count($result)==0){
  ?>

  <div>Logos Not Available</div>
<?php   
}else{


foreach($result as $user):

?>



<div class="card text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $user["client_name"];?></h5>
    <img class="card-body" src="<?php echo base_url(); ?>assets/client_logo/<?php echo $user['client_logo'] ?>">

    <a href="<?php echo base_url('controll/deleteclientlogo/'. $user['id']); ?>" value="<?php echo $user["id"];?>" class="btn btn-primary confirm_delete">Delete</a>
  </div>
</div>


<?php endforeach;
}

    ?>








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