<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_administracion extends CI_Model
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
	public function listar_programa_guion(){
		return $this->db->query("SELECT programas_guion.idprogramas_guion, programas_guion.hora_guion, programas_guion.descrfipcion_guion, tipo_dias_guion.dia_de_semana, programas_guion.estado_programa_guion
		FROM programas_guion INNER JOIN tipo_dias_guion ON programas_guion.tipo_dias_guion_idtipo_dias_guion=tipo_dias_guion.idtipo_dias_guion 
		WHERE programas_guion.estado_programa_guion!='eliminar' 
		ORDER BY programas_guion.idprogramas_guion DESC;")->result();
   }
 

public function listar_categoria_periodico(){
	return $this->db->query("SELECT * FROM `categoria_periodico` WHERE `estado` LIKE 'activo' ORDER BY `fecha_creacion` DESC; ")->result();

}



public function listartodoPeriodico(){
		return $this->db->query("SELECT * FROM `periodico_diario` WHERE `estado` LIKE 'activo' or `estado` LIKE 'inactivo' ORDER BY `fecha_creacion` DESC;")->result();
   }
 

public function listar_periodico(){
	return $this->db->query("SELECT * FROM `categoria_periodico` WHERE `estado` LIKE 'activo'  ORDER BY `fecha_creacion` DESC; ")->result();

}
public function categoria_nombre($id){
	return $this->db->query("SELECT * FROM `categoria_periodico` WHERE `id` = $id ")->row();

}

public function listar_periodico_por_categoria($id){
	return $this->db->query("SELECT * FROM `periodico_diario` WHERE `estado` LIKE 'activo' AND `id_categoria`= $id ORDER BY `fecha_creacion` DESC ")->result();

}
public function listar_tipo_periodico(){
	return $this->db->query("SELECT * FROM `tipo_noticia` WHERE `estado`!='eliminar' ORDER BY `idtipo_noticia` DESC;")->result();
}


public function listar_noticia(){
	return $this->db->query("SELECT noticia.idnoticia, noticia.not_nombre, noticia.not_url,noticia.not_hora, noticia.not_fecha,noticia.not_descripcion,tipo_noticia.tipo_noticia,noticia.estado,noticia.estado_destacado FROM noticia INNER JOIN tipo_noticia ON noticia.idtipo=tipo_noticia.idtipo_noticia WHERE noticia.estado!='eliminar' AND not_tipo_dato='video' ORDER BY idnoticia DESC;")->result();
}
public function listar_noticia_imagen(){
	return $this->db->query("SELECT noticia.idnoticia, noticia.not_nombre, noticia.not_url,noticia.not_hora, noticia.not_fecha,noticia.not_descripcion,tipo_noticia.tipo_noticia,noticia.estado,noticia.estado_destacado FROM noticia INNER JOIN tipo_noticia ON noticia.idtipo=tipo_noticia.idtipo_noticia WHERE noticia.estado!='eliminar' AND not_tipo_dato='imagen' ORDER BY idnoticia DESC;")->result();
}


public function listar_tipo_notica(){
	return $this->db->query("SELECT * FROM `tipo_noticia` WHERE `estado` LIKE 'activo' ORDER BY `idtipo_noticia` DESC; ")->result();

}
public function listar_autoridades(){
	return $this->db->query("SELECT * FROM `autoridades` WHERE `estado`!='eliminar' ORDER BY `idautoridades` DESC;")->result();

}
public function listar_presentador(){
	return $this->db->query("SELECT * FROM `presentadores` WHERE `estado`!='eliminar' ORDER BY `idpresentadores` DESC;")->result();

}
public function listado_persona($id){
	return $this->db->query("SELECT * FROM vista_persona where ci='$id'")->row();
}	
	public function listado_usuario($id){
	return $this->db->query("SELECT * FROM dp_auth_users where username='$id'")->row();
}	
}
