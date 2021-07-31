<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Milestone extends CI_Model {
        private $tb = 'milestones';

        public function add($projectId)
        {
            $data =  $_POST['milestone'];
            $data['project_id'] = $projectId;
            $id =  $this->db->insert($this->tb, $data);
            return $id;
        }

        public function update($id, $projectId = '')
        {

            $data =  $_POST['milestone'];
            $this->db->set($data);
            $this->db->where('id', $id);
            return $this->db->update($this->tb);
        }

        public function delete($id)
        {
            $this->db->where('id', $id);
            return $this->db->delete($this->tb);

        }
        public function getSingle($milestoneId, $projectId = '')
        {
            $tb = $this->tb;

            $this->db->select("
                    $tb.id,
                    $tb.date,
                    $tb.description,
                    $tb.amount,
                    $tb.project_id,
                    $tb.currency_id,
                    $tb.status,
                    currencies.name as currency,
                    currencies.symbol as currency_symbol,
                    currencies.short_name as currency_short,
                    "
                );


            if ($projectId != '') {
                $this->db->where('project_id', $projectId);
            }
            $this->db->where($tb.'.id', $milestoneId);
            $this->db->join('currencies', "currencies.id = $tb.currency_id", 'left');
            $query = $this->db->get($tb);
            $milestone =  $query->result_array();
            return $milestone[0];
        }
	}