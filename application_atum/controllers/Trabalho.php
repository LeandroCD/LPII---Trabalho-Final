<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Trabalho extends My_Controller {

	public function index(){
		$dados = array();
		$this->load->model('trabalho_model', '', TRUE);
		$dados['query'] = $this->trabalho_model->get_trabalho();
		$this->load->view('common/header');
		$this->load->view('trabalho', $dados);
		$this->load->view('common/footer');
	}
}