<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        

    }
    public function ingresar($usu, $pass){
        $this->db->select('personas.id_usuario, usuarios.nombre, usuarios.appaterno, usuarios.apmaterno');
        $this->db->from('usuarios');
        $this->db->join('personas','usuarios.id_persona = personas.id_persona');
        $this->db->where('personas.nombre_usuario',$usu);
        $this->db->where('personas.contrasena',$pass);

        $resultado = $this->db->get();

        if($resultado->num_rows == 1){
            $r = $resultado->row();

            $s_usuario = array(
                's_id_usuario' => $r->id_usuario,
                's_usuario' => $r->nombre."","".$r->appaterno
            );
            $this->session->set_userdata($s_usuario);
            
            
            return 1;
        }else{
            return 0;
        }
    }
}