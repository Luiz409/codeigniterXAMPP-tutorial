<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		permission();
		$this->load->model('games_model');
		$data ['games'] = $this->games_model->index();
        $data ['title'] = "Dashboard Luiz";
		
		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function search()
	{
		$this->load->model('search_model');
		$data ['title'] = "Pesquisa Luiz";
		$data ['result'] =  $this->search_model->search($this->input->post('busca'));
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/result', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
	
}
