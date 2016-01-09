<?php

class Partido_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function getPartidos() {

		$query = $this->db->query("SELECT * FROM partido");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}
	
	public function getImagenes($idPartido) {

		$query = $this->db->query("SELECT url FROM galeria, imagen WHERE galeria.id = imagen.id_galeria AND galeria.id_partido = $idPartido");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}
}