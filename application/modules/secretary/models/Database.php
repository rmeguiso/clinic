<?php

class Database extends CI_Model  {

	

	public function insert($table_name,$data)
	{
		
		$this->db->insert($table_name, $data);
	}

	public function delete_queue($queue_no)
	{
		$this->db->delete('tblschedule', array('Queue_no' => $queue_no));
	}

	public function total_number($table_name)
	{
		return $this->db->count_all($table_name);
	}

	public function last_ten($table_name)
	{
		
		$this->db->order_by("ID", "desc");
		$this->db->limit(10);
		$query = $this->db->get($table_name);

		return $query->result_array();
	}

	public function retrieve_all($table_name)
	{
		$query = $this->db->get($table_name); 

		return $query->result_array();
	}

	public function retrieve_one($table_name,$id)
	{
		$this->db->select('*');
		$this->db->from($table_name);
		$this->db->where('ID', $id);
		$query = $this->db->get();

		return $query->result_array();
		
	}


	public function search_patient_or_doctor($table_name,$search_key)
	{
 		$this->db->like('FName',$search_key);
 		$this->db->or_like('LName',$search_key);
        $query = $this->db->get($table_name);
        
        return $query->result_array();
        

	}

	public function generate_queue_number()
	{
		$this->db->select_max('Queue_no');
		$query = $this->db->get('tblschedule');
		$last_number = $query->row();
		$new_number = $last_number->Queue_no += 1;

		return $new_number;
	}


	public function searchdiagnosis($table_name,$search_key)
	{
		
 		$this->db->like('Diagnosis',$search_key);
 		$this->db->or_like('Description',$search_key);
        $query  =   $this->db->get($table_name);
        return $query->result_array();

	}



}