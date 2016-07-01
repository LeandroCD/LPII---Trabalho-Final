<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class admin_model extends CI_Model{

		public function __construct(){

      parent::__construct();
    }

    public function get_trabalho(){
        $query = $this->db->get('trabalho');
        return $query->result_array();
    }

    public function get_sobre(){
        $query = $this->db->get('sobre');
        return $query->row();
    }

    public function get_formacao(){
        $query = $this->db->get('formacao');
        return $query->result_array();
    }

	}

?>