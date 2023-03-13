<?php
class Dashboard_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //getDBRecentIntrvData
    public function get_latest_interventions() {
        $result = $this->db->select('interventions.interv_id, interventions.subject, interventions.details, users.fullname, interventions.date_conducted')
                          ->from('interventions')
                          ->join('users', 'interventions.encoded_by = users.user_id')
                          ->order_by('interventions.date_conducted', 'DESC')
                          ->limit(5)
                          ->get();

        $return_arr = array();
        foreach ($result->result_array() as $row) {
            $interv_id = $row['interv_id'];
            $subject = $row['subject'];
            $details = $row['details'];
            $fullname = $row['fullname'];
            $date_conducted = $row['date_conducted'];
            $return_arr[] = array($interv_id, $subject, $details, $fullname, $date_conducted);
        }
        return json_encode($return_arr);
    }

    //getDBComponentDataProgressBar
     public function get_interventions_by_component() {
        // Get total interventions
        $total_query = $this->db->select('0 AS comp_id, "total_interv" as comp_desc, COUNT(interv_id) AS value')
                              ->from('interventions')
                              ->get();
        $total_result = $total_query->result_array();

        // Get interventions by component
        $component_query = $this->db->select('lib_comp.comp_id, lib_comp.comp_desc, COUNT(interventions.interv_id) AS value')
                                    ->from('lib_comp')
                                    ->join('lib_subcomp', 'lib_comp.comp_id = lib_subcomp.comp_id')
                                    ->join('lib_programs', 'lib_programs.subcomp_id = lib_subcomp.subcomp_id')
                                    ->join('interventions', 'lib_programs.program_id = interventions.program_id', 'left')
                                    ->group_by('lib_comp.comp_desc')
                                    ->order_by('lib_comp.comp_id')
                                    ->get();
        $component_result = $component_query->result_array();

        // Merge results
        $interventions = array_merge($total_result, $component_result);
    
        $return_arr = array();
        foreach($interventions as $key => $val) {
            // print_r($val['comp_id']);
            $comp_id = $val['comp_id'];
            $comp_desc = $val['comp_desc'];
            $value = $val['value'];
            $return_arr[] = array($comp_id,$comp_desc,$value);
        }

        return json_encode($return_arr);
    }
 
    //getDBWidgetData
    public function get_interventions_by_subcomponent() {
        $subcomp_query = $this->db->select('lib_subcomp.subcomp_id, lib_subcomp.subcomp, COUNT(interventions.interv_id) AS value')
                                  ->from('lib_subcomp')
                                  ->join('lib_programs', 'lib_subcomp.subcomp_id = lib_programs.subcomp_id')
                                  ->join('interventions', 'interventions.program_id = lib_programs.program_id', 'left')
                                  ->group_by('lib_subcomp.subcomp_id')
                                  ->get_compiled_select();

        $query = $this->db->query("
            SELECT subcomp_id, subcomp, value
            FROM (
                SELECT 0 AS subcomp_id, 'total_interv' AS subcomp, COUNT(*) AS value
                FROM interventions
            ) total_interv
            UNION
            $subcomp_query
            ORDER BY subcomp_id
        ");

        $interventions = $query->result_array();
        
        $return_arr = array();
        foreach($interventions as $key => $val) {
            $subcomp_id = $val['subcomp_id'];
            $subcomp = $val['subcomp'];
            $value = $val['value'];
            $return_arr[] = array($subcomp_id,$subcomp,$value);
        }
        return json_encode($return_arr);
    }


    //getDBIntervActivitiesData
    public function get_intervention_counts_by_month() {
        $return_arr = array();
        
        $query = $this->db->query("
            SELECT 
                YEAR(date_conducted) AS P_YEAR, 
                MONTH(date_conducted) AS P_MONTH, 
                COUNT(interv_id) AS INTCOUNT 
            FROM interventions
            WHERE YEAR(date_conducted) BETWEEN YEAR(NOW())-5 AND YEAR(NOW())
            GROUP BY CONCAT(YEAR(date_conducted),'-', MONTH(date_conducted),'-01')
            ORDER BY 1,2;
        ");

        foreach ($query->result_array() as $row) {
            $P_YEAR = $row['P_YEAR'];
            $P_MONTH = $row['P_MONTH'];
            $INTCOUNT = $row['INTCOUNT'];
            $return_arr[] = array($P_YEAR,$P_MONTH,$INTCOUNT);
        }

        return json_encode($return_arr);
    }
    
}

