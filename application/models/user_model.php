<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_model
{
    public function login($data)
    {
        $output = [];
        $this->db->where('username',$data['username']);
        $this->db->where('password',md5($data['password']));
        $data = $this->db->get('member');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
            $output = $output[0];
        }
        return $output;
    }
}
