<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gateways extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['gateways'] = $this->gateway->all();
        $this->load->view('PaymentGateways/index', $data);
    }
}
