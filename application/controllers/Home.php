<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Roboti_model", "Roboti");
	}

	public function index()
	{
		$producatori = $this->Roboti->getAllProducatori();
		$categorii = $this->Roboti->getAllCategorii();
		$data = array(
			'producatori' => $producatori,
			'categorii' => $categorii
		);

		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}


}