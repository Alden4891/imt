<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class interventions extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
	public function index()
	{
		$this->load->model('Grantee_model');
		$data['interventions']=array();

		//loads filter data
		$filter_data = $this->input->post();
	    $data['interventions'] = $this->Grantee_model->get_grantee_listings($filter_data);
	    $data['filtered'] = 0;
	    //if filter applies load the previous filter
		if ($this->input->post('apply_filter') !== null) {
			$this->load->model('metadata_model');

			$data['filtered'] = 1;
			if (isset($filter_data['filter_province'])) {
				if ($filter_data['filter_province']!=='') {
					$data['filtered_province_option_data'] = $this->metadata_model->get_options_provinces($filter_data['filter_province']);
				}
			}

			if (isset($filter_data['filter_municipality'])) {
				if ($filter_data['filter_municipality']!=='') {
					$data['filtered_municipality_option_data'] = $this->metadata_model->get_options_municipalities($filter_data['filter_province'],$filter_data['filter_municipality']);
				}
			}

			if (isset($filter_data['filter_barangay'])) {
				if ($filter_data['filter_barangay']!=='') {
					$data['filtered_barangay_option_data'] = $this->metadata_model->get_options_barangay($filter_data['filter_municipality'],$filter_data['filter_barangay']);
				}
			}

			if (isset($filter_data['filter_barangay'])) {
				if ($filter_data['filter_barangay']!=='') {
					$data['filtered_barangay_option_data'] = $this->metadata_model->get_options_barangay($filter_data['filter_municipality'],$filter_data['filter_barangay']);
				}
			}
			

		}

		// print("<pre>");
		// print_r($data);
		// print("</pre>");


		$data['user_id'] = $this->session->userdata('user_id');
		$data['user_fullname'] = $this->session->userdata('user_fullname');
		$this->load->view('templates/header');
		$this->load->view('interventions',$data);
		$this->load->view('interv_list_modal');
		$this->load->view('interv_list_editor_modal');
		$this->load->view('templates/footer');

	}

    public function getHouseholdInfo(){
    	$this->load->model('SWDI_model');
    	$hh_id = $this->input->post('hhid');
    	$data = $this->SWDI_model->get_swdi_data($hh_id);
    	print_r(json_encode($data[0]));

    }

    public function get_intervention_list(){
    	$this->load->model('Intervention_model');
		$hhid = $this->input->post('hhid');
	   	$interv_data = $this->Intervention_model->get_interventions($hhid);
    	$data['interv_list'] = array();
	    foreach ($interv_data as $r) {
	        $interv_id = sprintf('%08d', $r->interv_id);
	        $subject = $r->subject;
	        $program = $r->program;
	        $subcomp = $r->subcomp;
	        $date_conducted = $r->date_conducted;
	        $ctrlno = $r->ctrlno;

			echo "
			        <tr>
			          <td>$r->ctrlno</td>
			          <td>$r->program</td>
			          <td>$r->subcomp</td>
			          <td>$r->subject</td>
			          <td>$r->date_conducted</td>
			          <td>
						<button type=\"button\" class=\"btn btn-info btn-sm\" aria-label=\"Left Align\" data-toggle=\"modal\" data-target=\"#interv_list_editor_modal\" hhid=\"$hhid\" interv_id=\"$interv_id\" id=btn_interv_list_editor_open ctrlno=$r->ctrlno>
						  <span class=\"fa fa-folder-open-o\" aria-hidden=\"true\"></span>
						</button>
						<button type=\"button\" class=\"btn btn-danger btn-sm\" aria-label=\"Left Align\"  id=\"btn_delete_intervention\" interv_id=\"$interv_id\" >
						  <span class=\"fa fa-trash-o\" aria-hidden=\"true\"></span>
						</button>

					  </td>
			        </tr>


				";
	    }
    }

    public function getInterventionDetails(){
    	$this->load->model('Intervention_model');
    	$interv_id = $this->input->post('interv_id');
    	$data = $this->Intervention_model->get_intervention_detail($interv_id);
    	print_r(json_encode($data[0]));
    }

    public function intervention_save(){
    	$this->load->model('Intervention_model');
    	$post_data = $this->input->post();    
    	$interventions_data = $this->Intervention_model->save_intervention($post_data);
    	$HOUSEHOLD_ID = $this->input->post('HOUSEHOLD_ID');   
    	print_r($interventions_data);
    	$inner_html = "";
		foreach ($interventions_data as $intervention){
			$formatted_interv_id = sprintf('%08d', $intervention->interv_id);
			$inner_html .= "
			<tr>
				<td>".$intervention->ctrlno."</td>
				<td>".$intervention->subject."</td>
				<td>".$intervention->program."</td>
				<td>".$intervention->subcomp."</td>
				<td>".$intervention->date_conducted."</td>
				<td>
					<button type=\"button\" 
							class=\"btn btn-info btn-sm\" 
							aria-label=\"Left Align\" 
							data-toggle=\"modal\" data-target=\"#interv_list_editor_modal\" 
							hhid=\"$HOUSEHOLD_ID\" 
							interv_id=\"$formatted_interv_id\" 
							id=\"btn_interv_list_editor_open\" 
							ctrlno=\"".$intervention->ctrlno."\">
					  <span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"></span>
					</button>
					<button type=\"button\" class=\"btn btn-danger btn-sm\" aria-label=\"Left Align\" id=\"btn_delete_intervention\" interv_id=\"$formatted_interv_id\">
					  <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
					</button>

				</td>
			</tr>
			";

		}

    	print($inner_html);
    }

    public function intervention_delete(){
    	$this->load->model('Intervention_model');
    	$post_data = $this->input->post();    
    	$result = $this->Intervention_model->delete_intervention($post_data);
    	return print_r(json_encode($result));
    }
}
