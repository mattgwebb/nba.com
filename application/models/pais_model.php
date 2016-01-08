<?php

class Pais_model extends CI_Model {
	
	private $paises = array(
    	"españa" => "España",
    	"inglaterra" => "Inglaterra",
    	"alemania" => "Alemania",
	);

	public function getPaises() {

		return $this->paises;
	}
}