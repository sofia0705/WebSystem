<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mupload extends CI_Model {
	public function __construct()
	{
		parent:: __construct();
		
	}
    public function subir($titulo,$imagen){
        $data = array(
            'titulo' => $titulo,
            'ruta' => $imagen
        );
        return $this->db->insert('imagenes', $data);
    }
}