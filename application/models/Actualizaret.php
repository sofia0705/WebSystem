<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actualizaret extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        
        
    }
    public function actualizarDatos($dato){
        $campos = array(
            'nombre' => $dato['nombre'],
            'appaterno' => $dato['appaterno'],
            'apmaterno' => $dato['apmaterno'],
            'correo' => $dato['correo']
            
        );
        $this->db->update('usuarios',$campos);
        // $this->db->where('id_persona','1' );

        return 1;

    
    }
}