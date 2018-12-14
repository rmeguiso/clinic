<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secretary extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$model_list = [
			'secretary/schedule' => 'MSchedule',
			'secretary/database' => 'MDatabase',
		];

		$this->load->model($model_list);

		
	}


	public function index()
	{
		$this->load->helper('url');

		// only allow the secretary to access this page
		if($this->session->userdata('username') != 'secretary')
		{
			redirect('login');
		} 

		$data['patients'] = $this->MSchedule->retrieve_patient_schedule();
		$data['total_patients'] = $this->MDatabase->total_number('tblpatient');
		$data['total_doctors'] = $this->MDatabase->total_number('tbldoctor');
		$data['latest_patients'] = $this->MDatabase->last_ten('tblpatient');

		$this->load->view('secretary/index', $data);
	}

	public function dashboard()
	{
		
		$data['patients'] = $this->MSchedule->retrieve_patient_schedule();
		$data['total_patients'] = $this->MDatabase->total_number('tblpatient');
		$data['total_doctors'] = $this->MDatabase->total_number('tbldoctor');
		$data['latest_patients'] = $this->MDatabase->last_ten('tblpatient');
		$this->load->view('secretary/dashboard', $data);
	}

	public function logout()
	{
		$this->load->helper('form');
		$this->session->unset_userdata('username');
		redirect('login');
	}

	public function patient_new()
	{
		$this->load->view('secretary/patient_new');
	}

	public function add_patient()
	{
		$data = array(
			'FName' => $this->input->post('first_name'),
			'LName'=>$this->input->post('last_name'),
			'Bday' => $this->input->post('birthday'),
			'Gender' => $this->input->post('gender'),
			'Address' => $this->input->post('address'),
			'CS' => $this->input->post('civil_status')
		);

		
		$this->MDatabase->insert('tblpatient',$data);
	}

	public function add_doctor()
	{
		$data = array(
			'FName' => $this->input->post('first_name'),
			'LName'=>$this->input->post('last_name'),
			'Specialization' => $this->input->post('specialization'),
			
		);

		
		$this->MDatabase->insert('tbldoctor',$data);
	}

	public function patient_medicine()
	{
		$data["medicines"] = $this->MDatabase->retrieve_all("tblpatientmedicine");
		$this->load->view('secretary/patient_medicine', $data);
	}



	public function patient_list()
	{
		$data["patients"] = $this->MDatabase->retrieve_all("tblpatient");
		$this->load->view('secretary/patient_list', $data);
	}

	

	public function search_for_patient()
	{
		
		$table_name = 'tblpatient';
		$search_key =  $this->input->post('search_field');

		$data['patients'] = $this->MDatabase->search_patient_or_doctor($table_name,$search_key);
	

		if ($data['patients']) {
			$this->load->view('secretary/patient_search_table', $data);
		} else {

			echo "No results";
		}

	}

	public function search_for_doctor()
	{
		$table_name = 'tbldoctor';
		$search_key =  $this->input->post('search_field');

		$data['doctors'] = $this->MDatabase->search_patient_or_doctor($table_name,$search_key);
		
		if ($data['doctors']) {
			$this->load->view('secretary/doctor_search_table', $data);
		} else {

			echo "No results";
		}
	}

	public function search_for_diagnosis()
	{

		$table_name = 'tbldiagnosis';
		$search_key =  $this->input->post('search_field');

		$data['diagnosiss'] = $this->MDatabase->searchdiagnosis($table_name,$search_key);
		
		
		$this->load->view('secretary/search_table', $data);
		
	}


	public function add_to_queue()
	{
		$queue_no = $this->MDatabase->generate_queue_number();

		$data = array(
			'Date'=> date("Y-m-d"),
			'Patient_ID'=> $this->input->post('patient_id'),
			'Queue_no'=> $queue_no,
			'Remarks'=> $this->input->post('remarks'),
		);

		$this->MDatabase->insert('tblschedule',$data);
	}

	public function delete_queue($queue_no)
	{
		$this->MDatabase->delete_queue($queue_no);
	}

	public function doctor_new()
	{
		$this->load->view('secretary/doctor_new');
	}

	public function doctor_list()
	{
		$data["doctors"] = $this->MDatabase->retrieve_all("tbldoctor");
		$this->load->view('secretary/doctor_list', $data);
	}

	public function diagnosis_list()
	{
		$data["diagnosiss"] = $this->MDatabase->retrieve_all("tbldiagnosis");
		$this->load->view('secretary/diagnosis_list', $data);
	}
	public function patient_diagnosis()
	{
		$data["diagnosiss"] = $this->MDatabase->retrieve_all("tblpatientdiagnosis");
		$this->load->view('secretary/patient_diagnosis', $data);
	}

	public function medicine_new()
	{
		$this->load->view('secretary/medicine_new');
	}

	public function add_medicine()
	{
		$data = array(
			'Medicine' => $this->input->post('medicine_name'),
			'Description' => $this->input->post('description'),
			
		);

		$this->MDatabase->insert('tblmedicine',$data);
	}
	
	public function medicine_list()
	{
		$data["medicines"] = $this->MDatabase->retrieve_all("tblmedicine");
		$this->load->view('secretary/medicine_list', $data);
	}

	public function patient_profile()
	{
		
		$this->load->view('secretary/patient_profile', $data);
	}
}
