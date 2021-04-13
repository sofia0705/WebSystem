<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Er extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		
	}

	
	public function index()
	{
        $this->load->view('layout/menu');
        $this->load->view('layout/header');
        $this->load->view('admin/err');
        $this->load->view('layout/footer');
	}
}