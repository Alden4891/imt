<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha_model extends CI_Model {
    
    public function generate_captcha() {
        // Generate a random 6-character alphanumeric CAPTCHA code
        $captcha = strtoupper(random_string('alnum', 6));
        
        // Store the CAPTCHA code in the session
        $this->session->set_userdata('captcha', $captcha);
        
        // Return the CAPTCHA code
        return $captcha;
    }
    
    public function validate_captcha($input) {
        // Retrieve the CAPTCHA code from the session
        $captcha = $this->session->userdata('captcha');
        
        // Check if the input matches the CAPTCHA code
        if (strtoupper($input) === $captcha) {
            // CAPTCHA validation successful, clear the session data
            $this->session->unset_userdata('captcha');
            return true;
        } else {
            // CAPTCHA validation failed
            return false;
        }
    }
}
?>
