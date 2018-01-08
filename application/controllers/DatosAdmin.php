<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatosAdmin extends CI_Controller {

	public function __construct() {
      parent::__construct();
   }
	public function agregar()
	{
    $result= '';
    $tabla= $_POST['tabla'];
    if ($tabla == 'datosInternos') {
      $data= array('tabla'=> $tabla, 'datos'=> array('nombre_completo' => $_POST['nombre_completo'],
        'edad' => $_POST['edad'] ,
        'estado_civil' => $_POST['estado_civil'] ,
        'dependientes' => $_POST['dependientes'] ,
        'ocupacion' => $_POST['ocupacion'] ,
        'derecho_violentado' => $_POST['derecho_violentado'] ,
        'sexo' => $_POST['sexo'] ,
        'genero' => $_POST['genero'] ,
        'estado' => $_POST['estado'] ,
        'municipio' => $_POST['municipio'] ,
        'email' => $_POST['email'] ,
        'acompanamiento' => $_POST['acompanamiento'] ,
        'observaciones' => $_POST['observaciones'] ,
        'fecha' => date('Y-m-d')));
                        $descarga = $this->Admin_model->Save($data);
                        $result  = array('status' => 200 , 'mensaje'=> 'OK' );
      echo json_encode($result);
    } elseif ($tabla == 'datosPublicos') {
      $data= array('tabla'=> $tabla, 'datos'=> array('nombre_completo' => $_POST['nombre_completo'],
        'edad' => $_POST['edad'] ,
        'ocupacion' => $_POST['ocupacion'] ,
        'derecho_violentado' => $_POST['derecho_violentado'] ,
        'genero' => $_POST['genero'] ,
        'estado' => $_POST['estado'] ,
        'municipio' => $_POST['municipio'] ,
        'email' => $_POST['email'] ,
        'observaciones' => $_POST['observaciones'] ,
        'fecha' => date('Y-m-d')));
                        $descarga = $this->Admin_model->Save($data);
                        $result  = array('status' => 200 , 'mensaje'=> 'OK' );
      echo json_encode($result);
    } else{
    $result  = array('status' => 300 , 'mensaje'=> 'ERROR' );
      echo json_encode($result);
			
      return $result;
      }
		
	}
	}
