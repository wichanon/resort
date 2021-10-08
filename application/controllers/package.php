<?php
defined('BASEPATH') or exit('No direct script access allowed');

class package extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('package_model');
    }
    public function search_package()
    {
        $data = $this->input->post();
        
        $list['list'] = $this->package_model->search_package($data);
        foreach ($list['list'] as $key => $value) {
            $list['list'][$key]['house_id'] = $this->package_model->get_house($list['list'][$key]['house_id']);
        }
        
        //echo"<pre>";print_r($list);echo "</pre>";
        print_r(json_encode($list));
    }
    public function booking()
    {
        $data = $this->input->post();
        //echo"<pre>";print_r($data);echo "</pre>";
        $check = $this->package_model->booking($data);
    }
}
