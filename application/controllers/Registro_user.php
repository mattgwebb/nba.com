<?php

class Registro_user extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('usuario_model');
	}

	function index(){
		$this->registroUsuario();
	}

	function registroUsuario(){
		
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		// Validacion del campo Email (con Bootstrap no hace falta)
		$this->form_validation->set_rules('email','Email', 'required|valid_email|is_unique[usuario.email]');

		// Validacion del campo contrasenya
		$this->form_validation->set_rules('password', 'Contrasenya', 'required|matches[Contrasenya_2]');

		// Validacion del campo Nombre
		$this->form_validation->set_rules('nombre','Nombre','required|alpha|min_length[3]|max_length[100]');
		
		// Validacion del campo Apellido
		$this->form_validation->set_rules('apellido','Apellido','required|min_length[3]|max_length[100]');

		// Validacion del campo Pais
		$this->form_validation->set_rules('pais','Pais','required|is_natural');

		if($this->form_validation->run()==FALSE){

			$this->load->view('register/registro');
		}else{

			$data=array(
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'nombre'=>$this->input->post('nombre'),
				'apellido'=>$this->input->post('apellido'),
				'pais'=>$this->input->post('pais'),
			);

			$this->usuario_model->registrarUsuario($data);

			if($this->usuario_model->registrarUsuario($data)){

				echo "Insertado con exito";
			}
			else{

				echo "Error en la insercion";
			}

		}


	}
}