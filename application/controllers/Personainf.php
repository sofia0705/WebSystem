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
        $data['error'] = "";
        $data['errorArch'] = "";
        $data['estado'] = "";
        $data['archivo'] = "";

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
        public function subirImagen(){
            $config['upload_path'] = 'uploads/imagenes/thumbs';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '20048';
            $config['max_width'] = '2024';
            $config['max_heigth'] = '2008';
    
            $this->load->library('upload',$config);
    
            if($this->vpersonal->do_upload('fileImagen')){
                $data['error'] = $this->vpersonal->display_errors();
                $this->load->view('layout/menu');
                $this->load->view('layout/header');
                $this->load->view('admin/vpersonal', $data);
                $this->load->view('layout/footer');
    
            }else{
                $file_info = $this->vpersonal->data();
    
                // $this->crearMiniatura($file_info['file_name']);
            
                $imagen = $file_info['file_name'];
                $subir = $this->Mpersonal->subir($imagen);
                $data['imagen'] = $imagen;
    
                $this->load->view('layout/menu');
                $this->load->view('layout/header');
                $this->load->view('admin/vpersonal', $data);
                $this->load->view('layout/footer');
    
            }
        }
        public function subirArchivo(){
            $config['upload_path'] ='uploads/archivos';
            $config['allowed_types'] ='pdf|xlsx|docx';
            $config['max_size'] ='20048';
    
            $this->load->library('upload', $config);
    
            if(!$this->vpersonal->do_upload('fileImagen')){
                $data['errorArch'] = $this->vpersonal->display_errors();
                $this->load->view('layout/menu');
                $this->load->view('layout/header');
                $this->load->view('admin/vpersonal', $data);
                $this->load->view('layout/footer');
    
    
            }else{
                $file_info = $this->vpersonal->data();
    
               
                $archivo = $file_info['file_name'];
                $subir = $this->Mpersonal->subir($archivo);
                $data['estado'] ="Archivo subido.";
                $data['archivo'] = $archivo;
                $data['error'] = "";
                $data['errorArch'] = "";
    
                $this->load->view('layout/menu');
                $this->load->view('layout/header');
                $this->load->view('admin/vpersonal', $data);
                $this->load->view('layout/footer');
    
    
            }
    
        }
}


