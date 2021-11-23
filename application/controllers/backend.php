<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class backend extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('package_model');
	}
	public function index()
	{
		//$this->package_model->email_register('my_053562121@hotmail.com','sss');
	}
    public function packlist()
	{
        $data['menu'] = '';
        $data['list'] = $this->package_model->get_package_payment();
        $this->load->view('backend/packlist',$data);
	}
	public function package_manage()
	{
        $data['menu'] = '';
        $data['list'] = $this->package_model->get_all_package();
        $this->load->view('backend/package_manage',$data);
	}
	public function package_manage_($id)
	{
        $data['menu'] = '';
        $data['list'] = $this->package_model->get_all_package();
        $this->load->view('backend/package_manage_add',$data);
	}


}
