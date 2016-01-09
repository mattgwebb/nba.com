<?php

class Jugador_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function getJugadores($idEquipo) {

		$query = $this->db->query("SELECT * FROM jugador WHERE equipo_id = $idEquipo");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}
}