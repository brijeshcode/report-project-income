<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['projects'] = $this->project->all();
        $this->load->view('projects/index', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $data['clients'] = $this->client->all();
        $data['sources'] = $this->projectSource->all();
        $data['statuses'] = $this->ProjectStatus->all();
        $data['currencies'] = $this->currency_model->getCurrences();

        $this->load->view('projects/create', $data);
    }

    public function store()
    {
        $this->load->helper('url');
        $projectId = $this->project->add();
        $this->milestone->add($projectId);
        redirect('/projects');
    }

    public function addMilestone($projectId)
    {
        $this->milestone->add($projectId);
        redirect('/project/'.$projectId. '/view');
    }


    public function view($project)
    {
        $data['project'] = $this->project->getProject($project);
        $data['currencies'] = $this->currency_model->getCurrences();
        $this->load->view('projects/view', $data);
    }

    public function edit($id)
    {
        $this->load->helper('form');
        $data['project'] = $this->project->getProject($id);
        $data['clients'] = $this->client->all();
        $data['sources'] = $this->projectSource->all();
        $data['statuses'] = $this->ProjectStatus->all();
        $data['currencies'] = $this->currency_model->getCurrences();

        $this->load->view('projects/edit', $data);
    }

    public function update($id)
    {
        $this->load->helper('url');
        $this->project->update($id);
        redirect('/projects');
    }

    public function milestoneEdit($projectId, $milestoneId)
    {
        $data['milestone'] = $this->milestone->getSingle($milestoneId, $projectId);
        $data['currencies'] = $this->currency_model->getCurrences();
        $this->load->view('projects/edit-milestone', $data);

    }

    public function milestoneUpdate($projectId, $milestoneId)
    {
        $this->load->helper('url');
        $this->milestone->update($milestoneId, $projectId );
        redirect('/projects/view/'. $projectId);
    }

    public function milestoneDestroy( $projectId, $milestoneId)
    {
        $this->milestone->delete($milestoneId );
        redirect('/projects/view/'. $projectId);
    }
}
