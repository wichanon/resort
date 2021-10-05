<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('package_model');
	}
	public function index()
	{
		$data['list'] = $this->package_model->get_all_package();
		$this->load->view('home',$data);
	}
	public function detail($id)
	{
		$data['list'] = $this->package_model->get_package_by_id($id);
		$data['package'] = $this->package_model->get_all_package();
		$this->load->view('detail',$data);
	}
}
