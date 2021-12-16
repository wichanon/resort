<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('package_model');
        $this->load->model('user_model');
	}
	public function index()
	{
		//$this->session->sess_destroy();
		//$this->package_model->email_register('my_053562121@hotmail.com','sss');
		$this->load->view('backend/login');
	}
    public function packlist()
	{
		if(!isset($_SESSION['role'])){
			$this->load->view('backend/login');
			return;
		}
        $data['menu'] = 'confirm_payment';
        $data['list'] = $this->package_model->get_package_payment();
        $this->load->view('backend/packlist',$data);
	}
	public function packlist_booking_end()
	{
		if(!isset($_SESSION['role'])){
			$this->load->view('backend/login');
			return;
		}
        $data['menu'] = 'confirm_booking_end';
        $data['list'] = $this->package_model->get_package_payment_end();
        $this->load->view('backend/packlist_booking_end',$data);
	}
	public function package_manage()
	{
		if(!isset($_SESSION['role'])){
			$this->load->view('backend/login');
			return;
		}
        $data['menu'] = 'managepackage';
        $data['list'] = $this->package_model->get_all_package();
        $this->load->view('backend/package_manage',$data);
	}
	public function package_manage_($id = 0)
	{
		if(!isset($_SESSION['role'])){
			$this->load->view('backend/login');
			return;
		}
        $data['menu'] = '';
		$data['house'] = $this->package_model->get_all_house();
        $data['list'] = $this->package_model->get_all_package();
        $this->load->view('backend/package_manage_add',$data);
	}
	public function del_package()
	{
		if(!isset($_SESSION['role'])){
			$this->load->view('backend/login');
			return;
		}
		$data = $this->input->post();
		$this->package_model->del_package($data);
	}
	public function login()
	{
		$data = $this->input->post();
		$this->user_model->login_backend($data);
		
	}
}
