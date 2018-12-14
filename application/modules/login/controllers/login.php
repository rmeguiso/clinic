<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$model_list = [
			'login/database' => 'MDatabase',
		];

		$this->load->model($model_list);
	}


	public function index()
	{
		$this->load->helper('form');
		

		if (empty($this->session->userdata('username'))) {
			
			$this->load->view('index');
		}
		else
		{
			// redirect dynamically based on username
			// example if username = 'secretary', then redirect('secretary')
			redirect($this->session->userdata('username'));
		}
	}

	public function login_user()
	{

	// load template helpers	
		$this->load->helper('url');
		$this->load->helper('form');
		

		// protect from xss attacks
	$login = $this->MDatabase->login_user($this->input->post('username',TRUE), $this->input->post('password',TRUE) );
	$login = json_decode($login);
	if($login->success)
	{
		if($login->username === 'secretary')
			redirect("secretary/");
		else
			redirect("doctor/");
	}
	else
		redirect("login/");

/* captcha */
// 		$post_data = [
// 	'secret' => "57824f348b7903f7b16fea5d976f258d0a494034f514", // <- Your secret key
// 	'token' => $this->input->post('CRLT-captcha-token'),
// 	'hashes' => 256
// ];

// $post_context = stream_context_create([
// 	'http' => [
// 		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
// 		'method'  => 'POST',
// 		'content' => http_build_query($post_data)
// 	]
// ]);

// $url = 'https://api.crypto-loot.com/token/verify';
// $response = json_decode(file_get_contents($url, false, $post_context));

// if ($response && $response->success=== "true") {
// 	// All good. Token verified!

// 	// protect from xss attacks
// 	$login = $this->MDatabase->login_user($this->input->post('username',TRUE), $this->input->post('password',TRUE) );

// 	if($login)
// 		redirect("secretary/");
// 	else
// 		redirect("login/");
// }
// else
// {
// 	echo "invalid token";
// }
}

}
