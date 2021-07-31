<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Bank extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function all()
        {
        	$query = $this->db->get('banks');
        	return $query->result_array();
        }
}
?>