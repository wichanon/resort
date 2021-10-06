<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function login()
    {
        $data = $this->input->post();
        $check = $this->user_model->login($data);
        $newdata = array(
            'username'  => $check['username'],
            'firstname' => $check['firstname'],
            'lastname' => $check['lastname'],
            'tel'=>$check['tel'],
            'email'=>$check['email']
        );
        $this->session->set_userdata($newdata);
        echo 'true';
    }
    public function register()
    {
        $data = $this->input->post();
        $check = $this->user_model->register($data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        echo 'true';
    }
}
