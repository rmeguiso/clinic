<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller 
{

	 public function __construct()
	{
		parent::__construct();

		$model_list = [
		'doctor/schedule' => 'MSchedule',
		];

		$this->load->model($model_list);

		
	}


	public function index()
	{
		$this->load->helper('url');

		// only allow the doctor to access this page
		if($this->session->userdata('username') != 'doctor')
		{
			redirect('login');
		}

		$data['schedule'] = $this->MSchedule->show_all_schedule();
		$data['title'] = 'Queue';

		$this->load->view('doctor/index', $data);
	}




}
