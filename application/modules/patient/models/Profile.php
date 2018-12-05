<?php 
/**
 * The model for patient's profile
 */
class Profile extends CI_Model
{
	function retrieve_physical_profile($patient_id)
	{
		$this->db->select('*');
		$this->db->from('tblphysical_profile');
		$this->db->where('Patient_ID', $patient_id);
		$query = $this->db->get();

		return $query->result_array();
	}

	function retrieve_history($patient_id)
	{
		$this->db->select('*');
		$this->db->from('tblhistory');
		$this->db->where('Patient_ID', $patient_id);
		$query = $this->db->get();

		return $query->result_array();
	}
	
}