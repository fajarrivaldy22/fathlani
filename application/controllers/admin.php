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
        //$this->load->view('css/assets');
        $this->load->view('admin/adminDashboard');
        //$this->load->view('js/js');
    }

    public function logout(){
		$this->session->sess_destroy();
		redirect();
    }
    
    public function dashboard(){
        $this->session->set_flashdata("conten-admin","dashboard");
        redirect("/admin");
    }
    public function customer(){
        $this->session->set_flashdata("conten-admin","customer");
        redirect("/admin");
    }

    public function tambahproduct(){
        $this->session->set_flashdata("conten-admin","tambahproduk");
        redirect("/admin");
    }

    public function editproduct(){
        $this->session->set_flashdata("conten-admin","editproduk");
        redirect("/admin");
    }

    public function dllproduct(){
        $this->session->set_flashdata("conten-admin","dll");
        redirect("/admin");
    }

    public function reseller(){
        $this->session->set_flashdata("conten-admin","reseller");
        redirect("/admin");
    }

    public function dropshiper(){
        $this->session->set_flashdata("conten-admin","dropshiper");
        redirect("/admin");
    }
    public function transaksi(){
        $this->session->set_flashdata("conten-admin","transaksi");
        redirect("/admin");
    }

    public function blankpage(){
        $this->load->view("admin/referenceAdmin/component/pages/page");
    }

}