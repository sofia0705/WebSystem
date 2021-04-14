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

   
    
}