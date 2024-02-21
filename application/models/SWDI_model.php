<?php
class SWDI_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //loads swdi and interventions to modal
    public function get_swdi_data($household_id) {
        $this->db->select('
              pppp_grantee.HOUSEHOLD_ID
            , CONCAT(pppp_grantee.FIRST_NAME," ", pppp_grantee.MID_NAME, " ", pppp_grantee.LAST_NAME, " ", pppp_grantee.EXT_NAME) AS GRANTEE
            , pppp_grantee.SEX
            , pppp_grantee.AGE
            , pppp_grantee.REGION
            , pppp_grantee.PROVINCE
            , pppp_grantee.MUNICIPALITY
            , pppp_grantee.BIRTHDAY
            , pppp_grantee.BARANGAY
            , pppp_grantee.CLIENT_STATUS
            , pppp_grantee.IP_AFFILIATION
            , CONCAT(pppp_grantee.HH_SET, pppp_grantee.SET_GROUP) AS `SET`
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
        $this->db->from('pppp_grantee');
        $this->db->join('tbl_swdi', 'pppp_grantee.HOUSEHOLD_ID = tbl_swdi.Household_ID', 'left');
        $this->db->where('pppp_grantee.HOUSEHOLD_ID', $household_id);
        $query = $this->db->get();
        return $query->result();
    }
        
}

