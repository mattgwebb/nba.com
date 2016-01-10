<?php

class Prueba extends CI_Controller {

	public function jugador() {

		$this->load->model("jugador_model");
		$jugadores = $this->jugador_model->getJugadores(1);
		print_r($jugadores);
	}
}

?>