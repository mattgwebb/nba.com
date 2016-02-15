<?php

class Registro extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('usuario_model');
		$this->load->model('pais_model');
	}

	function index(){

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('email', 'Email', 'callback_email_check');
		$this->form_validation->set_rules('contrasenya', 'Contraseña', 'required|min_length[5]|matches[contrasenya_2]');
		$this->form_validation->set_rules('contrasenya_2','Confirmación de contraseña', 'required');
		$this->form_validation->set_rules('nombre','Nombre','required|alpha|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('apellido','Apellido','required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('pais','Pais','required|is_natural');

		//$this->form_validation->set_message('required', '%s obligatorio');

		if($this->form_validation->run()==FALSE){
			$this->data['paises'] = $this->pais_model->getTodos();
			$this->load->view('register/registro', $this->data);
		}else {
			$data=array(
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('contrasenya'),
				'nombre'=>$this->input->post('nombre'),
				'apellido'=>$this->input->post('apellido'),
				'pais'=>$this->input->post('pais'),
			);
			$this->usuario_model->registrarUsuario($data);
			$this->load->view('home/main');
		}
	}

	public function email_check($str) {
		if(!$this->usuario_model->emailUnico($str)) {
			$this->form_validation->set_message('email_check', 'El email dado ya está registrado');
			return FALSE;
		}
		return TRUE;
	}
}