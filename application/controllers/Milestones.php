<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Milestones extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }
}