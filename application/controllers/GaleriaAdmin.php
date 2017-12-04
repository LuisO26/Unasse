<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriaAdmin extends CI_Controller {

	public function __construct() {
      parent::__construct();
   }
	public function index()
	{
		if($this->session->userdata('logueado')){
         $data = array();
         $data['nombre'] = $this->session->userdata('nombre');
      $data1 = array( "header" => "Inicio");
		$this->load->view('Admin/header', $data1);
		$this->load->view('Admin/nav');
		$this->load->view('Admin/bodyGaleria');
		$this->load->view('Home/scripts');
      }else{
      	$data1 = array( "header" => "Inicio");
      $this->load->view('Home/header', $data1);
		$this->load->view('Home/nav');
		$this->load->view('Admin/bodyLogin');
		$this->load->view('Home/scripts');
   }
		
	}
}
