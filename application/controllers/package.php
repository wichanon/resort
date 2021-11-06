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
        $total_day = (strtotime($data['end_date']) - strtotime($data['start_date'])) /  (60 * 60 * 24);
        $total_day = intval($total_day + 1);
        $data['total_day'] = $total_day;
        //echo $total_day;

        $list['list'] = $this->package_model->search_package($data);
        foreach ($list['list'] as $key => $value) {
            $list['list'][$key]['house_id'] = $this->package_model->get_house($list['list'][$key]['house_id']);
        }
        foreach ($list['list'] as $key => $value) {
            $list['list'][$key]['can_booking'] = $this->package_model->check_checkin($value,$data['start_date'],$data['end_date']);
        }
        // echo"<pre>";print_r($list);echo "</pre>";
        print_r(json_encode($list));
    }
    public function DateDiff($strDate1, $strDate2)
    {
        return (strtotime($strDate2) - strtotime($strDate1)) /  (60 * 60 * 24);  // 1 day = 60*60*24
    }
    public function booking()
    {
        $data = $this->input->post();
        //echo"<pre>";print_r($data);echo "</pre>";
        $check = $this->package_model->booking($data);
    }
    public function review()
    {
        $data = $this->input->post();
        //echo"<pre>";print_r($data);echo "</pre>";
        $check = $this->package_model->review($data);
    }
    function check_date_checkin(){
        $data = $this->input->post();
        $list = $this->package_model->check_checkin($data,$data['in'],$data['out']);
        echo $list;
    }
}
