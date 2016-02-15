<?php

class Usuario_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function insertar($data) {
		$this->db->insert('usuario', $data);
	}

	public function registrarUsuario($data) {
		$this->db->insert('usuario', $data);
		return TRUE;
	}

	public function emailUnico($email) {
		$query = $this->db->query("SELECT email FROM usuario WHERE email = '$email'");
		return($query->num_rows() <= 0);
	}

	public function comprobarUsuarioContrasenya($email, $pass) {

		$query = $this->db->query("SELECT password FROM usuario WHERE email = '$email'");
		if ($query->num_rows() == 0) {
			return FALSE;
		}
		$row = $query->row();
		return ($row->password == $pass);
	}

	public function getTodos() {
		$query = $this->db->query("SELECT * FROM usuario");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}
	public function getCampos() {
		return $this->db->list_fields('usuario');
	}

	public function actualizar($data) {
		$this->db->where('email', $data['email']);
		unset($data[0]);
		$this->db->update('usuario', $data);
	}

	public function borrar($id) {
		$this->db->where('email', $id);
		$this->db->delete('usuario'); 
	}
}