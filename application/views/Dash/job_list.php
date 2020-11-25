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
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <?php $this->load->view('dash/inc/sidebar'); ?>
            </div>
            <div class="col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Job Title</th>
                        <th>Date Added</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php 
                        $job_list = $this->db->get('jobs');
                        $n = 1;
                        foreach($job_list->result() as $job ){
                            ?>
                            <tr>
                            <td><?php echo $n++; ?></td>
                            <td><?php echo $job->job_name; ?></td>
                            <td><?php echo $job->job_date; ?></td>
                            <td><a href="<?php echo site_url() ?>Job/update_job/<?php echo $job->j_id; ?>" class="btn btn-warning">Edit</a></td>
                            <td><a href="<?php echo site_url() ?>Job/delete_job/<?php echo $job->j_id; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <?php // echo  $_SESSION['u_name']; ?>

    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            
        })
    </script>
</body>
</html>