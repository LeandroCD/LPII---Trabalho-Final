<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class trabalho_model extends CI_Model{

		public function __construct(){

      parent::__construct();
    }

    public function get_trabalho(){
        $query = $this->db->get('trabalho');
        return $query->result_array();
    }

	}

?>