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
        $this->db->where('id', $id);
        $data = $this->db->get('package');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
            $output = $output[0];
        }
        return $output;
    }
    public function get_activity_by_package($id, $day)
    {
        $output = [];
        $this->db->where('package_id', $id);
        $this->db->where('day', $day);
        $data = $this->db->get('activity');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
        }
        return $output;
    }
    public function get_house($id)
    {
        $output = [];
        $this->db->where('id', $id);
        $data = $this->db->get('house');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
            $output = $output[0];
        }
        return $output;
    }
    public function get_images_package($id)
    {
        $output = [];
        $this->db->where('package_id', $id);
        $data = $this->db->get('image');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
        }
        return $output;
    }
    public function search_package($data)
    {
        $output = [];
        $total_member = '';
        $total_adult = '';
        $total_kid = '';
        if ($data['total_member'] != '') {
            $total_member = ' AND total_member >=' . $data['total_member'];
        }
        if ($data['total_adult'] != '') {
            $total_adult = ' AND total_adult >=' . $data['total_adult'];
        }
        if ($data['total_kid'] != '') {
            $total_kid = ' AND total_kid >=' . $data['total_kid'];
        }

        $data = $this->db->query('SELECT 
            *
			FROM package 
			WHERE name LIKE \'%' . $data['keyword'] . '%\'' . $total_member . $total_adult . $total_kid);
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
        }
        return $output;
    }
}
