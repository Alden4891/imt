<?php
class Grantee_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //loads listing of grantees to be displayed in the encoding module.
    public function get_grantee_listings($filter_data,$limit=1000) {

      $this->db->select('
        `tbl_swdi`.`Household_ID` AS `HOUSEHOLD_ID`,
        `tbl_swdi`.`FIRSTNAME` AS `FIRST_NAME`,
        `tbl_swdi`.`MIDDLENAME` AS `MID_NAME`,
        `tbl_swdi`.`LASTNAME` AS `LAST_NAME`,
        `tbl_swdi`.`PROV_NAME` AS `PROVINCE`,
        `tbl_swdi`.`CITY_NAME` AS `MUNICIPALITY`,
        `tbl_swdi`.`BRGY_NAME` AS `BARANGAY`,
        `tbl_swdi`.`SWDI_Score`,
        `tbl_swdi`.`LOWB`,
         COUNT(`interventions`.`interv_id`) AS `INTERV_COUNT`');
    $this->db->from('`db_imt`.`tbl_swdi`');
    $this->db->join('`db_imt`.`interventions`', '(`tbl_swdi`.`Household_ID` = `interventions`.`HOUSEHOLD_ID`)');
    $this->db->group_start();
    //--------------------------------------------------------------------
        $this->db->where('`interventions`.`is_deleted`', 0); 

        // if (trim($filter_data['filter_municipality'])  !== '' && trim($filter_data['filter_barangay'])  !== '') {
        //     $this->db->where('`tbl_swdi`.`CITY_NAME`', $filter_data['filter_municipality']);
        //     $this->db->where('`tbl_swdi`.`BRGY_NAME`',  $filter_data['filter_barangay']);
        // }

        if (isset($filter_data['filter_province'])) {
            if (trim($filter_data['filter_province']) !=='') {
                 $this->db->where('`tbl_swdi`.`PROV_NAME`', $filter_data['filter_province']);
            }
        }

        if (isset($filter_data['filter_municipality'])) {
            if (trim($filter_data['filter_municipality']) !=='') {
                 $this->db->where('`tbl_swdi`.`CITY_NAME`', $filter_data['filter_municipality']);
            }
        }

        if (isset($filter_data['filter_barangay'])) {
            if (trim($filter_data['filter_barangay']) !=='') {
                $this->db->where('`tbl_swdi`.`BRGY_NAME`',  $filter_data['filter_barangay']);
            }
        }
        if (isset($filter_data['filter_barangay'])) {
            if (trim($filter_data['filter_criteria'])  !== '') {
                $search_criteria = $filter_data['filter_criteria'];
                $this->db->where("(
                    `tbl_swdi`.`MIDDLENAME` LIKE '%$search_criteria%' OR 
                    `tbl_swdi`.`FIRSTNAME` LIKE '%$search_criteria%' OR 
                    `tbl_swdi`.`LASTNAME` LIKE '%$search_criteria%' OR
                    `tbl_swdi`.`Household_ID` LIKE '%$search_criteria%'
                )");
            }
        }
        if (isset($filter_data['filter_lowb'])) {
            if (trim($filter_data['filter_lowb'])  !== '') {
                $this->db->where('tbl_swdi.LOWB', $filter_data['filter_lowb']); //e.g. 'Level 1'
            }

        }

    //--------------------------------------------------------------------
    $this->db->group_end();
    $this->db->group_by(array('`HOUSEHOLD_ID`', '`FIRST_NAME`', '`MID_NAME`', '`LAST_NAME`', '`PROVINCE`', '`MUNICIPALITY`', '`BARANGAY`', '`tbl_swdi`.`SWDI_Score`', '`tbl_swdi`.`LOWB`'));
    $this->db->order_by('`interventions`.`date_encoded` ASC');
    // $this->db->get();      
    // print($this->db->last_query());
    return $this->db->get()->result();
    }

 
}

