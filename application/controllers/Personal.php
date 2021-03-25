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

        
	}
    
    public function getPersonal(){
        echo json_encode($this->Persnol->getPersonal());
    }
    
    
}