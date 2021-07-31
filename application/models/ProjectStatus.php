<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class ProjectStatus extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function all()
        {
        	$query = $this->db->get('project_status');
            $this->db->order_by('name', 'ASC');
        	return $query->result_array();
        }
}
?>