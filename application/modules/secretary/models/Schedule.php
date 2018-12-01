<?php

class Schedule extends CI_Model {

        
    public function retrieve_patient_schedule()
    {
       $this->db->select('*');    
       $this->db->from('tblpatient');
       $this->db->join('tblschedule', 'tblpatient.id = tblschedule.patient_id');
       
       $query = $this->db->get();

       return $query->result_array(); 
   }

   
}