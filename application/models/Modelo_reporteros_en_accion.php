<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Modelo_reporteros_en_accion extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	
	}
//este modelo controla los reporteros
	public function listartodolosReporteros(){
		return $this->db->query("SELECT * FROM `publicaciones_reporteros_en_accion` WHERE `estado` LIKE 'activo' or `estado` LIKE 'inactivo'")->result();
   }

	


}