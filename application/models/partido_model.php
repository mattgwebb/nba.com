<?php

class Partido_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function insertar($data) {
		$this->db->insert('partido', $data);
	}

	public function getTodos() {

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

	public function getCampos() {
		return $this->db->list_fields('partido');
	}

	public function actualizar($data) {
		$this->db->where('id', $data['id']);
		unset($data[0]);
		$this->db->update('partido', $data);
	}

	public function borrar($id) {
		$this->db->where('id', $id);
		$this->db->delete('partido'); 
	}
}