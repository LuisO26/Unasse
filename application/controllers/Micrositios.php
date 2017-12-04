<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Micrositios extends CI_Controller {

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
	public function Agregar(){

		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileImage'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        //$this->load->view('upload_success', $data);
                }
		if ($this->input->post()) {
			$data['tabla']= "Galeria";
			$data['datos']= array(
				'titulo' => $this->input->post('titulo') ,
				'titulo' => $this->input->post('titulo') ,
				'titulo' => $this->input->post('titulo') ,
				 );
			# code...
			$usuario = $this->Admin_model->Save($data);
		} else {
			# code...
		}
		
		$usuario = $this->Admin_model->Logearse($correo, $contrasena);
	}
}
