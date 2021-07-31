<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Client');
        $this->load->model('Gateway');
        $this->load->model('ProjectSource');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['clients'] = $this->client->all();
        $this->load->view('clients/index', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $data['gateways'] = $this->gateway->all();
        $data['sources'] = $this->ProjectSource->all();
        $this->load->view('clients/create', $data);
    }

    public function store()
    {
        $this->load->helper('url');
        $this->client->add();
        redirect('/clients');
    }

    public function edit($id)
    {
        $this->load->helper('form');
        $data['client'] = $this->client->getClient($id);
        $data['gateways'] = $this->gateway->all();
        $data['sources'] = $this->ProjectSource->all();
        $this->load->view('clients/edit', $data);
    }

    public function update($id)
    {
        $this->load->helper('url');
        $this->client->save($id);
        redirect('/clients');
    }
}
