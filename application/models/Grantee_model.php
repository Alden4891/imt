<?php
class Grantee_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    

    //loads listing of grantees to be displayed in the encoding module.
    public function get_grantee_listings($filter_data,$limit=1000) {
        $this->db->select('pppp_grantee.HOUSEHOLD_ID, pppp_grantee.FIRST_NAME, pppp_grantee.MID_NAME, pppp_grantee.LAST_NAME, pppp_grantee.EXT_NAME, pppp_grantee.PROVINCE, pppp_grantee.MUNICIPALITY, pppp_grantee.BARANGAY, tbl_swdi.`SWDI_Score`, tbl_swdi.LOWB, COUNT(interventions.interv_id) AS INTERV_COUNT');
        $this->db->from('db_imt.pppp_grantee');
        $this->db->join('db_imt.tbl_swdi', 'pppp_grantee.HOUSEHOLD_ID = tbl_swdi.`Household_ID`', 'left');
        $this->db->join('db_imt.interventions', 'pppp_grantee.HOUSEHOLD_ID = interventions.HOUSEHOLD_ID', 'left');

        if (trim($filter_data['filter_municipality'])  !== '' && trim($filter_data['filter_barangay'])  !== '') {
            $this->db->where('pppp_grantee.MUNICIPALITY', $filter_data['filter_municipality']);
            $this->db->where('pppp_grantee.BARANGAY',  $filter_data['filter_barangay']);
        }

        if (trim($filter_data['filter_criteria'])  !== '') {
            $search_criteria = $filter_data['filter_criteria'];
            $this->db->where("(
                pppp_grantee.MID_NAME LIKE '%$search_criteria%' OR 
                pppp_grantee.FIRST_NAME LIKE '%$search_criteria%' OR 
                pppp_grantee.LAST_NAME LIKE '%$search_criteria%' OR
                pppp_grantee.HOUSEHOLD_ID LIKE '%$search_criteria%'
            )");
        }
        

        if (trim($filter_data['filter_lowb'])  !== '') {
            $this->db->where('tbl_swdi.LOWB', 'Level '.$filter_data['filter_lowb']); //e.g. 'Level 1'
        }

        $this->db->group_by('pppp_grantee.HOUSEHOLD_ID, pppp_grantee.FIRST_NAME, pppp_grantee.MID_NAME, pppp_grantee.LAST_NAME, pppp_grantee.EXT_NAME, pppp_grantee.PROVINCE, pppp_grantee.MUNICIPALITY, pppp_grantee.BARANGAY, tbl_swdi.`SWDI_Score`, tbl_swdi.LOWB');

        $this->db->limit($limit);
        return $this->db->get()->result();
    }
 
}

