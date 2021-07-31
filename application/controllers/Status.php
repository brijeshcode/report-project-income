<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('ProjectStatus');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['status'] = $this->ProjectStatus->all();
        $this->load->view('projects/status/index', $data);
    }
}
