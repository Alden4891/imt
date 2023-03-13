<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');

    }
    
	public function login()
	{
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
		if ($this->User_model->verify_user($username,$password)) {
			return print_r(json_encode(array('result'=>true,'message'=>'success')));
		}else{
			return print_r(json_encode(array('result'=>false,'message'=>'Access denied! username and password missmatch')));
		}

	}

	public function register(){
		$data = $this->input->post();
		$result = $this->User_model->user_save_info($data);
		return print_r($result);
	}

	public function logout(){
		$this->User_model->logout();
		redirect(site_url());
	}

	public function get_picture($user_id) {
	   	    $query = $this->db->select('picture, IFNULL(picture, 1) AS nopic')
	        ->from('users')
	        ->where('user_id', $user_id)
	        ->get();
	    $row = $query->row_array();

	    if ($row['nopic'] == 0) {
	        header("Content-Type: image/jpeg");
	        echo $row["picture"];
	    } else {
	        $query2 = $this->db->select('image')
	            ->from('images')
	            ->where('id', 1)
	            ->get();
	        $row2 = $query2->row_array();

	        header("Content-Type: image/jpeg");
	        echo $row2["image"];
	    }
	}






}
