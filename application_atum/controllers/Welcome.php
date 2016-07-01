<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Welcome extends My_Controller {

	public function index(){
		$dados = array();
		$this->load->model('sobre_model', '', TRUE);
		$dados['query'] = $this->sobre_model->get_sobre();
		$this->load->view('common/header');
		$this->load->view('sobre', $dados);
		$this->load->view('common/footer');
	}
}
