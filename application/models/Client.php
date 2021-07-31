<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Client extends CI_Model {

        private $tb = 'clients';
        public function __construct()
        {
            $this->load->database();
        }

        public function all()
        {
            $this->db->select('clients.*, payment_gateways.name as gateway, project_from.name as source ');
            $this->db->from($this->tb);
            $this->db->join('payment_gateways', 'clients.payment_through_id = payment_gateways.id', 'left');
            $this->db->join('project_from', 'clients.source_id = project_from.id ', 'left');
            $this->db->order_by('name', 'ASC');
            $query = $this->db->get();

        	return $query->result_array();
        }

        public function getClient($id)
        {
            $this->db->from($this->tb);
            $this->db->where('id', $id);
            $query = $this->db->get();
            $client = $query->result_array();
            return $client[0];
        }

        public function add()
        {
            $data = array(
                'name' => $this->input->post('name'),
                'source_id' => $this->input->post('source_id'),
                'discuss_on' => $this->input->post('discuss_on'),
                'payment_through_id' => $this->input->post('payment_through_id')
            );
            return $this->db->insert($this->tb, $data);
        }

        public function save($id)
        {
            $data = array(
                'name' => $this->input->post('name'),
                'source_id' => $this->input->post('source_id'),
                'discuss_on' => $this->input->post('discuss_on'),
                'payment_through_id' => $this->input->post('payment_through_id')
            );
            $this->db->set($data);
            $this->db->where('id', $id);
            return $this->db->update($this->tb);
        }

}
?>