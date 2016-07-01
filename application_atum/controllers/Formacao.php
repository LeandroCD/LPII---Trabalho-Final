<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Formacao extends My_Controller {

	public function index(){
		$dados = array();
		$this->load->model('formacao_model', '', TRUE);
		$dados['query'] = $this->formacao_model->get_formacao();
		$this->load->view('common/header');
		$this->load->view('formacao', $dados);
		$this->load->view('common/footer');
	}
}
