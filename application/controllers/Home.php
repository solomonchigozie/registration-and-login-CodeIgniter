<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    //call a construct to access the database insert model
    public function __construct(){
        parent::__construct();
        $this->load->model('Users');
    }



    public function index(){
        $this->load->view("inc/header.php");
        $this->load->view('home');
        $this->load->view("inc/footer.php");
    }
    //register controller
    public function register(){
        $this->load->view("inc/header.php");
        $this->load->view('register');
        $this->load->view("inc/footer.php");
    }

    //login controller
    public function login_process(){
        if($this->input->post('u_login')){
            $u_name= $this->input->post('u_name');
            //encrypt password
            $u_pass = md5($this->input->post('u_pass'));

            //array to store data
            $user_data = array(
                'u_name'=>$u_name,
                'u_pass' =>$u_pass
            );

            // echo "<pre>";
            // var_dump($user_data);
            // echo "</pre>";

            #get inputed user data from database
            $user_list = $this->db->get_where('users',array('u_name'=>$user_data['u_name']));
            foreach($user_list->result() as $user){
                if($user_data['u_name'] == $user->u_name && $user_data['u_pass'] == $user->u_pass){
                    $_SESSION['u_name'] = $user_data['u_name'];  
                    redirect("Dash", 'refresh');
                }else{
                    echo "<script>alert('Incorrect username or password')</script>";
                    redirect('home','refresh');
                }
            }
        }
        else{
            redirect('home','refresh');
        }

    }

    public function register_process(){
        if($this->input->post('u_reg')){
            $u_email= $this->input->post('u_email');
            $u_name= $this->input->post('u_name');
            //encrypt password
            $u_pass = md5($this->input->post('u_pass'));

            //array to store data
            $user_data = array(
                'u_email'=>$u_email,
                'u_name'=>$u_name,
                'u_pass' =>$u_pass
            );

            // echo "<pre>";
            // var_dump($user_data);
            // echo "</pre>";

            $this->Users->insert_user( $user_data );

            //show success
            redirect("home", 'refresh');

        }else{
            redirect('home/register','refresh');
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
        redirect('home','refresh');
    }

}


?>