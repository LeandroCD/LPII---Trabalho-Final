<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class sobre_model extends CI_Model{

		public function __construct(){

      parent::__construct();
    }

    public function get_sobre(){
        $query = $this->db->get('sobre');
        return $query->row();
    }
    

	}

?>