
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pantawid extends CI_Controller {

	public function is_exists(){
		if ($this->input->post() !== null) {
			$hhid = $this->input->post('hhid');
	        $query = $this->db->get_where('tbl_pppp', array('hh_id' => $hhid));

	        // Check if any rows are returned
	        if ($query->num_rows() > 0) {
	           print_r(json_encode(['is_exists'=>True,'get_current_hhid'=>$hhid]));
	        } else {
	           print_r(json_encode(['is_exists'=>False]));
	        }
			// print($data['tableName']);
		}		
	}


}
