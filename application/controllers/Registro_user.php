<?php

class Registro_user extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('usuario_model');
	}

	function index(){
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		// Validacion del campo Email (con Bootstrap no hace falta)
		//$this->form_validation->set_rules('email','Email', 'required|valid_email');

		// Validacion del campo contrasenya

		// Validacion del campo Nombre
		//$this->form_validation->set_rules('nombre','Nombre','required|min_length[3]|max_length[100]');
		
		// Validacion del campo Apellido
		//$this->form_validation->set_rules('apellido','Apellido','required|min_length[3]|max_length[100]');

	}
}