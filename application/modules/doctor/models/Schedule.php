<?php

class Schedule extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


        public function show_all_schedule()
        {
        	$this->db->select('*');    
          $this->db->from('tblpatient');
          $this->db->join('tblschedule', 'tblpatient.id = tblschedule.patient_id');
       
          $query = $this->db->get();

          return $query->result_array(); 
        }
}