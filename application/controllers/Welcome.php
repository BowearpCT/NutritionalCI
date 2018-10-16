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
	// public function delete($id){
	// 	$data['id'] = $id;
	// 	$this->load->view('header');
	// 	$this->load->view('nav');
	// 	$this->load->view('delete');
	// 	$this->load->view('footer');
	// }

	
	public function index(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('main');
		$this->load->view('footer');
	}
	public function insert_master(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('insert_master');
		$this->load->view('footer');
	}
	public function master(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('master');
		$this->load->view('footer');
	}
	public function update($id,$thname,$enname,$type,$energy,$water,$protein,$fat,$carbohydrate,$fiber,$ash,$calsium,$phosphorus,$iron,$retinol,$betacarotene,$vitaminA,$vitaminE,$thiamin,$riboflavin,$niacin,$vitaminC){
	// $data ['id'] = $id;
		$data = array(
			'id' => $id,
			'thname' => urldecode($thname),
			'enname' => urldecode($enname),
			'type' => $type,
			'energy' => $energy,
			'water' => $water,
			'protein' => $protein,
			'fat' => $fat,
			'carbohydrate' => $carbohydrate,
			'fiber' => $fiber,
			'ash' => $ash,
			'calsium' => $calsium,
			'phosphorus' => $phosphorus,
			'iron' => $iron,
			'retinol' => $retinol,
			'betacarotene' => $betacarotene,
			'vitaminA' => $vitaminA,
			'vitaminE' => $vitaminE,
			'thiamin' => $thiamin,
			'riboflavin' => $riboflavin,
			'niacin' => $niacin,
			'vitaminC' => $vitaminC
		);
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('update',$data);
		$this->load->view('footer');
	}
	public function calculate(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('cal_nutritional');
		$this->load->view('footer');
	}
	public function insert_type(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('insert_type');
		$this->load->view('footer');
	}

	public function history(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('history');
		$this->load->view('footer');
	}

	public function cal_nutrition(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('cal_nutrition/content');
		$this->load->view('cal_nutrition/script');
		$this->load->view('footer');
		
	}
	
	public function search(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('search');
		// $this->load->view('cal_nutrition/script');
		$this->load->view('footer');
		
	}

	public function login(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function signup(){
		$this->load->view('header');
		// $this->load->view('nav');
		$this->load->view('signup');
		$this->load->view('footer');
		
	}
	public function edit_type($_id,$name){
		$data = array(
			'_id'=>$_id,
			'name'=>$name
		);
		
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('edittype',$data);
		$this->load->view('footer');
	}
	
}
