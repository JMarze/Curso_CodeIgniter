<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {

	// .../prueba
	public function index(){
		//$datos['nombre'] = 'J. Marcelo Arze';

		$datos = array(
			'nombre' => 'J. Marcelo Arze',
			'edad' => 45,
			'cursos' => ['HTML5', 'CSS3', 'Php', 'Laravel']
		);

		$this->load->view('pruebas/index', $datos);
	}

}
