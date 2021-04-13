<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reactualizacion extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Actualizaret');
        
        
    }
    public function index()
	{
     
		$this->load->view('admin/vupdpersona');
       
	}
    public function actualizarDatos(){
        $dato['nombre'] = $this->input->post('txtnombre');
        $dato['appaterno'] = $this->input->post('txtappaterno');
        $dato['apmaterno'] = $this->input->post('txtapmaterno');
        $dato['correo'] = $this->input->post('txtcorreo');

        $this->Actualizaret->actualizarDatos($dato);
        redirect('Reactualizacion');

       
    }
}