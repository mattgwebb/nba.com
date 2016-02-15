<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('equipo_model');
		$this->load->model('jugador_model');
	}

	public function index()
	{
		//$this->load->view('equipo/equipo');
	}

	public function info($equipo) {
		$equipo = str_replace("%20", " ", $equipo);
		$this->data['equipo'] = $this->equipo_model->get($equipo)[0];
		$this->data['jugadores'] = $this->jugador_model->getJugadores($this->data['equipo']->id);
		$this->load->view('equipo/equipo', $this->data);
		//print_r($this->data['equipo']->nombre);
	}
}