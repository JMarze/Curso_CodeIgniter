<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {

	// .../prueba
	public function index(){
		$this->load->view('pruebas/index');
	}

}
