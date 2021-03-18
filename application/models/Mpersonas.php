<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpersonas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function guardarUsuario($data){

        $campos = array(
            'nombre_usuario' => $data['nombre_usuario'],
            'contrasena' => $data['contrasena'],
            'id_persona' => $data['id_persona'],
            
        );
        $this->db->insert('personas',$campos);
    }
    public function eliminarPersona($idP){
        $this->db->where('id_persona',$idP);
        $this->db->delete('personas');


    }
}
