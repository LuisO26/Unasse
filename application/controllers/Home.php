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
		$data = array( "header" => "Inicio");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/body');
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
	public function Pruebas()
	{
		$data = array( "header" => "Pruebas");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyPruebas');
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
