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

		$config['upload_path'] ='./uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '1000000';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';

		$this->load->library('upload', $config);

		/*if ( ! $this->upload->do_upload())
		{	
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			echo $config['upload_path'];
		}
		else
		{
			echo 'Funciono';
		}*/

		$this->upload->do_upload();
		$upload_data = $this->upload->data();
		$foto=$upload_data['file_name'];
		
		if($this->Model_Solicitudes->saveSolicitud($foto))
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
