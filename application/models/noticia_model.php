<?php

class Noticia_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function getNoticias() {

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
}