<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
    
	
    public function __construct() {
        parent::__construct();
        $this->load->model('Dashboard_model');
    }

	//[["2018","8","1"],["2019","10","1"],["2019","11","1"]]
	public function getDBIntervActivitiesData(){
		$result = $this->Dashboard_model->get_intervention_counts_by_month();
		print($result);
	}   

	public function getDBRecentIntrvData(){
		$result = $this->Dashboard_model->get_latest_interventions();
		print($result);
	}

	public function getDBComponentDataProgressBar(){
		$result = $this->Dashboard_model->get_interventions_by_component();
		print($result);		
	}

	public function getDBWidgetData(){
		$result = $this->Dashboard_model->get_interventions_by_subcomponent();
		print($result);

	}

}
