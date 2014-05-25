<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trabajo extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this -> load -> helper('url');
		$this->load->helper('html');
	}

	public function cv()
	{
		$data['title'] = 'Visual Focus - Trabaja con nostros';
		$this->load->view('template/header', $data); 
		$this->load->view('cvview', $data);
		$this->load->view('template/footer'); 
	}

	public function trabajos()
	{
		$data['title'] = 'Visual Focus - Trabaja con nostros';
		$this->load->view('template/header', $data); 
		$this->load->view('posicionesview', $data);
		$this->load->view('template/footer'); 
	}
}
