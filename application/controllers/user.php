<?php
class user extends CI_Controller {

  public function __construct() {
      parent::__construct();
      // $this->load->library('form_validation');
      $this->load->model('User_auth_model');

  }

  public function logout(){
      // Destroy the entire session
      $this->session->sess_destroy();
      // print('logout');
      redirect(site_url('user/login'));
  }

  public function login(){
      $this->load->view('login');
  }

  public function authenticate() {
    // Load the LDAP authentication model
    $login_data = $this->input->post();
    //verify login
    if ($this->User_auth_model->ldap_auth($login_data['username'],$login_data['password'])) {
        $data['success'] = true;
        print(json_encode($data));
    }else{

      //try direct authentication
        if ($this->User_auth_model->db_auth($login_data['username'],$login_data['password'])) {
          // redirect(site_url(),'refresh');
          $data['success'] = true;
          print(json_encode($data));
        }else{
          
          $data['success'] = false;
          print(json_encode($data));

          // $data['username'] = $login_data['username'];
          // $data['password'] = '';
          // $data['status'] = "login_failed";
          // $data['alert'] = $this->session->flashdata('login_failed');
          // // $this->load->view('user/login',$data);
          // // redirect(site_url(),'refresh'); 
          // print_r($data);       
        }



    }


    
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
