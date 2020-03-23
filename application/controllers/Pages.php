<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public $title = "Fathlani.com | ";

	
	function __construct(){
        parent::__construct();
        $this->load->model("pagesmodels");
    }


	public function index()
	{
		$data = array(
			'title'=>$this->title."Dropship & Reseller",
		);
		$this->load->view('css/assets');
		$this->load->view('home',$data);
		$this->load->view('component/footer');
		$this->load->view('js/js');
		
	}
	public function signin()
	{
		$data = array(
			'title'=>"Sign in",
		);
		$this->load->view('css/assets',$data);
		$this->load->view('signin');
		$this->load->view('js/js');
	}
	public function signup()
	{
		$data = array(
			'title'=>"Sign up",
		);
		$this->load->view('css/assets',$data);
		$this->load->view('signup');
		$this->load->view('js/js');
	}

	public function loginuser(){
		$email =  $this->input->post('email');
        $password = $this->input->post('password');
        
        $data = array(
            "email"=>$email,
            "password"=>$password
        );

		$this->pagesmodels->loginuser($data);
        redirect();
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect();
	}
	
}
