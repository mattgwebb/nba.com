<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/* Prueba del visionado de las paginas */
		$this->load->view('home/main');
	}

	public function autoCompletar() {
		$this->load->model('equipo_model');
		$search =  $this->input->post('search');
		$query = $this->equipo_model->buscarEquipos($search);
		if(empty($query)) {
			$this->load->model('jugador_model');
			$query = $this->jugador_model->buscarJugadores($search);
		}
		echo json_encode ($query);
	}

	public function search() {
		$search =  $this->input->post('search');
		$this->load->model('equipo_model');
		$this->load->model('jugador_model');
		if($this->equipo_model->get($search) != 'No encontrado') {
			redirect('http://localhost/NBA/index.php/equipo/info/'.$search);
		} else if($this->jugador_model->get($search) != 'No encontrado') {
			redirect('http://localhost/NBA/index.php/jugador/info/'.$search);
		} else echo "No encontrado";
	}

	public function login() {
		$this->load->model('usuario_model');

		$email= $this->input->post('email');
		$password = $this->input->post('password');
		if($this->usuario_model->comprobarUsuarioContrasenya($email, $password)) {
			$this->session->set_userdata('logged_in', $email);			
		}
		$this->load->view('home/main');
	}

	public function logout() {
		$email='';
		$this->session->unset_userdata('logged_in', $email);
		$this->session->sess_destroy();
		$this->load->view('home/main');
	}

}

?>
