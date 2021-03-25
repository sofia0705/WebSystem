<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persnol extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        
        
    }
    public function Insert($datos){
        $campos = array(
            'nombre' => $datos['nombre'],
            'archivo' => $datos['archivo']
            
            
        );
        $this->db->insert('archivos', $campos);

        return $this->db->insert_id();
    }
    public function getArchivo(){
        $query = $this->db->query("SELECT * FROM archivos");
        return $query->result_array();
    }
}