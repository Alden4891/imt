<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing_page extends MY_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->model('User_model');

		if(!$this->session->userdata('user_id'))
		redirect(site_url('user/login'), 'refresh');
    }
    
	public function index()
	{
		// if (!$this->User_model->is_logged_in()) {
		// 	$this->load->view('login');
		// }else{

		$data['user_id'] = $this->session->userdata('user_id');
		$data['user_fullname'] = $this->session->userdata('user_fullname');

		$this->load->view('templates/header');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
		// }

	}
}
