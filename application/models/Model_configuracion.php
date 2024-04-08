<?php 
class Model_configuracion extends CI_Model
{

    function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
    public function eliminar_tabla_sys($tabla,$idtabla,$id){
		$this->db->WHERE($idtabla,$id);
		$this->db->delete($tabla);
	}
	public function editar_tabla_sys($tabla,$obj,$idtabla,$id){
		$this->db->WHERE($idtabla,$id);
		$this->db->update($tabla,$obj);
	}
	public function editar_institucion($tabla,$obj){
		$this->db->WHERE($idtabla,$id);
	$this->db->update($tabla,$obj);
	}

	public function insertar_tabla_sys($tabla,$obj){
		$this->db->insert($tabla,$obj);
		return $this->db->insert_id();
	}
	public function selec_registro_result($tabla,$idtabla,$id){
		return $this->db->query("SELECT * FROM $tabla WHERE $idtabla = $id")->result();
	}



}
