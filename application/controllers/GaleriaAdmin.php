<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriaAdmin extends CI_Controller {

	public function __construct() {
      parent::__construct();
   }
	public function index()
	{
		if($this->session->userdata('logueado')){
			$datosg = $this->Admin_model->getGalerias();
         $data = array();
         $data['nombre'] = $this->session->userdata('nombre');
         $data['datosg'] = $datosg;
      $data1 = array( "header" => "Inicio", 
      	"url" => 'GaleriaAdmin/Agregar');
		$this->load->view('Admin/header', $data1);
		$this->load->view('Admin/nav', $data);
		$this->load->view('Admin/bodyGaleria', $data);
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
		$res='';
		if ($_POST) {
			$data= array('tabla'=> "galeria", 'datos'=> array('titulo' => $_POST['titulo'],
				'descripcion' => $_POST['descripcion'] ,
				'fecha' => date('Y-m-d')));
			
			$id_galeria = $this->Admin_model->Save($data);
			
			# code...
		} else {
			# code...
		}
		//print_r($files);
		$count = count($_FILES);
		$config['upload_path']          = './././assets/img/galeria';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 2000;

                $this->load->library('upload', $config);
		
		 for($i=0; $i<$count; $i++)
    {              

        if ( ! $this->upload->do_upload('file-'.$i))
                {
                        $res = array('error' => $this->upload->display_errors());

                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $res = array('upload_data' => $this->upload->data());
                 

                        //$this->load->view('upload_success', $data);
                        $data = array('tabla'=> "imagenes", 'datos'=> array('nombre' => $res['upload_data']['file_name'] ,
				'url' => 'assets/img/galeria/'.$res['upload_data']['file_name'],
				'id_galeria'=> $id_galeria));
                        $galeria = $this->Admin_model->SaveImages($data);
                        
			
                        
                }
    }
    if ($res['upload_data']) {
    	# code...
    	$result  = array('status' => 200 , 'mensaje'=> 'OK' );
    	echo json_encode($result);
    }else{
    	$result  = array('status' => 300 , 'mensaje'=> 'ERROR' );
    	echo json_encode($result);
    }
    
		

                
                
		
                
		
		
	}
}
