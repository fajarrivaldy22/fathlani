<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public $title = "Fathlani.com | ";
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
			'title'=>$this->title."Dropship & Reseller",
		);
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
		$this->load->view('component/footer');
		$this->load->view('js/js');
	}
	public function signup()
	{
		$data = array(
			'title'=>"Sign up",
		);
		$this->load->view('css/assets',$data);
		$this->load->view('signup');
		$this->load->view('component/footer');
		$this->load->view('js/js');
	}
}
