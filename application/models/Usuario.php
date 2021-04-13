<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        
        
    }
    public function guardar($datos){
        
        $this->db->insert('usuarios',$datos);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
        

        
    }

   
    public function getPersonas(){
        $this->db->select('usuarios.nombre,usuarios.appaterno,usuarios.apmaterno,cuidad.cuidad');
        $this->db->from('usuarios usuarios');
        $this->db->join('cuidad cuidad','cuidad.id_cuidad = usuarios.id_cuidad');

        $r= $this->db->get();
        return  $r->result();
    }
}