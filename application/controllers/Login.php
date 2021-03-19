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
		$usu = $this->input->post('user');
		$pass = $this->input->post('txtcontrasena');

		$res = $this->Mlogin->ingresar($usu,$pass);

		if($res == false){
			$this->load->view('layout/menu');
			$this->load->view('layout/header');
			$this->load->view('admin/vupdpersona');
			$this->load->view('layout/footer');
			
		}else{
			$data['mensaje']= "Usuario o contraseña erronea";
			$this->load->view('login',$data);

		}
		

	}
}
