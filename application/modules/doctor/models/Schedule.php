<?php

class Schedule extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


        public function show_all_schedule()
        {
        	$query = $this->db->get('tblschedule');

        	return $query->result_array();
        }
}