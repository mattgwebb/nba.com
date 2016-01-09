<?php

class Usuario_model extends CI_Model {

	public function registrarUsuario($data) {

		$email = $data['email'];
		$query = $this->db->query("SELECT email FROM usuario WHERE email = '$email'");
		if ($query->num_rows() > 0) {
			return FALSE;
		}

		$this->db->insert('usuario', $data);
		return TRUE;
	}

	public function comprobarUsuarioContrasenya($email, $pass) {

		$query = $this->db->query("SELECT password FROM usuario WHERE email = '$email'");
		if ($query->num_rows() == 0) {
			return FALSE;
		}
		$row = $query->row();
		return ($row->password == $pass);
	}
}