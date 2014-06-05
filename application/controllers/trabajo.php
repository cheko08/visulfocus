<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trabajo extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this -> load -> helper('url');
		$this->load->helper('html');
	}


	public function index()
	{
		$data['title'] = 'Visual Focus - Trabaja con nostros';
		$this->load->view('template/header', $data); 
		$this->load->view('trabajoview', $data);
		$this->load->view('template/footer'); 
	}
}
