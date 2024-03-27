
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class metadata extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Metadata_model');
    }
    
	public function get_dropdown_options(){
		// if ($this->input->post() !== null) {
		// 	$data = $this->input->post();
		// 	$options = $this->Metadata_model->get_dropdown_options($data);
		// 	print_r($options);
		// 	// print($data['tableName']);
		// }		
	}

	public function get_options_provinces($selected_province = ""){
		 print_r($this->Metadata_model->get_options_provinces($selected_province));
	}

	public function get_options_municipalities($selected_province, $selected_municipality="") {
		 $selected_province = urldecode($selected_province);
		 print_r($this->Metadata_model->get_options_municipalities($selected_province, $selected_municipality));
	}

	public function get_options_barangay($selected_municipality, $selected_barangay="") {
		 $selected_municipality = urldecode($selected_municipality);
		 print_r($this->Metadata_model->get_options_barangay($selected_municipality, $selected_barangay));
	}
	


	
}
