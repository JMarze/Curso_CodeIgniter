<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {

	// Constructor
	function __construct(){
		parent::__construct();
		// system/helpers/url_helper
		$this->load->helper('url');

		// application/helpers/titulos_helper
		$this->load->helper('titulos');
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

	// .../prueba/libreria
	public function libreria(){
		$this->load->library('menu', ['Inicio', '¿Quienes somos?', 'Blog', 'Contacto']);
		$datos['menu_principal'] = $this->menu->construirMenu();

		$this->load->view('pruebas/libreria', $datos);
	}

}
