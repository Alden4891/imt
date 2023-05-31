<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('captcha_model');
        $this->load->helper('captcha');
    }
    
    public function index() {
        // Generate a new CAPTCHA and display it in the view
        $captcha = $this->captcha_model->generate_captcha();
        
        // Create CAPTCHA image options
        $captcha_config = array(
            'word'          => $captcha,
            'img_path'      => './captcha/',
            'img_url'       => base_url('captcha/'),
            'img_width'     => 150,
            'img_height'    => 50,
            'expiration'    => 3600
        );
        
        // Generate the CAPTCHA image
        $cap = create_captcha($captcha_config);
        
        // Store the CAPTCHA image and code in session
        $this->session->set_userdata('captcha_image', $cap['image']);
        $this->session->set_userdata('captcha_code', $cap['word']);
        
        // Pass the CAPTCHA image URL to the view
        $data['captcha_image'] = $cap['image'];
        
        // Load the CAPTCHA view
        $this->load->view('captcha_view', $data);
    }
    
    public function validate() {
        // Retrieve the user input
        $input = $this->input->post('captcha');
        
        // Validate the CAPTCHA input
        if ($this->captcha_model->validate_captcha($input)) {
            // CAPTCHA validation successful
            echo "CAPTCHA validation successful.";
        } else {
            // CAPTCHA validation failed
            echo "CAPTCHA validation failed.";
        }
    }
}
?>
