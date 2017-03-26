<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {

	// Constructor
	function __construct(){
		parent::__construct();
		// system/helpers/url_helper
		$this->load->helper('url');
	}

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

	// .../prueba/helper
	public function helper(){
		$this->load->view('pruebas/helper');
	}

}
