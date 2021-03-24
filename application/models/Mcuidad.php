<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcuidad extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        
    }
    public function getCuidades(){
       $s =  $this->db->get_where('cuidad', array('sitReg' => '$s'));
       return $s->result();
        
    }
}