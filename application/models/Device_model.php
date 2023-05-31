<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_model extends CI_Model {

    public function getDeviceId() {
        $this->load->library('user_agent');

        if ($this->agent->is_mobile()) {
            return $this->agent->mobile();
        } elseif ($this->agent->is_robot()) {
            return $this->agent->robot();
        } else {
            return $this->agent->platform();
        }
    }

    public function storeUserData($userData) {
        $deviceID = $this->getDeviceId();

        // Check if the user data already exists in the database
        $this->db->where('device_id', $deviceID);
        $query = $this->db->get('user_data');

        if ($query->num_rows() === 0) {
            // User data does not exist, insert it into the database
            $data = array(
                'device_id' => $deviceID,
                'user_data' => $userData
            );
            $this->db->insert('user_data', $data);
        }
    }
}
