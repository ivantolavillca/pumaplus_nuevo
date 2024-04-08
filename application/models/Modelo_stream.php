<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_stream extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}

	
	public function listarStream(){
		 return $this->db->query("SELECT * FROM `streaming` WHERE `id_stream` = 1" )->row();
	}
	public function listartodoStream(){
		return $this->db->query("SELECT * FROM `streaming` WHERE estado!='eliminar' ORDER BY id_stream DESC; ")->result();
   }
   public function editar_tabla_sys($tabla,$obj,$idtabla,$id){
	$this->db->where($idtabla,$id);
	$this->db->update($tabla,$obj);
}

public function listar_stream(){
	return $this->db->query("SELECT * FROM `streaming` WHERE `estado` LIKE 'activo' ")->result();

}
public function listar_stream_principal(){

	return $this->db->query("SELECT * FROM `streaming` WHERE `id_stream` = 1" )->row();
}
}
