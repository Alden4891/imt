<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metadata_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_dropdown_options($data) {
    	

    	// print_r($data);
    	$tableName = $data['tableName'];
    	$valueMember = $data['valueMember'];
    	$displayMember = $data['displayMember'];
    	$condition = $data['condition'];
    	$selected = (isset($data['selected'])?$data['selected']:-1);
    	$defaultValue = (isset($data['defaultValue'])?$data['defaultValue']:-1);

        $sql = "SELECT $valueMember, $displayMember FROM `$tableName` WHERE $condition";


        // print($selected);

        $query = $this->db->query($sql);
        $result = $query->result_array();
    	
        $options = '';
        // if ($selected == -1) {
        //     $options .= "<option value='$defaultValue' selected>Select</option>";
        // } else {
        //     $options .= "<option value='$defaultValue'>Select</option>";
        // }
            $options .= "<option value=''>Select</option>";
        foreach ($result as $row) {
			if(strpos($valueMember, "DISTINCT") !== false){
			    $valueMember = trim(str_replace("DISTINCT","",$valueMember));
			}
            $value = addslashes($row[$valueMember]);
            $display = $row[$displayMember];

            // print("$selected==$value <br>");
            if (urldecode($selected) == $value) {
                $options .= "<option value='$value' selected>$display</option>";
            } else {
                $options .= "<option value='$value'>$display</option>";
            }
            
        }
        return $options;
    
    }

    public function get_options_provinces($selected_value = '',$default_value=''){
        $data = [
            "tableName"=>'lib_address',
            "valueMember"=>'DISTINCT PROVINCE',
            "displayMember"=>'PROVINCE',
            "condition"=>"REGION = 'XII'",
            "selected"=>$selected_value,
            "defaultValue"=>$default_value,

        ];
        $options = $this->get_dropdown_options($data);
        return $options;
    }

    public function get_options_municipalities($selected_province, $selected_value = '',$default_value=''){

        $data = [
            "tableName"=>'lib_address',
            "valueMember"=>'DISTINCT MUNICIPALITY',
            "displayMember"=>'MUNICIPALITY',
            "condition"=>"PROVINCE = '$selected_province'",
            "selected"=>$selected_value,
            "defaultValue"=>$default_value,

        ];
        $options = $this->get_dropdown_options($data);
        return $options;
    }

    public function get_options_barangay($selected_municipality, $selected_value = '',$default_value=''){
       
        $data = [
            "tableName"=>'lib_address',
            "valueMember"=>'DISTINCT BARANGAY',
            "displayMember"=>'BARANGAY',
            "condition"=>"MUNICIPALITY = '$selected_municipality'",
            "selected"=>$selected_value,
            "defaultValue"=>$default_value,

        ];
        $options = $this->get_dropdown_options($data);
        return $options;
    }


}