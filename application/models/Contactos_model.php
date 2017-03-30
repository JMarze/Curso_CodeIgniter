<?php

class Contactos_model extends CI_Model {
    // Atributos
    public $id;
    public $nombre;
    public $telefono_1;
    public $telefono_2;
    public $correo_electronico;
    public $direccion;
    public $genero;
    public $imagen;

    public function recuperarTodos(){
        $query = $this->db->get('contactos');

        return $query->result();
    }
}
