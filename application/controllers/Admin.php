<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){

		parent::__construct();
	}

	public function index()
	{
		$this->load->model('usuario_model');
		$this->data['usuarios'] = $this->usuario_model->getTodos();
		$this->load->view('admin/admin', $this->data);
	}

	public function data($tabla, $accion) {
		$model = $tabla. '_model';
		$this->load->model($model);
		$this->data['tabla'] = $this->$model->getTodos();
		$this->data['campos'] = $this->$model->getCampos();
		$this->data['nombre'] = $tabla;
		$this->data['accion'] = $accion;
   		$this->load->view('admin/data', $this->data);
	}

	public function anyadir($tabla) {
		$model = $tabla. '_model';
		$this->load->model($model);
		$this->data['campos'] = $this->$model->getCampos();
		
		foreach($this->data['campos'] as $campo) {
			$valores[$campo]=$this->input->post($campo);
		}
		$this->$model->insertar($valores);
		$this->data($tabla, "Inserción");
	}

	public function actualizar($tabla) {
		$model = $tabla. '_model';
		$this->load->model($model);
		
		if($this->input->post('accion') == "modificar") { 
			$this->data['campos'] = $this->$model->getCampos();
		
			foreach($this->data['campos'] as $campo) {
				$valores[$campo]=$this->input->post($campo);
			}
			$this->$model->actualizar($valores);
			$this->data($tabla, "Actualización");
		}
		if($this->input->post('accion') == "borrar") {
			if($tabla == "usuario") {
				$id = $this->input->post('email');
			} else {
				$id = $this->input->post('id');
			}
			$this->$model->borrar($id);
			$this->data($tabla, "Borrado");
		}
		
	}

}