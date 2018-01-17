<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebasAdmin extends CI_Controller {

	public function __construct() {
      parent::__construct();
   }
	public function index()
	{
			if($this->session->userdata('logueado')){
			$datosg = $this->Admin_model->getData('pruebas');
         //$data = array();
         //$data['nombre'] = $this->session->userdata('nombre');
         $data['datosg'] = $datosg;
         $data['url']= 'PruebasAdmin/Agregar';
         //var_dump($data);
      $data1 = array( "header" => "Inicio" 
      	);
		$this->load->view('Admin/header', $data1);
		$this->load->view('Admin/nav');
		$this->load->view('Admin/bodyPruebas', $data);
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
    $respid= '';
    //var_dump($_POST);
		if ($_POST) {
      $cantidad= $_POST['cantidadPreguntas'];
      $count = count($_FILES);
    $config['upload_path']          = './././assets/img/imagenesPruebas';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 5000;

                $this->load->library('upload', $config);
			
			# code...
		
		 for($i=0; $i<$count; $i++)
    {              

        if ( ! $this->upload->do_upload('file1'))
                {
                        $res = array('error' => $this->upload->display_errors());

                       // $this->load->view('upload_form', $error);
                }
                else
                {
                        $res = array('upload_data' => $this->upload->data());
                 $data= array('tabla'=> "pruebas", 'datos'=> array('titulo' => $_POST['titulo'],
        'descripcion' => $_POST['descripcion'] ,
        'url' => 'assets/img/imagenesPruebas/'.$res['upload_data']['file_name'], 
        'fecha' => date('Y-m-d')));
                        $respid = $this->Admin_model->Save($data);
                        
			
                        
                }
    }
    for($e=0; $e<$cantidad; $e++)
    {
      $a = $e+1;
      $pregunta = $_POST['pregunta_'.$a];
      $respuesta1 = $_POST['respuesta1_'.$a];
      $respuesta2 = $_POST['respuesta2_'.$a];
      $respuesta3 = $_POST['respuesta3_'.$a];
      $respuesta4 = $_POST['respuesta4_'.$a]; 

      $data= array('tabla'=> "preguntas_pruebas", 'datos'=> array('id_pruebas' => $respid, 'pregunta' => $pregunta,
        'respuesta1' => $respuesta1 ,
        'respuesta2' => $respuesta2 ,
        'respuesta3' => $respuesta3 ,
        'respuesta4' => $respuesta4,
        ));
                        $res = $this->Admin_model->Save($data);
    }
    } else {
			$result  = array('status' => 300 , 'mensaje'=> 'ERROR' );
    	echo json_encode($result);
		}
    if ($res) {
    	# code...
    	$result  = array('status' => 200 , 'mensaje'=> 'OK' );
    	echo json_encode($result);
    }else{
    	$result  = array('status' => 300 , 'mensaje'=> $res );
    	echo json_encode($result);
    }
    
		

                
                
		
                
		
		
	}
	}
