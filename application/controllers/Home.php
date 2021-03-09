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

	/**
	 * dashboard
	 * Función que muestra la interfaz principal del usuario autenticado.
	 */
	public function dashboard()
	{
		$redirectURI = base_url().'home/dashboard';

		// Crear la petición al cliente de Google API.
		$client = new Google_Client();
		$client->setClientId(CLIENT_ID);
		$client->setClientSecret(CLIENT_SECRET);
		$client->setRedirectUri($redirectURI);
		$client->addScope("email");
		$client->addScope("profile");

		// authenticate code from Google OAuth Flow
		if (isset($_GET['code']))
		{
			$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
			$client->setAccessToken($token['access_token']);

			// get profile info
			$google_oauth = new Google_Service_Oauth2($client);
			$google_account_info = $google_oauth->userinfo->get();
			$email =  $google_account_info->email;
			$name =  $google_account_info->name;

			// now you can use this profile info to create account in your website and make user logged in.
			var_dump($google_account_info);
		}
		else
		{
			echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
		}
	}
}
