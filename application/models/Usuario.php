<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        
    }
    public function guardar($param){
        $campos = array(
            'nombre' => $param['nombre'],
            'appaterno' => $param['appaterno'],
            'apmaterno' => $param['apmaterno'],
            'fecnac' => $param['fecnac'],
            'correo' => $param['correo']
            
        );
        $this->db->insert('usuarios', $campos);

        return $this->db->insert_id();
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
    public function eliminarPersona($idP){
        $campos = array(
            'id_persona' => $idP,

        );
        $this->db->where('id_persona',$idP);
        $this->db->delete('usuarios');

    }
    public function getPersonas(){
        $this->db->select('usuarios.nombre,usuarios.appaterno,usuarios.apmaterno,cuidad.cuidad');
        $this->db->from('usuarios usuarios');
        $this->db->join('cuidad cuidad','cuidad.id_cuidad = usuarios.id_cuidad');

        $r= $this->db->get();
        return  $r->result();
    }
}