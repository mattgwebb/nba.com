<?php

class Pais_model extends CI_Model {
	
	public function getPaises() {

		$query = $this->db->query("SELECT * FROM pais");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}
}