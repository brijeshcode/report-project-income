<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectsFrom extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('ProjectSource');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['sources'] = $this->ProjectSource->all();
        $this->load->view('projects/sources/index', $data);
    }
}
