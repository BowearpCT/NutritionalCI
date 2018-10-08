<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('main');
		$this->load->view('footer');
	}
	public function insert_master(){
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('insert_master');
		$this->load->view('footer');
	}
	public function calculate(){
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('cal_nutritional');
		$this->load->view('footer');
	}
	public function insert_type(){
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('insert_type');
		$this->load->view('footer');
	}

	public function cal_nutrition(){
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('cal_nutrition/content');
		$this->load->view('cal_nutrition/script');
		$this->load->view('footer');
		
	}
	
	public function search(){
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('search');
		// $this->load->view('cal_nutrition/script');
		$this->load->view('footer');
		
	}
}
