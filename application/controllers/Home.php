<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$datosg = $this->Admin_model->getData('home');
		$datosg1 = $this->Admin_model->getData('youtubehome');
         //$data = array();
         //$data['nombre'] = $this->session->userdata('nombre');
         
		$data = array( "header" => "Inicio");
		$data['datosg'] = $datosg;
		$data['datosg1'] = $datosg1;
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/body', $data);
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
	}
	public function Galeria()
	{
		if ($_GET) {
			$galeria = $this->Admin_model->getImagenesById($_GET['id']);
			$data = array( "header" => "Galeria",
				"imagenes"=> $galeria, "titulo"=> $_GET['titulo']);
			//var_dump($data['imagenes']);
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/galeriaDetalle',$data);
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
		} else {
			$i = 0;
		$datosg = $this->Admin_model->getData('galeria');
		foreach ($datosg as $ds) {
			# code...
			$imagenes[$i] = $this->Admin_model->getImagesById($ds->id);
			
			$i += 1;
		}
         //$data = array();
         //$data['nombre'] = $this->session->userdata('nombre');
         $data1['datosg'] = $datosg;
         //var_dump($imagenes);
         $data1['imagenes'] = $imagenes;
		$data = array( "header" => "Galeria");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyGaleria',$data1);
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');

		}
		
		
	}
	public function Videos()
	{
			$i = 0;
		$datosg = $this->Admin_model->getData('videos');
		
         //$data = array();
         //$data['nombre'] = $this->session->userdata('nombre');
         $data1['datosg'] = $datosg;
		$data = array( "header" => "Videos");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyVideos',$data1);
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');

		
		
	}
	
	public function EnviarMail(){
$email= $_POST['email'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$para      = 'luisvame30@gmail.com';
$titulo    = 'Contacto Pagina Web';
$mensaje   = "<strong>From: </strong>Pagina web<br />
<strong>Nombre: </strong>" . $nombre . "<br />
	<strong>Email: </strong>" . $email . "<br />	
	<strong>Phone: </strong>" . $telefono . "<br />	
	<strong>Message: </strong>" . $mensaje;
 
 $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($para, $titulo, $mensaje, $cabeceras);

$result  = array('status' => 200 , 'mensaje'=> 'Mensaje enviado.' );
    	echo json_encode($result);
	}
	public function Nosotros()
	{
		$data = array( "header" => "Nosotros");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyNosotros');
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
	}
	public function DatosPublico()
	{
		$data = array( "header" => "Nosotros");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyDatos');
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
	}
	public function DatosInternos()
	{
		$data = array( "header" => "Nosotros");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyDatosInterno');
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
	}
	public function Servicios()
	{
		$data = array( "header" => "Servicios");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyServicios');
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
	}
	public function Preguntas(){

		$preguntas = $this->Admin_model->getPreguntasById($_POST['id_prueba']);
		$resp;
		$preg;
		$respc;
		 foreach ($preguntas as $key ) {
		 	# code...
		 	$preg[]= $key->pregunta;
		 	$resp[]= $key->respuesta1;
		 	$resp[]= $key->respuesta2;
		 	$resp[]= $key->respuesta3;
		 	$resp[]= $key->respuesta4;
		 	$respc[]= $key->respuesta1;
		 }
		 $respuesta = array('preguntas' =>  $preg, 'respuestas'=> $resp, 'respuestas_correctas'=> $respc, 'cantidad_preguntas'=> count($preg) );
		 echo json_encode($respuesta);
	}
	public function Pruebas()
	{	$datosg = $this->Admin_model->getData('pruebas');

		
		$data = array( "header" => "Pruebas");
		$data['datosg']= $datosg;
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyPruebas',$data);
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
	}
	public function Contacto()
	{
		$data = array( "header" => "Contacto");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyContacto');
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
	}
	public function Descargas()
	{
		$datosg = $this->Admin_model->getData('descargas');
		 $data1['descargas'] = $datosg;
		$data = array( "header" => "Descargas");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyDescargas',$data1);
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
	}
}
