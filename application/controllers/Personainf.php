<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personainf extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mpersonal');
       
    }
    public function index()
	{
        $this->load->view('layout/menu');
        $this->load->view('layout/header');
		$this->load->view('admin/vpersonal');
        $this->load->view('layout/footer');
	}
    public function Info(){
        //Infopersonal 
         $data['nombre'] = $this->input->post('txtnombre');
         $data['correo'] = $this->input->post('txtemail');
         $data['telefono'] = $this->input->post('txttelefono');
         $data['estado_civil'] = $this->input->post('txtestado_civil');
         $data['hijos'] = $this->input->post('txthijos');
         $data['intereses'] = $this->input->post('txtintereses');

         $this->Mpersonal->Info($data);
         
         $this->load->view('layout/menu');
         $this->load->view('layout/header');
         $this->load->view('admin/vpersonal');
         $this->load->view('layout/footer');

        

}
    
}


