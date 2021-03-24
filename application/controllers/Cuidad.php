<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuidad extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcuidad');
        
    }
    public function index(){
        $this->load->view('layout/menu');
        $this->load->view('layout/header');
        $this->load->view('admin/vistacuidad');
        $this->load->view('layout/footer');
    }
    public function getCuidades(){
       $s =  $this->input->post('sitReg');
        $resultado = $this->Mcuidad->getCuidades($s);
        
        echo json_encode($resultado);
    }
}