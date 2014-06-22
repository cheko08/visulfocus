<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicios extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this -> load -> helper('url');
		$this->load->helper('html');
	}

	public function marketing()
	{
		$data['title'] = 'Visual Focus - Marketing Empresarial';
		$this->load->view('template/header', $data); 
		$this->load->view('marketingview', $data);
		$this->load->view('template/footer'); 
	}

	public function eventos()
	{
		$data['title'] = 'Visual Focus - Eventos-Logística';
		$this->load->view('template/header', $data); 
		$this->load->view('eventosview', $data);
		$this->load->view('template/footer'); 
	}

	public function modelos()
	{
		$data['title'] = 'Visual Focus - Modelos-Edecanes';
		$this->load->model('Model_Servicios');
		$query=$this->Model_Servicios->getModelos();
		$data['modelos'] = $query;

		$this->load->view('template/header', $data); 
		$this->load->view('modelosview', $data);
		$this->load->view('template/footer'); 
	}

	public function modelo($id)
	{
		$data['title'] = 'Visual Focus - Modelos-Edecanes';
		$this->load->model('Model_Servicios');
		$query=$this->Model_Servicios->modelo($id);
		$data['modelo'] = $query;

		$this->load->view('template/header', $data); 
		$this->load->view('modeloview', $data);
		$this->load->view('template/footer'); 
	}

	public function animacion()
	{
		$data['title'] = 'Visual Focus - Animación-Performance';
		$this->load->view('template/header', $data); 
		$this->load->view('animacionview', $data);
		$this->load->view('template/footer'); 
	}

	public function diseno()
	{
		$data['title'] = 'Visual Focus - Diseño';
		$this->load->view('template/header', $data); 
		$this->load->view('disenoview', $data);
		$this->load->view('template/footer'); 
	}

	public function audio()
	{
		$data['title'] = 'Visual Focus - Mobiliario Audio-Video';
		$this->load->view('template/header', $data); 
		$this->load->view('audioview', $data);
		$this->load->view('template/footer'); 
	}
}
