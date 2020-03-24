<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index(){
        if(empty($this->session->userdata("user"))){
            redirect();
        }else{
            if($this->session->userdata("user")->status != "1"){
                redirect();
            }
        }
        $this->load->view('css/assets');
        $this->load->view('admin/adminDashboard');
        $this->load->view('js/js');
    }

    public function logout(){
		$this->session->sess_destroy();
		redirect();
    }
    
    public function dashboard(){
        $title = "Dashboard";
        $this->load->view("admin/referenceAdmin/component/dashboard",array("title"=>$title));
    }
}