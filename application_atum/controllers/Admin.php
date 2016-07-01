<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Admin extends My_Controller {

	public function index(){
		$dados = array();
		$this->load->model('admin_model', '', TRUE);
		$dados['trab'] = $this->admin_model->get_trabalho();
		$dados['form'] = $this->admin_model->get_formacao();
		$dados['sobre'] = $this->admin_model->get_sobre();
		$this->load->view('common/header');

		$this->load->view('admin_login');
		$this->load->view('admin', $dados);
	}
}