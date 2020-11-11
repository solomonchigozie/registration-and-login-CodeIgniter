<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col lg-oush-4 col-md-push-4">
                <div class="card" style="margin-top: 50px">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                    <?php echo form_open('home/login_process') ?>
                        <div class="form-group">
                            <input type="text" name="u_name" placeholder="Username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="u_pass" placeholder="Password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="u_login" value="Login as Admin" class="btn btn-success">
                            <a href="<?php echo site_url("home/register") ?>" class="btn btn-warning btn-sm">Register</a>

                        </div>
                        
                    <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
