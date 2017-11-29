<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('Admin/bodyDashboard');
		$this->load->view('Home/scripts');
      }else{
      	$data1 = array( "header" => "Inicio");
      $this->load->view('Home/header', $data1);
		$this->load->view('Home/nav');
		$this->load->view('Admin/bodyLogin');
		$this->load->view('Home/scripts');
   }
		
	}

	public function iniciar_sesion() {
      if ($this->input->post('correo')) {
         $correo = $this->input->post('correo');
         $contrasena = $this->input->post('contrasena');
         $contrasena = md5($contrasena);
         echo $contrasena;
         $this->load->model('Admin_model');
         $usuario = $this->Admin_model->Logearse($correo, $contrasena);
         print_r($usuario);
         if ($usuario) {
            $usuario_data = array(
               'id' => $usuario->id,
               'nombre' => $usuario->nombre,
               'logueado' => TRUE 
               
            );
            $this->session->set_userdata($usuario_data);
            //redirect('Usuarios/logueado');


            echo 'exito';

            
         } else {
            //redirect('Usuario/iniciar_sesion');
            $usuario_data = array(
         'logueado' => FALSE
      );
            echo 'error';
         }
      } else {

         $usuario_data = array(
         'logueado' => FALSE
      );
         echo 'error';
      }
   }
}
