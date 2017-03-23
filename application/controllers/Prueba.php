<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {

	// .../prueba
	public function index(){
		$datos['nombre'] = 'J. Marcelo Arze';

		$this->load->view('pruebas/index', $datos);
	}

}
