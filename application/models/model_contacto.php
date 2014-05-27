<?php
/**
* 
*/
class Model_contacto extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

/**
 * Guarda comentarios de contacto en la BD
 * @return Boolean regresa True si guarda o false si hubo un error
 */
	public function saveComments()
	{
		$nombre = $this->input->post('nombre',TRUE);
		$empresa = $this->input->post('empresa', TRUE);
		$email = $this->input->post('email', TRUE);
		$comments = $this->input->post('comments', TRUE);

		$data = array(
			'nombre' => $nombre,
			'empresa' => $empresa,
			'email' => $email,
			'comments' => $comments
			);

		if($this->db->insert('comments',$data)){
			return TRUE;
		}else{
			return FALSE;
		}
		
	}
	
}