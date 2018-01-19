<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Model {

	public $nombre;
	public $apellidos;
	public $email;
	public $password;

	public function __construct()
	{
		parent::__construct();
		
	}

	public obtener_usuario(){
		$this->db->where('usu_email', $this->email);
		$query = $this->db->get('usuario');
		if ($query->result()) {
			# code...
		}
	}

}

/* End of file usuarios.php */
/* Location: ./application/models/usuarios.php */