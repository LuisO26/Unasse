<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VideosAdmin extends CI_Controller {

	public function __construct() {
      parent::__construct();
   }
	public function index()
	{
		if($this->session->userdata('logueado')){
			$datosg = $this->Admin_model->getData('videos');
         //$data = array();
         //$data['nombre'] = $this->session->userdata('nombre');
         $data['datosg'] = $datosg;
         //var_dump($data);
      $data1 = array( "header" => "Inicio", 
      	"url" => 'VideosAdmin/Agregar');
		$this->load->view('Admin/header', $data1);
		$this->load->view('Admin/nav');
		$this->load->view('Admin/bodyVideos', $data);
		$this->load->view('Home/scripts');
      }else{
      	$data1 = array( "header" => "Inicio");
      $this->load->view('Home/header', $data1);
		$this->load->view('Home/nav');
		$this->load->view('Admin/bodyLogin');
		$this->load->view('Home/scripts');
   }
		
	}
	public function borrar(){
      $id= $_POST['id'];
      $resp = $this->Admin_model->borrarVideos($id);
      if ($resp == 'borrado') {
      	$respuesta  = array('status' => 200 , 'mensaje'=> 'Videos Borrados' );
    	echo json_encode($respuesta);
      }else{
      	$respuesta  = array('status' => 300 , 'mensaje'=> 'Hubo un problema' );
    	echo json_encode($respuesta);
      }
      

   }
	public function Agregar(){
    //echo "hola 1";
		$res='';
		//print_r($files);
      $cantidad  = $_POST['cantidadVideos'];
                        
		
		 for($i=0; $i<$cantidad; $i++)
    {                                      
                      $e = $i+1;
                        $data= array('tabla'=> "videos", 'datos'=> array('titulo' => $_POST['tvideo_'.$e],
                          'idVideo' => $_POST['video_'.$e]));
                        
                        $respuesta1 = $this->Admin_model->Save($data);
                        
			
    }
    if ($respuesta1) {
    	# code...
    	$result  = array('status' => 200 , 'mensaje'=> 'OK' );
    	echo json_encode($result);
    }else{
    	$result  = array('status' => 300 , 'mensaje'=> 'ERROR' );
    	echo json_encode($result);
    }
		

                
                
		
                
		
		
	}
}
