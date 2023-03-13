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
            , swdi_data.ES1
            , swdi_data.ES2
            , swdi_data.ES3
            , swdi_data.ES4
            , swdi_data.HCS1
            , swdi_data.HCS2
            , swdi_data.NC1
            , swdi_data.NC2
            , swdi_data.WCS1
            , swdi_data.WCS2
            , swdi_data.WCS3
            , swdi_data.HC1
            , swdi_data.HC2
            , swdi_data.HC3
            , swdi_data.HC4
            , swdi_data.EC1
            , swdi_data.EC2
            , swdi_data.RP1
            , swdi_data.RP2
            , swdi_data.RP3
            , swdi_data.FA1
            , swdi_data.FA2
            , swdi_data.FA3
            , swdi_data.SocAdeq
            , swdi_data.EconSuff
            , swdi_data.SWDI_Score
            , swdi_data.LOWB'
        );
        $this->db->from('pppp_grantee');
        $this->db->join('swdi_data', 'pppp_grantee.HOUSEHOLD_ID = swdi_data.Household_ID', 'left');
        $this->db->where('pppp_grantee.HOUSEHOLD_ID', $household_id);
        $query = $this->db->get();
        return $query->result();
    }
        
}

