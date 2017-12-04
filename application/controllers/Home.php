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
		$data = array( "header" => "Galeria");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyGaleria');
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
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
		$data = array( "header" => "Descargas");
		$this->load->view('Home/header', $data);
		$this->load->view('Home/nav');
		$this->load->view('Home/bodyDescargas');
		$this->load->view('Home/footer');
		$this->load->view('Home/scripts');
	}
}
