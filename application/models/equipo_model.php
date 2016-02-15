<?php

class Equipo_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function insertar($data) {
		$this->db->insert('equipo', $data);
	}
	
	public function getTodos() {

		$query = $this->db->query("SELECT * FROM equipo");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}

	public function get($equipo) {

		$query = $this->db->query("SELECT * FROM equipo WHERE nombre = '$equipo'");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}

	public function buscarEquipos($busqueda) {

		$query = $this->db->query("SELECT id, nombre FROM equipo WHERE nombre LIKE '%$busqueda%'");
		return $query->result();
	}

	public function getCampos() {
		return $this->db->list_fields('equipo');
	}

	public function actualizar($data) {
		$this->db->where('id', $data['id']);
		unset($data[0]);
		$this->db->update('equipo', $data);
	}

	public function borrar($id) {
		$this->db->where('id', $id);
		$this->db->delete('equipo'); 
	}
}