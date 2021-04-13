<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Usuario');
        $this->load->model('Mpersonas');
        
    }

	
	public function index()
	{
        
		$this->load->view('admin/vistapers');
        
	}
    public function guardar(){
        $this->load->view('admin/vistapers');
        if($this->input->is_ajax_request()){
            //usuario
       $nombre = $this->input->post('txtnombre');
       $appaterno= $this->input->post('txtappaterno');
       $apmaterno= $this->input->post('txtapmaterno');
       $fecnac= $this->input->post('datfecnac');
       $correo = $this->input->post('txtcorreo');

       //alta usuario
       $nombre_usuario = $this->input->post('user');
       $contrasena= $this->input->post('txtcontrasena');
       

       $datos=array(
           'nombre' =>$nombre,
           'appaterno' => $appaterno,
           'apmaterno' => $apmaterno,
           'fecnac' => $fecnac,
           'correo' => $correo,
           'nombre_usuario' => $nombre_usuario,
           'contrasena' => $contrasena
           

       );
       
        
        if($this->Usuario->guardar($datos) == true) {
           echo "registro guardado";

        }else
        {
            echo "No se pudo guardar el registro";
        }
       }
         

   }
      public function mostrar(){
          $this->load->view('layout/menu');
          $this->load->view('layout/header');
          $this->load->view('admin/vistaregistros');
          $this->load->view('layout/footer');

       if($this->input->is_ajax_request()){
           $buscar = $this->input->post("buscar");
           $datos = $this->Usuarios->mostrar($buscar);
          echo json_encode($datos);

          
       }
   }

   
}