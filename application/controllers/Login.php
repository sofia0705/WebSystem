<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$data['mensaje']='';
		$this->load->model('Mlogin');
	}

	
	public function index()
	{
		$this->load->view('login');
	}

	public function ingresar(){
		    $this->load->view('layout/menu');
			$this->load->view('layout/header');
			$this->load->view('admin/vprincipal');
			$this->load->view('layout/footer');
		
		$usu = $this->input->post('user');
		$pass = $this->input->post('txtcontrasena');

		$res = $this->Mlogin->login($usu,$pass);

		if($res){
			$data = [
				"id" => $res->id_persona,
				'name' => $res->nombre_usuario,
				'login' => TRUE
				
			];
			//$this->session->set_userdata($data);
			
		}else{
			echo "error";

		}
		
		

	}
}
