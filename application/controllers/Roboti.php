<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roboti extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Roboti_model", "Roboti");
	}

	public function lista_roboti()
	{
	
		$roboti = null;
		$categorie = $this->input->get('categorie');
		$producator = $this->input->get('producator');

		if($categorie != null){
			$roboti = $this->Roboti->getRobotsByCategorie($categorie);
		}else if ($producator != null){
			$roboti = $this->Roboti->getRobotsByProducator($producator);
		}else{
			$roboti = $this->Roboti->getAllRobots();
		}

		
		$data = array(
			'roboti' => $roboti
		);
		$this->load->view('templates/header');
		$this->load->view('roboti/lista_roboti', $data);
		$this->load->view('templates/footer');
	}

	public function vizualizare_robot($id_robot){
		$robot = $this->Roboti->getRobotById($id_robot);
		$data = array(
			'robot' => $robot
		);
		$this->load->view('templates/header');
		$this->load->view('roboti/detalii_robot', $data);
		$this->load->view('templates/footer');
	}

	public function adauga_robot()
	{
		$this->load->view('templates/header');
		$this->load->view('roboti/adauga_robot');
		$this->load->view('templates/footer');
	}

	public function editeaza_robot($id_robot)
	{
		$robot = $this->Roboti->getRobotById($id_robot);
		$data = array(
			'robot' => $robot
		);
		$this->load->view('templates/header');
		$this->load->view('roboti/editeaza_robot', $data);
		$this->load->view('templates/footer');
	}

	public function adauga_robot_post(){
		$this->Roboti->adaugaRobot($this->input->post());
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function update_robot_post($id_robot){
		$this->Roboti->updateRobot($id_robot,$this->input->post());
		redirect("/roboti/lista_roboti");
	}
	
	public function sterge_robot($id_robot)
	{
		$this->Roboti->stergeRobotById($id_robot);
		redirect("/roboti/lista_roboti");
	}


}