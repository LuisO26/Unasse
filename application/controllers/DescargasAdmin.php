<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DescargasAdmin extends CI_Controller {

	public function __construct() {
      parent::__construct();
   }
	public function index()
	{
			if($this->session->userdata('logueado')){
			$datosg = $this->Admin_model->getData('descargas');
         //$data = array();
         //$data['nombre'] = $this->session->userdata('nombre');
         $data['datosg'] = $datosg;
         $data['url']= 'DescargasAdmin/Agregar';
         //var_dump($data);
      $data1 = array( "header" => "Inicio" 
      	);
		$this->load->view('Admin/header', $data1);
		$this->load->view('Admin/nav');
		$this->load->view('Admin/bodyDescargas', $data);
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

			
			# code...
		
		//print_r($files);
		$count = count($_FILES);
		$config['upload_path']          = './././assets/img/pdfs';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 5000;

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
                        
                        $data= array('tabla'=> "descargas", 'datos'=> array('titulo' => $_POST['titulo'],
				'descripcion' => $_POST['descripcion'] ,
				'url' => 'assets/img/pdfs/'.$res['upload_data']['file_name'], 
				'fecha' => date('Y-m-d')));
                        $descarga = $this->Admin_model->Save($data);
                        
			
                        
                }
    }
    } else {
			$result  = array('status' => 300 , 'mensaje'=> 'ERROR' );
    	echo json_encode($result);
		}
    if ($res['upload_data']) {
    	# code...
    	$result  = array('status' => 200 , 'mensaje'=> 'OK' );
    	echo json_encode($result);
    }else{
    	$result  = array('status' => 300 , 'mensaje'=> $res );
    	echo json_encode($result);
    }
    
		

                
                
		
                
		
		
	}
	}
