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
    <title>Designbees | Admin</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/bootstrap.min.css">
        <!-- Meta Data -->
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<h4 class="text-align-center">Portfolio Category</h4>

<!-- Insert Alert -->
<?php 
   if($this->session->flashdata('categorytrue')){
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('categorytrue'); ?>
     </div>
<?php    
} else if($this->session->flashdata('categoryerr')){
?>
 <div class = "alert alert-danger">
   <?php echo $this->session->flashdata('categoryerr'); ?>
 </div>
<?php } ?>



<!-- Delete Alert -->

<?php 
   if($this->session->flashdata('categorydeltr')){
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('categorydeltr'); ?>
     </div>
<?php    
} else if($this->session->flashdata('categorydeler')){
?>
 <div class = "alert alert-danger">
   <?php echo $this->session->flashdata('categorydeler'); ?>
 </div>
<?php } ?>
<div class="container wrap-container">




<form method="POST" action="<?php echo base_url('controll/addportfoliocategory'); ?>">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="category_name" >
                                  
                                </div>
                               
                                
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Submit" class=" btn-fill-primary btn-fluid btn-primary"/>
                                </div>
                            </form>








</div>
<h6 class="text-align-center">Available Category</h6>

<div class="container wrap-container">

<?php

if(count($category)==0){
    ?>

    <div>No Categoty Available</div>
 <?php   
}else{


foreach($category as $categorydata):

?>



<div class="card text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $categorydata["category_name"];?></h5>

    <a href="<?php echo base_url('controll/deletecategory/'. $categorydata['id']); ?>" value="<?php echo $categorydata["id"];?>" class="btn btn-primary confirm_delete">Delete</a>
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
                url:'/deletecategory'+id,
                success: function(response){
                    alert("Category Deleted Successfully")
                }
            })
        }
    })
});

</script>
</body>
</html>