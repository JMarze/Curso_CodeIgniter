<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct(){
		parent::__construct();
        // helpers
		$this->load->helper('html');
		$this->load->helper('url');

        // Modelo
        $this->load->model('contactos_model');

        // Base de datos
        $this->load->database();
	}

    /*
     * Página de Inicio del Proyecto
     */
	public function index(){
		$this->load->view('contactos/partials/header');
		$this->load->view('contactos/partials/menu_principal');
		$this->load->view('contactos/index');
		$this->load->view('contactos/partials/footer');
	}

    /*
     * Lista de Contactos
     */
    public function ver(){
        $datos = array(
			'contactos' => $this->contactos_model->recuperarTodos(),
		);

        $this->load->view('contactos/partials/header');
		$this->load->view('contactos/partials/menu_principal');
		$this->load->view('contactos/ver', $datos);
		$this->load->view('contactos/partials/footer');
    }
}
