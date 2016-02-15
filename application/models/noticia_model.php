<?php

class Noticia_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function insertar($data) {
		$this->db->insert('noticia', $data);
	}

	public function getTodos() {

		$query = $this->db->query("SELECT * FROM noticia");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}

	public function getComentariosNoticia($idNoticia) {

		$query = $this->db->query("SELECT c.fecha, c.email_usuario, c.texto FROM noticia n, comentario c WHERE c.id_noticia = n.id AND n.id = $idNoticia");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}

	public function addComentarioNoticia($data) {

		$this->db->insert('comentario', $data);

	}

	public function getCampos() {
		return $this->db->list_fields('noticia');
	}

	public function actualizar($data) {
		$this->db->where('id', $data['id']);
		unset($data[0]);
		$this->db->update('noticia', $data);
	}

	public function borrar($id) {
		$this->db->where('id', $id);
		$this->db->delete('noticia'); 
	}
}