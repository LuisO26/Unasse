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
      $data1 = array( "header" => "Inicio", 
      	"url" => 'GaleriaAdmin/Agregar');
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
		$res='';
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
    
		

                
                
		
                
		/*if ($this->input->post()) {
			$data['tabla']= "galeria";
			$data['datos']= array(
				'titulo' => $this->input->post('titulo') ,
				'descripcion' => $this->input->post('descripcion') ,
				'fecha' => date('Y-m-d')
				 );
			$galeria = $this->Admin_model->Save($data);
			$data['tabla']= "imagenes";
			$data['datos']= array(
				'nombre' => $this->input->post('titulo') ,
				'url' => 'assets/img/galeria/'+$res['file_name'] 
				 );
			# code...
			$imagenes = $this->Admin_model->SaveImages($data);
			 $result = array("status" => true);
            echo json_encode($result);
		} else {
			# code...
		}*/
		
	}
}
