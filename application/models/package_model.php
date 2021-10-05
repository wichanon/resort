<?php
defined('BASEPATH') or exit('No direct script access allowed');

class package_model extends CI_model
{
    public function get_all_package()
    {
        $output = [];
        $data = $this->db->get('package');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
        }
        return $output;
    }
    public function get_package_by_id($id)
    {
        $output = [];
        $this->db->where('id',$id);
        $data = $this->db->get('package');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
            $output = $output[0];
        }
        return $output;
    }
}
