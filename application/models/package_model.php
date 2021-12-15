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
    public function check_booking($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    public function get_booking_by_id($booking)
    {
        $output = [];
        $this->db->where('id', $booking);
        $data = $this->db->get('booking');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
            $output = $output[0];
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
    public function get_activity_by_package_booking($id, $day)
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
                    $data = $this->db->query('SELECT ac.name,ac.detail,ac.image,ac.id,ac.price 
                    FROM booking_activity_change bac
                    INNER JOIN activity_change ac 
                    ON ac.id = bac.activity_new_id
                    WHERE bac.activity_old_id = ' . $value['id']);
                    // $this->db->where('activity_old_id', $value['id']);
                    // $data = $this->db->get('booking_activity_change');
                    if ($data->num_rows() > 0) {
                        $output2 = $data->result_array();
                        //$output[$key]['activity_change'] = $output2;
                        $output[$key]['name'] = $output2[0]['name'];
                        $output[$key]['image'] = $output2[0]['image'];
                        $output[$key]['price'] = $output2[0]['price'];
                        $output[$key]['detail'] = $output2[0]['detail'];
                        $output[$key]['change_true'] = '1';
                        // echo "<pre>";
                        // print_r($output[$key]);
                        // echo "</pre>";
                        //echo"<pre>";print_r($output);echo "</pre>";
                    }
                }
            }
        }
        // echo "<pre>";
        // print_r($output);
        // echo "</pre>";
        return $output;
    }
    public function get_all_house()
    {
        $output = [];
        $data = $this->db->get('house');
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
			FROM package p
			WHERE name LIKE \'%' . $data['keyword'] . '%\'' . $total_member . $total_adult . $total_kid . ' AND day_all =' . $data['total_day']);
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
        }
        foreach ($output as $key => $value) {
            $data = $this->db->query('SELECT COUNT(id) as booking_member
            FROM booking
            WHERE package_id =' . $value['id'] . ' AND status = 0');
            if ($data->num_rows() > 0) {
                $out = $data->result_array();
                $output[$key]['booking_member'] = $out[0]['booking_member'];
            }
            $data_pay = $this->db->query('SELECT checkin
            FROM booking
            WHERE package_id =' . $value['id'] . ' AND status = 1');
            if ($data_pay->num_rows() > 0) {
                $out_pay = $data_pay->result_array();
                $output[$key]['booking_member_pay'] = $out_pay;
            }
        }
        // echo "<pre>";
        // print_r($output);
        // echo "</pre>";
        return $output;
    }
    public function check_checkin($data, $in, $out)
    {
        $datechickin = explode("-", $in);
        $datechickin = $datechickin[2] . $datechickin[1] . $datechickin[0];
        $datechickout = explode("-", $out);
        $datechickout = $datechickout[2] . $datechickout[1] . $datechickout[0];
        $status = 'true';
        $data_ = $this->db->query('SELECT 
            b.id
            FROM booking b
            WHERE b.package_id = ' . $data['id'] . '
            AND b.checkin <=' . $datechickin . ' AND b.checkout >' . $datechickin . '
            OR b.checkin <' . $datechickout . ' AND b.checkout >' . $datechickout);
        if ($data_->num_rows() > 0) {
            $out_ = $data_->result_array();
            $status = 'false';
        }
        return $status;
    }
    public function booking($data)
    {
        $datechickin = explode("-", $data['checkin']);
        $datechickin = $datechickin[2] . $datechickin[1] . $datechickin[0];
        $datechickout = explode("-", $data['checkout']);
        $datechickout = $datechickout[2] . $datechickout[1] . $datechickout[0];
        $data_insert = array(
            'member_id' => $data['member_id'],
            'package_id' => $data['package_id'],
            'name_booking' => $data['name'],
            'tel_booking' => $data['tel'],
            'email_booking' => $data['email'],
            'checkin' =>  $datechickin,
            'checkout' => $datechickout,
            'price' => $data['price_totle'],
            'price_plus' => $data['price_add']
        );
        $check = $this->db->insert('booking', $data_insert);
        if ($check == true) {
            $id_booking = $this->db->insert_id();
            if (isset($data['activity_change'])) {
                foreach ($data['activity_change'] as $value) {
                    $data_insert_ac = array(
                        'booking_id' => $id_booking,
                        'activity_old_id' => $value['activity_old'],
                        'activity_new_id' => $value['activity_new']
                    );
                    $check2 = $this->db->insert('booking_activity_change', $data_insert_ac);
                }
                echo "true";
            } else {
                echo "true";
            }
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
    public function get_mypackage()
    {
        $output = [];
        $data = $this->db->query('SELECT p.name,p.detail,p.cover,p.type,p.total_adult,p.total_kid,p.id as id_package,h.name as house_name,b.price,b.id,b.status,b.review
        FROM booking b 
        INNER JOIN package p ON p.id = b.package_id
        INNER JOIN house h ON h.id = p.house_id
        WHERE b.member_id = ' . $_SESSION['id']);
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
        }
        return $output;
    }
    public function review($data)
    {
        $data_insert = array(
            'package_id' => $data['package_id'],
            'detail' => nl2br($data['review']),
            'member_id	' => $_SESSION['id']
        );
        $check = $this->db->insert('reviews', $data_insert);
        if ($check) {
            $data_update = array(
                'review' => 1
            );
            $this->db->where('id', $data['booking_id']);
            $this->db->set($data_update);
            $data = $this->db->update('booking');
            if ($data) {
                echo 'true';
            }
        } else {
            echo 'false';
        }
    }
    public function get_reviews()
    {
        $output = [];
        $data = $this->db->query('SELECT r.detail,
        r.date_time,
        m.firstname,
        m.lastname,
        p.name,
        p.detail as package_detail,
        p.type,p.cover,
        p.price,
        p.price_full
        FROM reviews r
        INNER JOIN member m ON m.id = r.member_id
        INNER JOIN package p ON p.id = r.package_id
        ORDER BY r.id DESC');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
        }
        return $output;
    }
    public function get_package_payment()
    {
        $output = [];
        $data = $this->db->query('SELECT 
        p.name ,
        p.type,
        b.name_booking ,
        b.tel_booking,
        b.email_booking,
        b.checkin,
        b.checkout,
        b.price,
        b.id
        FROM booking b 
        INNER JOIN package p ON p.id = b.package_id
        WHERE b.status = 0');
        if ($data->num_rows() > 0) {
            $output = $data->result_array();
        }
        return $output;
    }
    public function pay($id, $status)
    {
        $data_insert = array(
            'status' => $status
        );
        $this->db->where('id', $id);
        $check = $this->db->update('booking', $data_insert);
        if ($check) {
            echo true;
        } else {
            echo false;
        }
    }
    public function add_package($data)
    {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $data_insert = array(
            'name' => $data['name'],
            'detail' => $data['detail'],
            'cover' => 'images/image.jpg',
            'type' => $data['type'],
            'price' => $data['price_sell'],
            'price_full' =>  $data['price_full'],
            'total_member' => $data['total_member'],
            'total_adult' => $data['total_adult'],
            'total_kid' => $data['total_kid'],
            'house_id' => $data['house_id'],
            'day_all' => $data['day_all'],
            'cover' =>  $data['image_cover'][0]
        );
        $check = $this->db->insert('package', $data_insert);
        if ($check) {
            $id_package = $this->db->insert_id();
            foreach ($data['image_cover'] as $key => $value) {
                $data_insert_image = array(
                    'image' => $value,
                    'type' => '',
                    'package_id' =>  $id_package
                );
                $this->db->insert('image', $data_insert_image);
            }
            foreach ($data['activity'] as $key => $value) {
                foreach ($value as $k => $v) {
                    if (isset($v['change'])) {
                        $canchange = 1;
                    } else {
                        $canchange = 0;
                    }
                    $image = $v['image'];
                    if ($image == null) {
                        $image = 'images/image.jpg';
                    }
                    $data_insert_ac = array(
                        'name' => $v['name'],
                        'detail' => $v['detail'],
                        'image' => $image,
                        'price' => $v['price_add'],
                        'day' => $v['day'],
                        'time' =>  $v['time'],
                        'canchange' =>  $canchange,
                        'package_id' =>  $id_package
                    );
                    $check2 = $this->db->insert('activity', $data_insert_ac);
                    if ($check2) {
                        $id_package_2 = $this->db->insert_id();
                        if (isset($v['change'])) {
                            foreach ($v['change'] as $k2 => $v2) {
                                $image = $v2['image'];
                                if ($image == null) {
                                    $image = 'images/image.jpg';
                                }
                                $data_insert_change = array(
                                    'activity_id' => $id_package_2,
                                    'name' => $v2['name'],
                                    'detail' => $v2['detail'],
                                    'price' => $v2['price_add'],
                                    'image' => $image
                                );
                                $check3 = $this->db->insert('activity_change', $data_insert_change);
                            }
                        }
                    }
                }
            }
        } else {
            echo "false";
        }
        echo "true";
    }
    public function del_package($data)
    {
        $this->db->where('id', $data['id']);
        $check = $this->db->delete('package');
        if ($check) {
            echo 'true';
        } else {
            echo 'false';
        }
    }
}
