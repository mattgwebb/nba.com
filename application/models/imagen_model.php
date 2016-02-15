<?php

class Imagen_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function insertar($data) {
		$this->db->insert('imagen', $data);
	}

	public function getTodos() {

		$query = $this->db->query("SELECT * FROM imagen");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}
	
	public function getCampos() {
		return $this->db->list_fields('imagen');
	}

	public function actualizar($data) {
		$this->db->where('id', $data['id']);
		unset($data[0]);
		$this->db->update('imagen', $data);
	}

	public function borrar($id) {
		$this->db->where('id', $id);
		$this->db->delete('imagen'); 
	}
}