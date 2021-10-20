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
		$this->load->view('home', $data);
	}
	public function detail($id, $date_start = 0, $date_end = 0)
	{
		$data['list'] = $this->package_model->get_package_by_id($id);
		$data['package'] = $this->package_model->get_all_package();
		$data['activity']['day1'] = $this->package_model->get_activity_by_package($id, 1);
		$data['activity']['day2'] = $this->package_model->get_activity_by_package($id, 2);
		$data['activity']['day3'] = $this->package_model->get_activity_by_package($id, 3);
		$data['activity']['day4'] = $this->package_model->get_activity_by_package($id, 4);
		$data['list']['image_cover'] = $this->package_model->get_images_package($id);
		$data['list']['house_id'] = $this->package_model->get_house($data['list']['house_id']);
		$data['sess'] = '';
		$data['sess_user']= '';
		$data['date_start'] = $date_start;
		$data['date_end'] = $date_end;

		//echo"<pre>";print_r($data['activity']);echo "</pre>";
		if (isset($_SESSION['lastname'])) {
			$data['sess'] = $_SESSION['id'];
			$data['sess_user'] = json_encode($_SESSION);
		}
		$this->load->view('detail', $data);
	}
	public function package()
	{
		$data['package'] = $this->package_model->get_all_package();
		$this->load->view('package', $data);
	}
}
