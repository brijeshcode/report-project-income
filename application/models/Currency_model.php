<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Currency_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function getCurrences()
        {
        	$query = $this->db->get('currencies');
        	return $query->result_array();
        }
}
?>