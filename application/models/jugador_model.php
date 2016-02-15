<?php

class Jugador_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function insertar($data) {
		$this->db->insert('jugador', $data);
	}

	public function getJugadores($idEquipo) {

		$query = $this->db->query("SELECT * FROM jugador WHERE equipo_id = $idEquipo");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}

	public function get($jugador) {

		$query = $this->db->query("SELECT * FROM jugador WHERE nombre = '$jugador'");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}

	public function buscarJugadores($busqueda) {

		$query = $this->db->query("SELECT id, nombre FROM jugador WHERE nombre LIKE '%$busqueda%'");
		return $query->result();
	}

	public function getTodos() {

		$query = $this->db->query("SELECT * FROM jugador");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}

	public function getCampos() {
		return $this->db->list_fields('jugador');
	}

	public function actualizar($data) {
		$this->db->where('id', $data['id']);
		unset($data[0]);
		$this->db->update('jugador', $data);
	}

	public function borrar($id) {
		$this->db->where('id', $id);
		$this->db->delete('jugador'); 
	}
}