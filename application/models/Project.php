<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Project extends CI_Model {

        private $tb = 'projects';
        public function __construct()
        {
            $this->load->database();
        }

        public function all()
        {
        	return $this->getProject();
        }

        public function add()
        {
            $data = array(
                'date' => $this->input->post('date'),
                'name' => $this->input->post('name'),
                'client_id' => $this->input->post('client_id'),
                'status_id' => $this->input->post('status_id'),
                'currency_id' => $this->input->post('currency_id'),
                'project_amount' => $this->input->post('project_amount'),
                'source_id' => $this->input->post('source_id'),
                'proposal' => $this->input->post('proposal'),
                'description' => $this->input->post('description')
            );
            $id =  $this->db->insert($this->tb, $data);
            return $id;
        }

        public function update($id)
        {

            $data = array(
                'date' => $this->input->post('date'),
                'name' => $this->input->post('name'),
                'client_id' => $this->input->post('client_id'),
                'status_id' => $this->input->post('status_id'),
                'currency_id' => $this->input->post('currency_id'),
                'project_amount' => $this->input->post('project_amount'),
                'source_id' => $this->input->post('source_id'),
                'description' => $this->input->post('description'),
                'proposal' => $this->input->post('proposal')
            );
            $this->db->set($data);
            $this->db->where('id', $id);
            return $this->db->update($this->tb);
        }

        public function getProject($id = '')
        {

            $this->db->select('
                projects.id,
                projects.name,
                projects.date,
                projects.proposal,
                projects.description,
                project_amount,
                client_id,
                projects.currency_id,
                status_id,
                projects.source_id,
                clients.name as client,
                currencies.name as currency,
                currencies.symbol as currency_symbol,
                currencies.short_name as currency_short,
                project_from.name as source,
                project_status.name as status,

                '
            );

            $this->db->join('clients', 'clients.id = projects.client_id', 'left');
            $this->db->join('project_from', 'project_from.id = projects.source_id', 'left');
            $this->db->join('currencies', 'currencies.id = projects.currency_id', 'left');
            $this->db->join('project_status', 'project_status.id = projects.status_id', 'left');


            $this->db->from($this->tb);
            if ($id != '') {
                $this->db->where('projects.id', $id);
            }
            $this->db->order_by('projects.date', 'DESC');
            $query = $this->db->get();
            $projects = $query->result_array();

            foreach ($projects as $key => $project) {
                $projects[$key]['milestone'] = $this->milestones($project['id']);
            }
            return $id == '' ? $projects : $projects[0];
        }

    public function milestones($projectId)
    {
        $tb = 'milestones';

        $this->db->select("
                $tb.id,
                $tb.date,
                $tb.description,
                $tb.amount,
                $tb.status,
                currencies.name as currency,
                currencies.symbol as currency_symbol,
                currencies.short_name as currency_short,
                "
            );


        $this->db->where('project_id', $projectId);
        $this->db->join('currencies', "currencies.id = $tb.currency_id", 'left');
        $this->db->order_by('date', 'ASC');
        $query = $this->db->get($tb);
        return $query->result_array();
    }
}
?>