<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intervention_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
        
    public function get_interventions($household_id) {
        $this->db->select('i.interv_id, i.subject, p.program, s.subcomp, i.date_conducted, CONCAT(LPAD(c.comp_id,2,0),LPAD(s.subcomp_id,2,0), LPAD(p.program_id,2,0), LPAD(i.interv_id,2,0)) AS ctrlno');
        $this->db->from('interventions i');
        $this->db->join('lib_programs p', 'i.program_id = p.program_id');
        $this->db->join('lib_subcomp s', 's.subcomp_id = p.subcomp_id');
        $this->db->join('lib_comp c', 'c.comp_id = s.comp_id');
        $this->db->where('i.HOUSEHOLD_ID', $household_id);
        $this->db->where('i.is_deleted', 0);
        $this->db->order_by('i.date_conducted', 'DESC');
        $query = $this->db->get();

        return $query->result();
    }

    public function get_intervention_detail($interv_id) {
        $this->db->select('subject, details, date_conducted, yds_child_count, program_id, HOUSEHOLD_ID');
        $this->db->from('interventions');
        $this->db->where('interv_id', $interv_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function save_intervention($data){
        extract($data);
        if ($interv_id == 0) {
            // insert intervention
            $this->db->set('subject', $subject);
            $this->db->set('details', $details);
            $this->db->set('date_conducted', $date_conducted);
            $this->db->set('yds_child_count', $yds_child_count);
            $this->db->set('program_id', $program_id);
            $this->db->set('HOUSEHOLD_ID', $HOUSEHOLD_ID);
            $this->db->set('encoded_by', $user_id);
            $this->db->set('date_encoded', 'now()', false);
            $this->db->set('uid', 'uuid()', false);
            $this->db->insert('interventions');
        } else {
            // update intervention
            $this->db->set('subject', $subject);
            $this->db->set('details', $details);
            $this->db->set('date_conducted', $date_conducted);
            $this->db->set('yds_child_count', $yds_child_count);
            $this->db->set('program_id', $program_id);
            $this->db->set('HOUSEHOLD_ID', $HOUSEHOLD_ID);
            $this->db->set('modified_by', $user_id);
            $this->db->set('date_modified', 'now()', false);
            $this->db->where('interv_id', $interv_id);
            $this->db->update('interventions');
        }

        if ($this->db->affected_rows() > 0) {
            // identify scope of m;/cl coverage
            $this->db->set('u.scope', 's.psgc_city');
            $this->db->from('users u');
            $this->db->join('swdi s', 's.HOUSEHOLD_ID = '.$HOUSEHOLD_ID);
            $this->db->where('u.user_id', $user_id);
            $this->db->where('u.scope', 'XII');
            $this->db->where('u.scope_tag', 0);
            $this->db->update();

            // display result if success
            return $this->get_interventions($HOUSEHOLD_ID);
        }
    }

    public function delete_intervention($data) {
        extract($data);
        $this->db->where('INTERV_ID', $interv_id)
        ->set('is_deleted', 1)
        ->set('date_deleted', 'NOW()', FALSE)
        ->set('deleted_by', $user_id)
        ->update('interventions');
        return array("result"=>1);
    }

}



