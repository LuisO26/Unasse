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
		$this->load->view('Admin/bodyHome', $data);
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
      $urlYoutube  = $_POST['idVideo'];
      $data1= array('tabla'=> "youtubehome", 'datos'=> array('url' => $urlYoutube));
                        
      $respuesta0 = $this->Admin_model->Save($data1);
		$count = count($_FILES);
		$config['upload_path']          = './././assets/img/sliders';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 2000;

                $this->load->library('upload', $config);
		
		 for($i=0; $i<$cantidad; $i++)
    {              
      //var_dump($_FILES);
        if ( ! $this->upload->do_upload('file-'.$i))
                {
                        $res = array('error' => $this->upload->display_errors());

                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $res = array('upload_data' => $this->upload->data());
                        $e = $i+1;
                        $data= array('tabla'=> "home", 'datos'=> array('titulo' => $_POST['slider_'.$e],
                          'url' => 'assets/img/sliders/'.$res['upload_data']['file_name'] ,
                          'fecha' => date('Y-m-d')));
                        
                        $respuesta1 = $this->Admin_model->Save($data);
                        
			
                        
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
