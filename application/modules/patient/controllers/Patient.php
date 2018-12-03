<?php
class Patient extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$model_list = [
			'secretary/schedule' => 'MSchedule',
			'secretary/database' => 'MDatabase',
			'patient/profile' => 'MProfile',
		];

		$this->load->model($model_list);

	}


	public function profile($patient_id = 0)
	{
		if($patient_id < 1)
		{
			echo "You are not allowed here. :)";
		}
		else
		{
			$data['patients'] = $this->MDatabase->retrieve_one('tblpatient',$patient_id);

			$this->load->view('patient/profile', $data);
		}
		
	}

	public function physical_profile($patient_id = 0)
	{
		if($patient_id < 1)
		{
			echo "You are not allowed here. :)";
		}
		else
		{
			$data['physical_profiles'] = $this->MProfile->retrieve_physical_profile($patient_id);

			$this->load->view('patient/physical_profile',$data);
		}
		
	}
}