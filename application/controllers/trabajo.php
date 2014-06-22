<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trabajo extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this -> load -> helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->library('session');
	}


	public function index()
	{
		$data['title'] = 'Visual Focus - Trabaja con nostros';
		$this->load->view('template/header', $data); 
		$this->load->view('trabajoview', $data);
		$this->load->view('template/footer'); 
	}

	public function solicitud()
	{
		$this->load->model('Model_Solicitudes');
		if($this->Model_Solicitudes->saveSolicitud())
		{
			$this->session->set_flashdata('result',
				'<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Su solicitud ha sido enviada!</strong> Pronto nos pondremos en contacto.
			</div>');
			redirect('trabajo/index');
		}else{
			$this->session->set_flashdata('result',
				'<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Solicitud no enviada!</strong> Por favor intentelo mas tarde.
			</div>');
			redirect('trabajo/index');
		}
		
	}
}
