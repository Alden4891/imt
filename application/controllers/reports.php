<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reports extends CI_Controller {

	private $a_coverage;

    public function __construct() {
        parent::__construct();
        $this->a_coverage = "no-data";
    }
    
	public function index()
	{
		$this->load->model('Grantee_model');
		// $data['interventions']=array();
		if ($this->input->post('apply_filter') !== null) {
			$filter_data = $this->input->post();
		    // $data['interventions'] = $this->Grantee_model->get_grantee_listings($filter_data);
		}
		$data['SCOPE_TAG'] = $this->session->userdata('SCOPE_TAG');
		$data['SCOPE'] = $this->session->userdata('SCOPE');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['user_fullname'] = $this->session->userdata('user_fullname');

		$this->load->view('templates/header');
		$this->load->view('reports',$data);
		$this->load->view('templates/footer');
	}

	public function get_municipalities(){
		$selected_province = $this->input->post('province');
		
		$municipalities = $this->db->distinct()
		->select('MUNICIPALITY')
		->where(array('PROVINCE' => $selected_province))
		->order_by('1 ASC')
		->get('lib_address')->result_array();		

		print("<option value='-1' selected>Select</option>");
		foreach ($municipalities as $municipality) {
		    print("<option>{$municipality['MUNICIPALITY']}</option>");
		}	
	}

	public function get_barangays(){
		$selected_municipality = $this->input->post('municipality');
		
		$barangays = $this->db->distinct()
		->select('BARANGAY')
		->where(array('MUNICIPALITY' => $selected_municipality))
		->order_by('1 ASC')
		->get('lib_address')->result_array();		

		print("<option value='-1' selected>Select</option>");
		foreach ($barangays as $barangay) {
		    print("<option>{$barangay['BARANGAY']}</option>");
		}	
	}

	public function download(){
		// ./tbs/index.php
	
		// $optionRegion = isset($_REQUEST['optionRegion'])?$_REQUEST['optionRegion']:'XII';
		// $optionProvince = isset($_REQUEST['optionProvince'])?$_REQUEST['optionProvince']:-1;
		// $optionMunicipality = isset($_REQUEST['optionMunicipality'])?$_REQUEST['optionMunicipality']:-1;
		// $optionBarangay = isset($_REQUEST['optionBarangay'])?$_REQUEST['optionBarangay']:-1;
		// $optionReportType = isset($_REQUEST['optionReportType'])?$_REQUEST['optionReportType']:-1;

        $optionRegion = $this->input->post('optionRegion') ? $this->input->post('optionRegion') : 'XII';
        $optionProvince = $this->input->post('optionProvince') ? $this->input->post('optionProvince') : -1;
        $optionMunicipality = $this->input->post('optionMunicipality') ? $this->input->post('optionMunicipality') : -1;
        $optionBarangay = $this->input->post('optionBarangay') ? $this->input->post('optionBarangay') : -1;
        $optionReportType = $this->input->post('optionReportType') ? $this->input->post('optionReportType') : -1;

		$filter = '1=1';
		$a_coverage = "";

		if ($optionBarangay != -1) {
			$filter = "`swdi`.`psgc_city`='$optionMunicipality' and `swdi`.`psgc_brgy`='$optionBarangay'";
			$a_coverage = "Brgy. $optionBarangay, $optionMunicipality, $optionProvince";
		}elseif ($optionMunicipality != -1){
			$filter = "`swdi`.`psgc_city`='$optionMunicipality'";
			$a_coverage = "$optionMunicipality, $optionProvince";
		}elseif ($optionProvince != -1){
			$filter = "`swdi`.`psgc_province`='$optionProvince'";
			$a_coverage = "$optionProvince";
		}else{
			//load entire records of the selected region
			$filter = "`swdi`.`psgc_region`='$optionRegion'";
			$a_coverage = "Region $optionRegion";
		}
		$template = "";
		switch ($optionReportType) {
		    case "imt_es":
		        $template = "imt_es";
		        break;
		    case "imt_sa":
		        $template = "imt_sa";
		        break;
		    case "imt_internal":
		        $template = "imt_int";
		        break;
		    case "imt_external1":
		        $template = "imt_ext1";
		        break;
		    case "imt_external2":
		        $template = "imt_ext2";
		        break;
		    case "imt_masterlist":
		        $template = "imt_masterlist";
		        break;
		    // case "imt_sa_ml":
		    //     $template = "imt_sa_ml";
		    //     break;
		    // case "imt_internal_ml":
		    //     $template = "imt_int_ml";
		    //     break;
		    // case "imt_external1_ml":
		    //     $template = "imt_ext1_ml";
		    //     break;
		    // case "imt_external2_ml":
		    //     $template = "imt_ext2_ml";
		    //     break;
		}

		$this->load->model('Report_model');
		$this->Report_model->generate($template,$filter,$a_coverage);


		// if ($optionReportType == 'imt_es')       include 'imt_es.php';
		// if ($optionReportType == 'imt_sa')       include 'imt_sa.php';
		// if ($optionReportType == 'imt_internal') include 'imt_int.php';
		// if ($optionReportType == 'imt_external1') include 'imt_ext1.php';
		// if ($optionReportType == 'imt_external2') include 'imt_ext2.php';
		// if ($optionReportType == 'imt_masterlist') include 'imt_masterlist.php';

		// if ($optionReportType == 'imt_sa_ml')       include 'imt_sa_ml.php';
		// if ($optionReportType == 'imt_internal_ml') include 'imt_int_ml.php';
		// if ($optionReportType == 'imt_external1_ml') include 'imt_ext1_ml.php';
		// if ($optionReportType == 'imt_external2_ml') include 'imt_ext2_ml.php';



	}



}
