<?php
class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function user_save_info($data) {
        $username = $data['username'];
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = $this->db->get_where('users', array('username' => $username));
        $user = $query->row_array();

        if (!empty($user)) {
           
            return json_encode(array(
                        'user_id' => $user['user_id'],
                        'status' => 'exists'
                        ));

          
        } else {
            // Insert a new user record
            $this->db->insert('users', $data);
            return json_encode(array(
                        'user_id' =>$this->db->insert_id(),
                        'status' => 'success',
                        ));
        }
    }
        
    public function verify_user($username, $password) {
        $query = $this->db->get_where('users', array('username' => $username));
        $user = $query->row_array();

        if ($user && password_verify($password, $user['password'])) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('user_id', $user['user_id']);
            $this->session->set_userdata('user_fullname', $user['fullname']);
            

            return true;
        } else {
            return false;
        }
    }

    public function is_logged_in() {
        return (bool) $this->session->userdata('logged_in');
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
    }
    
}