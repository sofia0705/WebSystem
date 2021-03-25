<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Persnol');
        
       
    }
    public function index()
	{
        $this->load->view('layout/menu');
        $this->load->view('layout/header');
		$this->load->view('admin/personal');
        $this->load->view('layout/footer');

        $archivos =$this->Persnol->getArchivo();
        $data['archivos'] = $archivos;
	}
    public function addfile(){
        $nombre = $this->input->post('nombre');

        $file_name = $_FILES ['archivo']['name'];
        $file_size = $_FILES ['archivo']['size'];
        $file_tmp = $_FILES ['archivo']['tmp_name'];
        $file_type = $_FILES ['archivo']['type'];


        $fp = fopen($file_type, 'r+b');
        $binario = fread($fp, filesize($file_type));
        fclose($fp);

        $datos = array(
            'archivo' => $binario,
            'nombre' => $nombre

        );
        $this->Persnol->Insert($datos);

    }
    
}