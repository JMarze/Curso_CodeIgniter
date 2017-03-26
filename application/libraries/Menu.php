<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu{
	// Atributo
	private $array_opciones;

	// Constructor
	public function __construct($array){
		$this->array_opciones = $array;
	}

	// Construir Menu
	public function construirMenu(){
		$menu = '<nav><ul>';

		foreach ($this->array_opciones as $opcion){
			$menu .= '<li><a href="'. $opcion . '">' . $opcion . '</a></li>';
		}

		$menu .= '</ul></nav>';

		return $menu;
	}
}
