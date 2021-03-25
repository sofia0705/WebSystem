<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persnol extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        
        
    }
    public function getPersonal(){
        $this->db->select('personal.id,personal.nombre,personal.correo,personal.telefono,personal.archivo');
        $this->db->from('personal personal');
       

        $r= $this->db->get();
        return  $r->result();
    }
    
    
}