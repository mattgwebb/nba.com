<?php

class Usuario_model extends CI_Model {

	public function registrarUsuario($data) {

		$this->db->insert('usuario', $data);
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