<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("Employee_Jobs");
    }

    public function index(){
        $this->load->view('dash/add_job');
    }

    //when the add job button is clicked
    public function add_job(){
        if($this->input->post('add_job')){
            $job_title = $this->input->post('job_title');

            //when sending lots of data
            $jobs_data = array(
                'job_name' => $job_title
            );

            //send data to database
            $this->Employee_Jobs->add_job($jobs_data);
            redirect('Job/view_jobs','refresh');
        }
    }

    public function view_jobs(){
        $this->load->view('dash/job_list');
    }

    public function update_job($j_id){

        $this->load->view('dash/update_job', $j_id);
    }
    
    public function update_process_job($j_id){
        if($this->input->post('update_job')){
            $job_name = $this->input->post('job_title');

            $job_details = array(
                'job_name' => $job_name
            );

            $this->db->where('j_id', $j_id);
            $this->db->update('jobs', $job_details);

            redirect('Job/view_jobs','refresh');

        }
    }

    public function delete_job($j_id){
        // echo $j_id;

        $this->db->where('j_id', $j_id);
        $this->db->delete('jobs');

        redirect('Job/view_jobs', 'refresh');

    }
}


?>