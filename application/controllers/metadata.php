
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class metadata extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Metadata_model');
    }
    
	//-------------------------------------------------------------------
    public function get_options_components($comp_id=-1){
        $data = [
            "tableName"=>'lib_comp',
            "valueMember"=>'comp_id',
            "displayMember"=>'comp_desc',
            "condition"=>"comp_id > 0",
            "selected"=>$comp_id

        ];
        $options = $this->Metadata_model->get_dropdown_options($data);
        // return $options;
        print_r($options);
    }

    public function get_options_subcomponents($comp_id, $selected_subcomponent_id = 0){
        $data = [
            "tableName"=>'lib_subcomp',
            "valueMember"=>'subcomp_id',
            "displayMember"=>'subcomp',
            "condition"=>"comp_id = $comp_id",
            "selected"=>$selected_subcomponent_id

        ];
        $options = $this->Metadata_model->get_dropdown_options($data);
        // return $options;
        print_r($options);
    }

    public function get_options_programs($subcomp_id, $selected_program_id = 0){
        $data = [
            "tableName"=>'lib_programs',
            "valueMember"=>'program_id',
            "displayMember"=>'program',
            "condition"=>"subcomp_id = $subcomp_id",
            "selected"=>$selected_program_id

        ];
        $options = $this->Metadata_model->get_dropdown_options($data);
        // return $options;
        print_r($options);
    }


	//------------------------------------------------------------------

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
