<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceps extends CI_Controller {

	public function __construct(){
		parent::__construct();
		permission();
	}

	public function index()
	{
		$this->load->model('ceps_model');
		$data ['games'] = $this->ceps_model->index();
        $data ['title'] = "CEPs Luiz";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/ceps', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function new(){
		$data ['title'] = "new CEP Luiz";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-ceps', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function store(){

		$game = $_POST;
		$this->load->model('ceps_model');
		$this->ceps_model->store($game);
		redirect('ceps');
	}

	public function edit($id){
		$this->load->model('ceps_model');
		$data ['game'] = $this->ceps_model->show($id);
        $data ['title'] = "Editar  CEP Luiz";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-ceps', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function update($id){
		$this->load->model('ceps_model');
		$game = $_POST;
		$this->load->model('ceps_model');
		$this->ceps_model->update($id, $game);
		redirect('ceps');
	}

	public function delete($id){
		$this->load->model('ceps_model');
		$this->ceps_model->destroy($id);
		redirect('ceps');
	}
}
