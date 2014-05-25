<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicios extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this -> load -> helper('url');
		$this->load->helper('html');
	}

	public function modelos()
	{
		$data['title'] = 'Visual Focus - Modelos';
		$this->load->view('template/header', $data); 
		$this->load->view('modelosview', $data);
		$this->load->view('template/footer'); 
	}

	public function edecanes()
	{
		$data['title'] = 'Visual Focus - Edecanes';
		$this->load->view('template/header', $data); 
		$this->load->view('edecanesview', $data);
		$this->load->view('template/footer'); 
	}

	public function eventos()
	{
		$data['title'] = 'Visual Focus - Eventos';
		$this->load->view('template/header', $data); 
		$this->load->view('eventosview', $data);
		$this->load->view('template/footer'); 
	}
}
