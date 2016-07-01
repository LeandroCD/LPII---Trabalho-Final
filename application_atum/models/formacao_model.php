<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class formacao_model extends CI_Model{

		public function __construct(){

      parent::__construct();
    }

    public function get_formacao(){
        $query = $this->db->get('formacao');
        return $query->result_array();
    }
    

	}

?>