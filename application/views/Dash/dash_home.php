<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){

    redirect('home','refresh');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
</head>
<body>

    <!-- nav bar -->
       <?php $this->load->view('dash/inc/nav') ?>
    <!-- nav bar -->


Welcome <?php echo  $_SESSION['u_name']; ?>

    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>



