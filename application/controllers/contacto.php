<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this -> load -> helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->library('session');

	}

	public function index()
	{
		$data['title'] = 'Visual Focus - Contacto';
		$this->load->view('template/header', $data); 
		$this->load->view('contactoview', $data);
		$this->load->view('template/footer'); 
	}


	public function comments()
	{
		$this->load->model('Model_contacto');
		if($this->Model_contacto->saveComments())
		{
			$this->session->set_flashdata('result',
				'<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Su Comenatio Ha sido enviado!</strong> Pronto nos pondremos en contacto.
			</div>');
			redirect('contacto/index');
		}else{
			$this->session->set_flashdata('result',
				'<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Algo Salio mal!</strong> Por favor intentelo mas tarde.
			</div>');
			redirect('contacto/index');
		}
		
	}
}
