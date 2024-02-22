<?php
class Grantee_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    

    //loads listing of grantees to be displayed in the encoding module.
    public function get_grantee_listings($filter_data,$limit=1000) {
        $this->db->select('
              tbl_pppp.hh_id as HOUSEHOLD_ID
            , tbl_pppp.FIRST_NAME
            , tbl_pppp.middle_name as MID_NAME
            , tbl_pppp.LAST_NAME
            , tbl_pppp.EXT_NAME
            , tbl_pppp.PROVINCE
            , tbl_pppp.MUNICIPALITY
            , tbl_pppp.BARANGAY
            , tbl_swdi.`SWDI_Score`
            , tbl_swdi.LOWB
            , COUNT(interventions.interv_id) AS INTERV_COUNT'
        );
        $this->db->from('db_imt.tbl_pppp');
        $this->db->join('db_imt.tbl_swdi', 'tbl_pppp.hh_id = tbl_swdi.`Household_ID`', 'left');
        $this->db->join('db_imt.interventions', 'tbl_pppp.hh_id = interventions.HOUSEHOLD_ID', 'left');

        if (trim($filter_data['filter_municipality'])  !== '' && trim($filter_data['filter_barangay'])  !== '') {
            $this->db->where('tbl_pppp.MUNICIPALITY', $filter_data['filter_municipality']);
            $this->db->where('tbl_pppp.BARANGAY',  $filter_data['filter_barangay']);
        }

        if (trim($filter_data['filter_criteria'])  !== '') {
            $search_criteria = $filter_data['filter_criteria'];
            $this->db->where("(
                tbl_pppp.middle_name LIKE '%$search_criteria%' OR 
                tbl_pppp.FIRST_NAME LIKE '%$search_criteria%' OR 
                tbl_pppp.LAST_NAME LIKE '%$search_criteria%' OR
                tbl_pppp.hh_id LIKE '%$search_criteria%'
            )");
        }
        

        if (trim($filter_data['filter_lowb'])  !== '') {
            $this->db->where('tbl_swdi.LOWB', 'Level '.$filter_data['filter_lowb']); //e.g. 'Level 1'
        }

        $this->db->group_by('tbl_pppp.hh_id, tbl_pppp.FIRST_NAME, tbl_pppp.middle_name, tbl_pppp.LAST_NAME, tbl_pppp.EXT_NAME, tbl_pppp.PROVINCE, tbl_pppp.MUNICIPALITY, tbl_pppp.BARANGAY, tbl_swdi.`SWDI_Score`, tbl_swdi.LOWB');

        $this->db->limit($limit);
        return $this->db->get()->result();
    }
 
}

