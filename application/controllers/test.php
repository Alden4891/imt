<?php
class test extends CI_Controller {

  public function __construct() {
      parent::__construct();
      // $this->load->library('form_validation');
      $this->load->model('User_auth_model');

  }


  public function authenticate() {
    // Load the LDAP authentication model
    $login_data = $this->input->post();
    //verify login
    if ($this->User_auth_model->ldap_auth('aaquinones','protectme@4891021408271209')) {
        $data['status'] = "success";
    }else{
      print('ops');
    }

    // //try direct authentication
    // else{

    //   if ($this->User_auth_model->db_auth($login_data['username'],$login_data['password'])) {
    //     // redirect(site_url(),'refresh');
    //     print('login success');
    //   }else{
    //     $data['username'] = $login_data['username'];
    //     $data['password'] = '';
    //     $data['status'] = "login_failed";
    //     $data['alert'] = $this->session->flashdata('login_failed');
    //     // $this->load->view('user/login',$data);
    //     // redirect(site_url(),'refresh'); 
    //     print_r($data);       
    //   }

    // }
  }


}
