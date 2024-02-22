<?php
class SWDI_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //loads swdi and interventions to modal
    public function get_swdi_data($household_id) {
        $this->db->select('
              tbl_pppp.hh_id as HOUSEHOLD_ID
            , CONCAT(tbl_pppp.FIRST_NAME," ", tbl_pppp.MIDdle_NAME, " ", tbl_pppp.LAST_NAME, " ", tbl_pppp.EXT_NAME) AS GRANTEE
            , tbl_pppp.SEX
            , tbl_pppp.AGE
            , tbl_pppp.REGION
            , tbl_pppp.PROVINCE
            , tbl_pppp.MUNICIPALITY
            , tbl_pppp.BIRTHDAY
            , tbl_pppp.BARANGAY
            , tbl_pppp.CLIENT_STATUS
            , tbl_pppp.IP_GROUP as IP_AFFILIATION
            , tbl_pppp.HH_SET AS `SET`
            , tbl_swdi.ES1
            , tbl_swdi.ES2
            , tbl_swdi.ES3
            , tbl_swdi.ES4
            , tbl_swdi.HCS1
            , tbl_swdi.HCS2
            , tbl_swdi.NC1
            , tbl_swdi.NC2
            , tbl_swdi.WCS1
            , tbl_swdi.WCS2
            , tbl_swdi.WCS3
            , tbl_swdi.HC1
            , tbl_swdi.HC2
            , tbl_swdi.HC3
            , tbl_swdi.HC4
            , tbl_swdi.EC1
            , tbl_swdi.EC2
            , tbl_swdi.RP1
            , tbl_swdi.RP2
            , tbl_swdi.RP3
            , tbl_swdi.FA1
            , tbl_swdi.FA2
            , tbl_swdi.FA3
            , tbl_swdi.SocAdeq
            , tbl_swdi.EconSuff
            , tbl_swdi.SWDI_Score
            , tbl_swdi.LOWB'
        );
        $this->db->from('tbl_pppp');
        $this->db->join('tbl_swdi', 'tbl_pppp.hh_id = tbl_swdi.Household_ID', 'left');
        $this->db->where('tbl_pppp.hh_id', $household_id);
        $query = $this->db->get();
        return $query->result();
    }
        
}

