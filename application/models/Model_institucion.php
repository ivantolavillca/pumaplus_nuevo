<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Model_institucion extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	
	}

	public function listar_institucion(){
		return $this->db->query("SELECT * FROM institucion WHERE idinstitucion='1' ")->row();
	}

	
	public function programa_lunes_a_viernes(){
		return $this->db->query("SELECT * FROM `programas_guion` WHERE`tipo_dias_guion_idtipo_dias_guion`=1 AND `estado_programa_guion`='activo' ORDER BY `hora_guion` ")->result();
	
	}
	public function programa_sabado(){
		return $this->db->query("SELECT * FROM `programas_guion` WHERE`tipo_dias_guion_idtipo_dias_guion`=2 AND `estado_programa_guion`='activo' ORDER BY `hora_guion` ")->result();
	
	}
	public function programa_domingo(){
		return $this->db->query("SELECT * FROM `programas_guion` WHERE`tipo_dias_guion_idtipo_dias_guion`=3 AND `estado_programa_guion`='activo' ORDER BY `hora_guion` ")->result();
	
	}
	public function noticia_destacado(){
		return $this->db->query("SELECT * FROM `noticia` WHERE estado_destacado='destacado' and estado='activo' AND`idtipo`=3 ORDER BY `idnoticia` DESC; ")->result();
	
		
	}
	public function sectorenlau_destacado(){
		return $this->db->query("SELECT * FROM `noticia` WHERE estado_destacado='destacado' and estado='activo' AND`idtipo`=4  ORDER BY `idnoticia` DESC ")->result();
	
	}
	public function destacadodehoy_destacado(){
		return $this->db->query("SELECT * FROM `noticia` WHERE estado_destacado='destacado' and estado='activo' AND`idtipo`=5 ORDER BY `idnoticia` DESC ")->result();
	
		
	}
	public function noticia_destacado_todo(){
		return $this->db->query("SELECT * FROM `noticia` WHERE estado='activo' AND`idtipo`=3 ORDER BY `idnoticia` DESC; ")->result();
	
		
	}
	public function sectorenlau_destacado_todo(){
		return $this->db->query("SELECT * FROM `noticia` WHERE estado_destacado='destacado' and estado='activo' AND`idtipo`=4  ORDER BY `idnoticia` DESC ")->result();
	
	}
	public function destacadodehoy_destacado_todo(){
		return $this->db->query("SELECT * FROM `noticia` WHERE  estado='activo' AND`idtipo`=5 ORDER BY `idnoticia` DESC ")->result();
	
	}
	public function listar_autoridades(){
		return $this->db->query("SELECT * FROM `autoridades` WHERE  estado='activo' ORDER BY `idautoridades` DESC ")->result();
	
	
	}
	public function listar_presentadores(){
		return $this->db->query("SELECT * FROM `presentadores` WHERE  estado='activo' ORDER BY `idpresentadores` DESC ")->result();
	
	}
	public function listar_tipo_noticia(){
		return $this->db->query("SELECT * FROM `tipo_noticia` WHERE  estado='activo' ORDER BY `idtipo_noticia` DESC ")->result();


	}
	public function listardatosdenoticias($id){
		return $this->db->query("SELECT * FROM `noticia` WHERE  estado='activo' AND idtipo=$id ORDER BY `idnoticia` DESC ")->result();


	}
}
