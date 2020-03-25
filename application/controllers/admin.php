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
    public function customer(){
        $title = "Customers";
        $this->load->view("admin/referenceAdmin/component/customer",array("title"=>$title));
    }

    public function tambahproduct(){
        $title = "Tambah Produk";
        $this->load->view("admin/referenceAdmin/component/product/tambahproduct",array("title"=>$title));
    }

    public function editproduct(){
        $title = "Edit Produk Produk";
        $this->load->view("admin/referenceAdmin/component/product/editproduct",array("title"=>$title));
    }

    public function dllproduct(){
        $title = "Lain - lain";
        $this->load->view("admin/referenceAdmin/component/product/dll",array("title"=>$title));
    }

    public function reseller(){
        $title = "Reseller";
        $this->load->view("admin/referenceAdmin/component/orders/reseller",array("title"=>$title));
    }

    public function dropshiper(){
        $title = "Dropshiper";
        $this->load->view("admin/referenceAdmin/component/orders/dropshiper",array("title"=>$title));
    }

}