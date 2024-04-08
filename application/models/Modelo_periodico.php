<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_periodico extends CI_Model
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
	public function listartodoCategoriaPeriodico(){
		return $this->db->query("SELECT * FROM `categoria_periodico` WHERE `estado` LIKE 'activo' or `estado` LIKE 'inactivo' ORDER BY `fecha_creacion` DESC; ")->result();
   }
 

public function listar_categoria_periodico(){
	return $this->db->query("SELECT * FROM `categoria_periodico` WHERE `estado` LIKE 'activo' ORDER BY `fecha_creacion` DESC; ")->result();

}
public function listarunacategoria($id){
	return $this->db->query("SELECT * FROM `categoria_periodico` WHERE `id` = $id" )->row();
}




public function listartodoPeriodico(){
		return $this->db->query("SELECT * FROM `periodico_diario` WHERE `estado` LIKE 'activo' or `estado` LIKE 'inactivo' ORDER BY `id` DESC;")->result();
   }
 

public function listar_periodico(){
	return $this->db->query("SELECT * FROM `categoria_periodico` WHERE `estado` LIKE 'activo'  ORDER BY `fecha_creacion` DESC; ")->result();

}
public function categoria_nombre($id){
	return $this->db->query("SELECT * FROM `categoria_periodico` WHERE `id` = $id ")->row();

}

public function listar_periodico_por_categoria($id){
	return $this->db->query("SELECT * FROM `periodico_diario` WHERE `estado` LIKE 'activo' AND `id_categoria`= $id ORDER BY `id` DESC ")->result();


}

public function listar_destacado_periodico(){

	return $this->db->query("SELECT * FROM `periodico_diario` WHERE estado_destacado='destacado' and estado='activo'  ORDER BY `id` DESC ")->result();
}
public function listar_comentario_por_periodico($id){

	return $this->db->query("SELECT * FROM `comentarios` WHERE periodico_diario_id=$id  ORDER BY `idcomentarios` DESC ")->result();
}
}
