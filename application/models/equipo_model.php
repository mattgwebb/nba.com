<?php

class Equipo_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}
	
	public function getEquipos() {

		$query = $this->db->query("SELECT * FROM equipo");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}
}