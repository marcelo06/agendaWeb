<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home/index');
		$this->load->view('footer');
	}

	/**
	 * login
	 * Función que realiza el login del usuario.
	 */
	public function login()
	{
		$data = $this->input->post();
		var_dump($data);
		echo 'login...'; exit();
	}

	/**
	 * signup
	 * Función que muestra el formulario de registro.
	 *
	 */
	public function signupForm()
	{
		$this->load->view('header');
		$this->load->view('home/signupForm');
		$this->load->view('footer');
	}
}
