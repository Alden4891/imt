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
		if ($this->input->post('apply_filter') !== null) {
			$filter_data = $this->input->post();
		    $data['interventions'] = $this->Grantee_model->get_grantee_listings($filter_data);
		}

		$this->load->view('templates/header');
		$this->load->view('interventions',$data);
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
						<button type=\"button\" class=\"btn btn-info btn-xs\" aria-label=\"Left Align\" data-toggle=\"modal\" data-target=\"#interv_list_editor_modal\" hhid=\"$hhid\" interv_id=\"$interv_id\" id=btn_interv_list_editor_open ctrlno=$r->ctrlno>
						  <span class=\"fa fa-folder-open-o\" aria-hidden=\"true\"></span>
						</button>
						<button type=\"button\" class=\"btn btn-danger btn-xs\" aria-label=\"Left Align\"  id=\"btn_delete_intervention\" interv_id=\"$interv_id\" >
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
							class=\"btn btn-default btn-xs\" 
							aria-label=\"Left Align\" 
							data-toggle=\"modal\" data-target=\"#interv_list_editor_modal\" 
							hhid=\"$HOUSEHOLD_ID\" 
							interv_id=\"$formatted_interv_id\" 
							id=\"btn_interv_list_editor_open\" 
							ctrlno=\"".$intervention->ctrlno."\">
					  <span class=\"glyphicon glyphicon-folder-open\" aria-hidden=\"true\"></span>
					</button>
					<button type=\"button\" class=\"btn btn-danger btn-xs\" aria-label=\"Left Align\" id=\"btn_delete_intervention\" interv_id=\"$formatted_interv_id\" disabled>
					  <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
					</button>
				</td>
			</tr>
			";

		}

    	print($inner_html);
    }
}
