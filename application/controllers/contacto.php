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
				<strong>Su mensaje ha sido enviado!</strong> Pronto nos pondremos en contacto.
			</div>');
			
			$comments = $this->input->post('comments', TRUE);
			$mesage=$comments;
			$cabeceras = 'From: webmaster@example.com' . "\r\n" .
			'Reply-To: webmaster@example.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			mail('robertopachecorio@gmail.com','Mensaje de contacto',$mesage,$cabeceras);
			
			
			redirect('contacto/index');
		}else{
			$this->session->set_flashdata('result',
				'<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Mensaje no enviado!</strong> Por favor intentelo mas tarde.
			</div>');
			redirect('contacto/index');
		}
		
	}
}
