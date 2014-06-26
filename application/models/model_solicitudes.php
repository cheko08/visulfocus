<?php
/**
* 					
*/
class Model_Solicitudes extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

	/**
 * Guarda solicitudes de trabajo en la BD
 * @return Boolean regresa True si guarda o false si hubo un error
 */
	public function saveSolicitud($foto)
	{
		$name = $this->input->post('name',TRUE);
		$dir = $this->input->post('dir', TRUE);
		$email = $this->input->post('email', TRUE);
		$tel_casa = $this->input->post('tel_casa', TRUE);
		$tel_cel = $this->input->post('tel_cel', TRUE);
		$ocupacion = $this->input->post('ocupacion', TRUE);
		$nacionalidad = $this->input->post('nacionalidad', TRUE);
		$radica = $this->input->post('radica', TRUE);
		$edad = $this->input->post('edad', TRUE);
		$estatura = $this->input->post('estatura', TRUE);
		$peso = $this->input->post('peso', TRUE);
		$piel = $this->input->post('piel', TRUE);
		$cabello = $this->input->post('cabello', TRUE);
		$ojos = $this->input->post('ojos', TRUE);
		$talla = $this->input->post('talla', TRUE);
		$calzado = $this->input->post('calzado', TRUE);
		$busto = $this->input->post('busto', TRUE);
		$cintura = $this->input->post('cintura', TRUE);
		$cadera = $this->input->post('cadera', TRUE);
		$habilidades = $this->input->post('habilidades', TRUE);
		$tiempo = $this->input->post('tiempo', TRUE);
		$vestuario = $this->input->post('vestuario', TRUE);
		$vestuario1 = $this->input->post('vestuario1', TRUE);
		$vestuario2 = $this->input->post('vestuario2', TRUE);
		$vestuario3 = $this->input->post('vestuario3', TRUE);
		$personalidad = $this->input->post('personalidad', TRUE);
		$eventos = $this->input->post('eventos', TRUE);


		
			$data = array(
				'nombre' => $name,
				'dir' => $dir,
				'email' => $email,
				'tel_casa' => $tel_casa,
				'tel_cel' => $tel_cel,
				'ocupacion' => $ocupacion,
				'nacionalidad' => $nacionalidad,
				'radica' => $radica,
				'edad' => $edad,
				'estatura' => $estatura,
				'peso' => $peso,
				'piel' => $piel,
				'cabello' => $cabello,
				'ojos' => $ojos,
				'talla_ropa' => $talla,
				'talla_calzado' => $calzado,
				'busto' => $busto,
				'cintura' => $cintura,
				'cadera' => $cadera,
				'habilidades' => $habilidades,
				'tiempo' => $tiempo,
				'vestuario' => $vestuario,
				'vestuario1' => $vestuario1,
				'vestuario2' => $vestuario2,
				'vestuario3' => $vestuario3,
				'personalidad' => $personalidad,
				'eventos' => $eventos,
				'foto_cuerpo' => $foto

				);

			if($this->db->insert('solicitudes',$data)){
				return TRUE;
			}else{
				return FALSE;
			}
		
	}
}