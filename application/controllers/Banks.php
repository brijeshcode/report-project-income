<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banks extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['banks'] = $this->bank->all();
        $this->load->view('banks/index', $data);
    }
}
