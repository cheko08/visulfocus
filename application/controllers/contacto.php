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
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('comments', 'Mensaje', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('result',
				'<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Mensaje no enviado!</strong> Algunos campos son requeridos para enviar el mensaje.
			</div>');
			redirect('contacto/index');
		}

		if($this->Model_contacto->saveComments())
		{
			$this->session->set_flashdata('result',
				'<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Su mensaje ha sido enviado!</strong> Pronto nos pondremos en contacto.
			</div>');
			
			$comments = $this->input->post('comments', TRUE);
			$nombre = $this->input->post('nombre', TRUE);
			$empresa = $this->input->post('empresa', TRUE);
			$to = 'contacto@visualfocusmx.com';
			$message=$comments;
			$message = wordwrap($message, 70);
			$email = $this->input->post('email', TRUE);
			$subject='Mensaje de contacto '.$empresa;
			$headers="From: $nombre <$email>\r\n";
			mail($to,$subject,$message,$headers);
			
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
