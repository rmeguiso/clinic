<?php 

class Database extends CI_Model
{
	function login_user($username,$password)
	{
		// protect from sql injection and xss attacks
		$username = html_escape($username);
		$password = html_escape($password);

		// fetch user data in database
	  	$this->db->select('password');
	  	$this->db->from('tbluser');
	 	$this->db->where('username',$username);
		$query = $this->db->get();
		
		// if data has matched
		if(!empty($query->row()))
		{
			// check the password hash
			if(password_verify($password,$query->row()->password))
			{
				$this->session->set_userdata('username', $username);
				return true;
			}
		}
		else
			return false;
			
	}
	
	
}