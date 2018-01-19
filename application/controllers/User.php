<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		echo 'login...'; exit();
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */