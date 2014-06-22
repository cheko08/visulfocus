<?php
/**
* 					
*/
class Model_Servicios extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getModelos()
	{
		$query=$this->db->query('SELECT * FROM modelos');
		return $query->result();
	}

	public function modelo($id)
	{
		$query=$this->db->query('SELECT * FROM modelos where id ='.$id.'');
		return $query->result();
	}
}