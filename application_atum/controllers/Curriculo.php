<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Curriculo extends My_Controller {

	public function index(){
		$dados = array();
		$this->load->model('curriculo_model', '', TRUE);
		$dados['trab'] = $this->curriculo_model->get_trabalho();
		$dados['form'] = $this->curriculo_model->get_formacao();
		$dados['sobre'] = $this->curriculo_model->get_sobre();
		$this->load->view('common/header');
		$html = $this->load->view('curriculo', $dados);

		//$this->load->helper('mpdf_helper');
		//pdf($html,'Curriculo');

	}
}