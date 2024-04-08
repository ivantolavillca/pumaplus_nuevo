<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_pagina extends CI_Controller
{


    public function __construct()
	{
		
        parent::__construct();

        $this->load->model('Modelo_stream');
        $this->load->model('Model_institucion');
          $this->load->model('Model_configuracion');
        $this->load->model('Modelo_periodico');
        date_default_timezone_set('America/La_Paz');
        if ($this->ion_auth->logged_in()) 
            redirect(site_url(Hasher::make(1)));
    }
    public function index()
	{
		redirect(base_url() . 'paginaInicio');
	}

	public function paginaInicio()
	{
		// $dato['menu'] = 'inicio';
		$dato['contenido'] = "vista_pagina/vista_principal";
		$dato['datcat'] = $this->Modelo_periodico->listar_categoria_periodico();
		$dato['dattipper'] = $this->Model_institucion->listar_tipo_noticia();
		$dato['dat'] = $this->Model_institucion->listar_institucion();
		$dato['stream'] = $this->Modelo_stream->listar_stream_principal();
		$dato['per_destacado'] = $this->Modelo_periodico->listar_destacado_periodico();
		$dato['noticia_destacado'] = $this->Model_institucion->noticia_destacado();
		$dato['sectorenlau_destacado'] = $this->Model_institucion->sectorenlau_destacado();
		$dato['destacado_destacado'] = $this->Model_institucion->destacadodehoy_destacado();
		$dato['autoridades'] = $this->Model_institucion->listar_autoridades();
		$dato['presentadores'] = $this->Model_institucion->listar_presentadores();
		
		$this->load->view("plantilla_pagina",$dato);
	}
	public function login()
	{
		// $dato['menu'] = 'inicio';
		// $dato['contenido'] = "vista_pagina/file_inicio";
		$this->load->view("login");
	}
	public function stream()
	{
		$dato['dat'] = $this->Model_institucion->listar_institucion();
		$dato['dattipper'] = $this->Model_institucion->listar_tipo_noticia();
		$dato['datcat'] = $this->Modelo_periodico->listar_categoria_periodico();
		$dato['stream'] = $this->Modelo_stream->listar_stream();

		$dato['contenido'] = "vista_pagina/vista_stream";

		$this->load->view("plantilla_pagina3",$dato);
	}
	public function periodicoDiario($id){
		$tabla='categoria_periodico';
		$idtabla='id';
		$dato['obj']=$this->Model_configuracion->selec_registro_result($tabla,$idtabla,$id);
		$dato['dat'] = $this->Model_institucion->listar_institucion();
		$dato['dattipper'] = $this->Model_institucion->listar_tipo_noticia();
		$dato['datcat'] = $this->Modelo_periodico->listar_categoria_periodico();
		$dato['listper'] = $this->Modelo_periodico->listar_periodico_por_categoria($id);
		$dato['contenido'] = "vista_pagina/vista_periodicoDiario";
		
		$this->load->view("plantilla_pagina2",$dato);
		
	}
	public function tipo_de_noticias($id){
		$tabla='tipo_noticia';
		$idtabla='idtipo_noticia';
		$dato['catego']=$this->Model_configuracion->selec_registro_result($tabla,$idtabla,$id);
		
		$dato['notic'] = $this->Model_institucion->listardatosdenoticias($id);
		$dato['dat'] = $this->Model_institucion->listar_institucion();
		$dato['datcat'] = $this->Modelo_periodico->listar_categoria_periodico();
		$dato['dattipper'] = $this->Model_institucion->listar_tipo_noticia();
		$dato['not_de'] = $this->Model_institucion->noticia_destacado_todo();
		$dato['contenido'] = "vista_pagina/vista_noticias";
		
		$this->load->view("plantilla_pagina",$dato);
		
	}
	public function sector_en_la_u(){

		$dato['dat'] = $this->Model_institucion->listar_institucion();
		$dato['datcat'] = $this->Modelo_periodico->listar_categoria_periodico();
		$dato['dattipper'] = $this->Model_institucion->listar_tipo_noticia();
		$dato['not_de'] = $this->Model_institucion->sectorenlau_destacado_todo();
		$dato['contenido'] = "vista_pagina/vista_sector_en_la_u";
		
		$this->load->view("plantilla_pagina",$dato);
		
	}


	public function destacado_de_hoy(){

		$dato['dat'] = $this->Model_institucion->listar_institucion();
		$dato['datcat'] = $this->Modelo_periodico->listar_categoria_periodico();
		$dato['not_de'] = $this->Model_institucion->destacadodehoy_destacado_todo();
		
		$dato['contenido'] = "vista_pagina/vista_destacado_de_hoy";
		
		$this->load->view("plantilla_pagina",$dato);
		
	}
	public function Programas_guion(){

		$dato['dat'] = $this->Model_institucion->listar_institucion();
		$dato['datcat'] = $this->Modelo_periodico->listar_categoria_periodico();
		$dato['dattipper'] = $this->Model_institucion->listar_tipo_noticia();
		$dato['pro_lav'] = $this->Model_institucion->programa_lunes_a_viernes();
		$dato['pro_s'] = $this->Model_institucion->programa_sabado();
		$dato['pro_d'] = $this->Model_institucion->programa_domingo();

		$dato['contenido'] = "vista_pagina/vista_pregramas_guion";
		
		$this->load->view("plantilla_pagina3",$dato);
		
	}
	public function mision_vision_valores(){

		$dato['dat'] = $this->Model_institucion->listar_institucion();
		$dato['datcat'] = $this->Modelo_periodico->listar_categoria_periodico();
		$dato['dattipper'] = $this->Model_institucion->listar_tipo_noticia();
		$dato['contenido'] = "vista_pagina/vista_mision";
		
		$this->load->view("plantilla_pagina",$dato);
		
	}
	public function periodicoDiarioDesc($id){
		$tabla='periodico_diario';
		$idtabla='id';
		$dato['dat'] = $this->Model_institucion->listar_institucion();
		$dato['datcat'] = $this->Modelo_periodico->listar_categoria_periodico();
		$dato['comenta'] = $this->Modelo_periodico->listar_comentario_por_periodico($id);
		$dato['dattipper'] = $this->Model_institucion->listar_tipo_noticia();
		$dato['obj']=$this->Model_configuracion->selec_registro_result($tabla,$idtabla,$id);
		
		$dato['contenido'] = "vista_pagina/vista_periodico_descripcion";
		
		$this->load->view("plantilla_pagina",$dato);
		
	}

	public  function guardar_comentario(){
		$id_periodico=$this->input->post('id_periodico');
		$nombre=$this->input->post('nombre');
		$email=$this->input->post('email');
		$comenario=$this->input->post('comenario');
		
		


	       
			$objeto=array(
				'comentario'=>$comenario,
				
				
				'com_fecha'=>date('Y-m-d'),
				'com_hora'=>date("H:i:s"),
				
				
				
				
				'com_nombre'=>$nombre,
				'com_email'=>$email,
				'periodico_diario_id'=>$id_periodico,

			);
			
			$this->Model_configuracion->insertar_tabla_sys('comentarios', $objeto);
	}
	public function hora_actual(){


		$hora_actual = date('H:i:s'); // Obtiene la hora actual en formato HH:MM:SS
    
		$response = array(
			'hora' => $hora_actual
		);
	
		echo json_encode($response);
	}
}
