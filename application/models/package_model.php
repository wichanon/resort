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
            foreach ($output as $key => $value) {
                if ($value['canchange'] == 1) {
                    $output2 = [];
                    $this->db->where('activity_id', $value['id']);
                    $data = $this->db->get('activity_change');
                    if ($data->num_rows() > 0) {
                        $output2 = $data->result_array();
                        $output[$key]['activity_change'] = $output2;
                        //echo"<pre>";print_r($output);echo "</pre>";
                    }
                }
            }
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
            $total_member = ' AND total_member <=' . $data['total_member'] . ' AND total_member >=' . $data['total_min'];
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
    public function booking($data)
    {
        $data_insert = array(
            'member_id' => $data['member_id'],
            'package_id' => $data['package_id'],
            'name_booking' => $data['name'],
            'tel_booking' => $data['tel'],
            'email_booking' => $data['email'],
            'checkin' => $data['checkin']
        );
        $check = $this->db->insert('booking', $data_insert);
        if ($check == true) {
            echo "true";
        } else {
            echo "false";
        }
    }
    public function get_activity_change($data)
    {
        $output = [];
        $this->db->where('activity_id', $data);
        $data = $this->db->get('activity_change');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
        }
        return $output;
    }
}
