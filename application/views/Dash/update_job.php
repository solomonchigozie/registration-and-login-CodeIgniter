<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!$_SESSION['u_name']){

    redirect('home','refresh');
}
$id = $this->uri->segment(3);
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
                <div class="card">
                    <div class="card-header">
                        Add Jobs
                    </div>
                    <div class="card-body">
                        <?php echo form_open('Job/update_process_job/'.$id.'','class="form-horizontal"') ?>
                            <?php 
                                
                                // echo $id;
                                $job_list = $this->db->get_where("jobs", array('j_id' =>$id ));

                                foreach($job_list->result() as $job){
                                    ?>
                                    <div class="form-group">
                                        <label for="">Job Title</label>
                                        <input type="text" value="<?php echo $job->job_name; ?>" name="job_title" class="form-control">
                                    </div>
                                    <?php

                                }

                            ?>
                            
                            <div class="form-group">
                                <input type="submit" name="update_job" value="Update Job" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
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



