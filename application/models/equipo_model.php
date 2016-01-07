<?php

class Equipo_model extends CI_Model {

	public function getEquipos() {

		$query = $this->db->query("SELECT * FROM equipo");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}
}