<?php
class test extends CI_Controller {

  public function __construct() {
      parent::__construct();
      // $this->load->library('form_validation');
      // $this->load->model('User_auth_model');
      print(1);

  }

  public function index(){
    $ip = $_SERVER['REMOTE_ADDR'];
    print($ip);
  }

}
