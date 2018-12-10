<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	 public function __construct()
	{
		parent::__construct();

		$model_list = [
		//'doctor/schedule' => 'MSchedule',
		];

		$this->load->model($model_list);

		
	}


	public function index()
	{
		
		$this->load->helper('form');
		$this->load->view('index');
		
		
	}

	public function submit()
	{
		$this->load->helper('url');
		

		 if(!empty($_SERVER['HTTP_REFERER'])){
				redirect($_SERVER['HTTP_REFERER']);
			} else {
   				// add here the default url for example dashboard url
   				redirect('http://google.com');
			}
	}




}
