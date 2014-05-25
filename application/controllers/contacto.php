<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this -> load -> helper('url');
		$this->load->helper('html');
	}

	public function index()
	{
		$data['title'] = 'Visual Focus - Contacto';
		$this->load->view('template/header', $data); 
		$this->load->view('contactoview', $data);
		$this->load->view('template/footer'); 
	}
}
