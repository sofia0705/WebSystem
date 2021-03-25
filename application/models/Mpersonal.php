<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpersonal extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        
    }
    public function Info($data){
        $campos = array(
            'nombre' => $data['nombre'],
            'correo' => $data['correo'],
            'telefono' => $data['telefono'],
            'estado_civil' => $data['estado_civil'],
            'hijos' => $data['hijos'],
            'intereses' => $data['intereses']
            
        );
        $this->db->insert('personal', $campos);

        return $this->db->insert_id();
    }
}