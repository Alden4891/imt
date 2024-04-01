<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class recovery extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
    
	public function index()
	{
		$this->load->model('Grantee_model');

		//loads filter data
		// $filter_data = $this->input->post();
	    $data['deleted_data'] = $this->get_deleted_interventions();

	    // print('<pre>');
	    // print_r($data);
	    // print('</pre>');


		$data['user_id'] = $this->session->userdata('user_id');
		$data['user_fullname'] = $this->session->userdata('user_fullname');
		$this->load->view('templates/header');
		$this->load->view('recovery',$data);
		$this->load->view('templates/footer');

	}

    public function get_deleted_interventions(){
    	$this->load->model('Intervention_model');
	   	$interv_data = $this->Intervention_model->get_deleted_interventions();
    	$htm = "";	
	    foreach ($interv_data as $r) {

			$htm .="
			        <tr>
			          <td>$r->ctrlno</td>
			          <td>$r->HOUSEHOLD_ID</td>
			          <td>$r->subject</td>
			          <td>$r->encoded_by</td>
			          <td>$r->date_encoded</td>
			          <td>$r->deleted_by</td>
			          <td>$r->date_deleted</td>
			          <td>
						<button type=\"button\" class=\"btn btn-info btn-sm\" aria-label=\"Left Align\"  id=\"btn_restore_intervention\" interv_id=\"$r->interv_id\" >
						  <span class=\"fa fa-mail-reply-all\" aria-hidden=\"true\"></span>
						</button>

					  </td>
			        </tr>


				";
	    }
	    return	$htm;
    }

}
