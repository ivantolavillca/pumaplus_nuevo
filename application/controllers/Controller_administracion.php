<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_administracion extends Backend
{


	public function __construct()
	{

		parent::__construct();
		$this->load->model('Modelo_periodico');
		$this->load->model('Model_configuracion');
		$this->load->model('Modelo_administracion');
		$this->load->model('Model_institucion');
		$this->load->model('Modelo_stream');
		$this->load->library('upload');

		if (!$this->ion_auth->logged_in()) {
			//verifica login usuario
			redirect('sali', 'refresh');
		}
		date_default_timezone_set('America/La_Paz');
	}
	public function index()
	{



		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['listar_periodico'] = $this->Modelo_periodico->listartodoCategoriaPeriodico();
			$this->data['page_content'] = 'backend/vista_administracion/vista_categoria_periodico/index';
			$this->render();
		}
	}
	public function listar_programa_guion()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['list_pro'] = $this->Modelo_administracion->listar_programa_guion();
			$this->data['page_content'] = 'backend/vista_administracion/vista_guion/index';
			$this->render();
		}
	}

	public function crear_programa()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {


			$this->data['page_content'] = 'backend/vista_administracion/vista_guion/crear_programa';
			$this->render();
		}
	}
	public  function guardar_programa()
	{

		$hora_programa = $this->input->post('hora_programa');
		$nombre_programa = $this->input->post('nombre_programa');
		$dia_programa = $this->input->post('dia_programa');

		$user_id = $this->session->userdata('user_id');

		$objeto = array(


			'hora_guion' => $hora_programa,
			'descrfipcion_guion' => $nombre_programa,
			'tipo_dias_guion_idtipo_dias_guion' => $dia_programa,


			'estado_programa_guion' => 'activo',
			'id_user' => $user_id,


		);
		$this->Model_configuracion->insertar_tabla_sys('programas_guion', $objeto);
	}
	public  function cambiar_estado_programa()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado_programa_guion' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('programas_guion', $obj, 'idprogramas_guion', $id);
	}
	public  function elimina_programa()
	{
		$id = $this->input->post('id');
		$obj = array('estado_programa_guion' => 'eliminar');
		$this->Model_configuracion->editar_tabla_sys('programas_guion', $obj, 'idprogramas_guion', $id);
	}
	public function editar_programa($id)
	{


		$tabla = 'programas_guion';
		$idtabla = 'idprogramas_guion';
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['page_content'] = 'backend/vista_administracion/vista_guion/editar_programa';
		$this->render();
	}
	public  function guardar_editar_programa()
	{



		$id = $this->input->post('id');
		$hora_programa = $this->input->post('hora_programa');
		$nombre_programa = $this->input->post('nombre_programa');
		$dia_programa = $this->input->post('dia_programa');



		$user_id = $this->session->userdata('user_id');
		$obj1 = array(


			'hora_guion' => $hora_programa,
			'descrfipcion_guion' => $nombre_programa,
			'tipo_dias_guion_idtipo_dias_guion' => $dia_programa,



			'id_user' => $user_id,

		);

		$tabla = 'programas_guion';
		$idtabla = 'idprogramas_guion';
		$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
	}



	public function listar_tipo_noticia()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['list_tip'] = $this->Modelo_administracion->listar_tipo_periodico();
			$this->data['page_content'] = 'backend/vista_administracion/vista_tipo_noticia/index';
			$this->render();
		}
	}
	public function crear_tipo_noticia()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {


			$this->data['page_content'] = 'backend/vista_administracion/vista_tipo_noticia/crear_tipo_noticia';
			$this->render();
		}
	}
	public  function guardar_tipo_noticia()
	{

		$tipo_noticia = $this->input->post('tipo_noticia');




		$objeto = array(


			'tipo_noticia' => $tipo_noticia,
			'estado' => 'activo',







		);
		$this->Model_configuracion->insertar_tabla_sys('tipo_noticia', $objeto);
	}

	public  function cambiar_estado_tipo_noticia()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('tipo_noticia', $obj, 'idtipo_noticia', $id);
	}
	public function editar_tipo_noticia($id)
	{


		$tabla = 'tipo_noticia';
		$idtabla = 'idtipo_noticia';
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['page_content'] = 'backend/vista_administracion/vista_tipo_noticia/editar_tipo_noticia';
		$this->render();
	}



	public  function guardar_editar_tipo_noticia()
	{



		$id = $this->input->post('id');
		$tipo_noticia = $this->input->post('tipo_noticia');





		$obj1 = array(


			'tipo_noticia' => $tipo_noticia,






		);

		$tabla = 'tipo_noticia';
		$idtabla = 'idtipo_noticia';
		$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
	}
	public  function elimina_tipo_noticia()
	{
		$id = $this->input->post('id');
		$obj = array('estado' => 'eliminar');
		$this->Model_configuracion->editar_tabla_sys('tipo_noticia', $obj, 'idtipo_noticia', $id);
	}


	public function listar_noticia_videos()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['list_no'] = $this->Modelo_administracion->listar_noticia();
			$this->data['page_content'] = 'backend/vista_administracion/vista_noticia/index';
			$this->render();
		}
	}
	public function crear_noticia()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['list_tip'] = $this->Modelo_administracion->listar_tipo_notica();
			$this->data['page_content'] = 'backend/vista_administracion/vista_noticia/crear_noticia';
			$this->render();
		}
	}

	public  function guardar_noticia()
	{


		$not_nombre = mb_strtoupper($this->input->post('not_nombre'), 'utf-8');

		$user_id = $this->session->userdata('user_id');
		$not_hora = $this->input->post('not_hora');
		$not_fecha = $this->input->post('not_fecha');
		$not_descripcion = $this->input->post('not_descripcion');
		$tipo_not = $this->input->post('tipo_not');
		$not_dest = $this->input->post('not_dest');



		// Configurar la carga del archivo
		// $config['upload_path'] = 'videos_noticias/';
		// $config['allowed_types'] = 'mp4|avi|flv';
		// $config['max_size'] = '5000000';

		// Obtener el nombre original del archivo
		$originalName = $_FILES['video']['name'];

		// Generar un nombre único para el video
		$newName = uniqid() . '_' . $originalName;

		// Ruta donde se guardará el video
		$uploadPath = 'assets/archivos_noticias/' . $newName;

		// Mover el archivo al destino
		move_uploaded_file($_FILES['video']['tmp_name'], $uploadPath);




		$objeto = array(


			'not_nombre' => $not_nombre,
			'not_url' => $newName,
			'id_user' => $user_id,
			'not_hora' => $not_hora,
			'not_fecha' => $not_fecha,

			'not_descripcion' => $not_descripcion,
			'not_fecha_creacion' => date('Y-m-d'),
			'idtipo' => $tipo_not,

			'estado' => 'activo',

			'estado_destacado' => $not_dest,
			'not_tipo_dato' => 'video',
			'not_url_completa' => base_url() . 'assets/archivos_noticias/' . $newName,





		);
		$this->Model_configuracion->insertar_tabla_sys('noticia', $objeto);
	}
	public  function cambiar_estado_noticia()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('noticia', $obj, 'idnoticia', $id);
	}
	public  function elimina_noticia()
	{
		$id = $this->input->post('id');
		$obj = array('estado' => 'eliminar');
		$this->Model_configuracion->editar_tabla_sys('noticia', $obj, 'idnoticia', $id);
	}
	public function editar_noticia($id)
	{


		$tabla = 'noticia';
		$idtabla = 'idnoticia';
		$this->data['list_tip'] = $this->Modelo_administracion->listar_tipo_notica();
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['page_content'] = 'backend/vista_administracion/vista_noticia/editar_noticia';
		$this->render();
	}

	public  function guardar_editar_noticia()
	{



		$id = $this->input->post('id_noticia');
		$estado = $this->input->post('estado');


		$not_nombre = mb_strtoupper($this->input->post('not_nombre'), 'utf-8');
		$not_url = $this->input->post('not_url');
		$user_id = $this->session->userdata('user_id');
		$not_hora = $this->input->post('not_hora');
		$not_fecha = $this->input->post('not_fecha');
		$not_descripcion = $this->input->post('not_descripcion');
		$tipo_not = $this->input->post('tipo_not');
		$not_dest = $this->input->post('not_dest');

		$this->load->library('upload');

		// Configurar la carga del archivo
		$config['upload_path'] = 'videos_noticias/';
		$config['allowed_types'] = 'mp4|avi|flv';
		$config['max_size'] = '5000000';

		// Inicializar la carga del archivo
		$this->upload->initialize($config);

		if ($this->upload->do_upload('video')) {

			$obj1 = array(




				'not_nombre' => $not_nombre,
				'not_url' => $this->upload->data('file_name'),
				'id_user' => $user_id,
				'not_hora' => $not_hora,
				'not_fecha' => $not_fecha,

				'not_descripcion' => $not_descripcion,

				'idtipo' => $tipo_not,

				'estado' => $estado,

				'estado_destacado' => $not_dest,




			);

			$tabla = 'noticia';
			$idtabla = 'idnoticia';
			$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
		}
	}
	public function editar_pagina_pricipal()
	{


		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['datos_institucion'] = $this->Model_institucion->listar_institucion();
			$this->data['page_content'] = 'backend/vista_administracion/vista_administracion_web/editar_pagina_principal';
			$this->render();
		}
	}

	public function guardar_editado_pagina_principal()
	{

		$id = $this->input->post('idinstitucion');



		$nombre = mb_strtoupper($this->input->post('nombre'), 'utf-8');
		$titulo = mb_strtoupper($this->input->post('titulo'), 'utf-8');
		$subtitulo = mb_strtoupper($this->input->post('subtitulo'), 'utf-8');
		$historia = mb_strtoupper($this->input->post('historia'), 'utf-8');
		$mision = mb_strtoupper($this->input->post('mision'), 'utf-8');
		$vision = mb_strtoupper($this->input->post('vision'), 'utf-8');

		$instagram = $this->input->post('instagram');
		$tiktok = $this->input->post('tiktok');
		$facebook = $this->input->post('facebook');
		$youtube = $this->input->post('youtube');
		$twitter = $this->input->post('twitter');
		$telefono = $this->input->post('telefono');
		$user_id = $this->session->userdata('user_id');




		$obj1 = array(




			'institucion_nombre' => $nombre,
			'ins_titulo' => $titulo,
			'ins_subtitulo' => $subtitulo,
			'ins_mision' => $mision,
			'ins_vision' => $vision,
			'ins_historia' => $historia,
			'ins_instagram' => $instagram,
			'ins_tiktok' => $tiktok,
			'ins_url_facebook' => $facebook,
			'ins_youtube' => $youtube,
			'ins_twitter' => $twitter,
			'ins_telefono' => $telefono,
			'ins_usuario' => $user_id,




		);

		$tabla = 'institucion';
		$idtabla = 'idinstitucion';
		$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
	}
	public function admin_autoridades()
	{


		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['aut'] = $this->Modelo_administracion->listar_autoridades();
			$this->data['page_content'] = 'backend/vista_administracion/vista_administracion_web/admin_autoridades';
			$this->render();
		}
	}
	public function nueva_autoridad()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {


			$this->data['page_content'] = 'backend/vista_administracion/vista_administracion_web/crear_autoridad';
			$this->render();
		}
	}


	public  function guardar_autoridad()
	{




		$aut_nombre = mb_strtoupper($this->input->post('aut_nombre'), 'utf-8');
		$aut_cargo = mb_strtoupper($this->input->post('aut_cargo'), 'utf-8');
		$aut_gestion = mb_strtoupper($this->input->post('aut_gestion'), 'utf-8');
		$aut_face = $this->input->post('aut_face');



		$imagen = $_FILES['imagen_aut']['tmp_name'];
		if ($imagen == null) {
			$imag = '';
		} else {
			list($ancho, $alto) = getimagesize($_FILES['imagen_aut']['tmp_name']);
			$nuevo_ancho = 400;
			$nuevo_alto = 600;
			if ($_FILES['imagen_aut']['type'] == "image/jpg" || $_FILES['imagen_aut']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/img_autoridad/autoridad_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen_aut']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag = "autoridad_" . $ima;
			} else {
				if ($_FILES['imagen_aut']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/img_autoridad/autoridad_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen_aut']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag = "autoridad_" . $ima;
				} else {
					if ($_FILES['imagen_aut']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/img_autoridad/autoridad_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen_aut']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag = "autoridad_" . $ima;
					} else {
						$imag = '';
					}
				}
			}
		}
		$obj = array(
			'aut_nombre' => $aut_nombre,
			'aut_cargo' => $aut_cargo,
			'aut_gestion' => $aut_gestion,
			'link_face' => $aut_face,

			'img_autoridad' => $imag,


			'estado' => 'activo',

		);

		$this->Model_configuracion->insertar_tabla_sys('autoridades', $obj);
	}


	public function cambiar_estado_autoridad()
	{


		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('autoridades', $obj, 'idautoridades', $id);
	}
	public  function eliminar_autoridad()
	{
		$id = $this->input->post('id');
		$obj = array('estado' => 'eliminar');
		$this->Model_configuracion->editar_tabla_sys('autoridades', $obj, 'idautoridades', $id);
	}
	public function editar_autoridad($id)
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

		$tabla = 'autoridades';
		$idtabla = 'idautoridades';
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['page_content'] = 'backend/vista_administracion/vista_administracion_web/editar_autoridades';
		$this->render();
		}
	}


	public  function guardar_editado_autoridad()
	{
		$id = $this->input->post('id_autoridad');
		$estado = $this->input->post('estado');
		$aut_nombre = mb_strtoupper($this->input->post('aut_nombre'), 'utf-8');
		$aut_cargo = mb_strtoupper($this->input->post('aut_cargo'), 'utf-8');
		$aut_gestion = mb_strtoupper($this->input->post('aut_gestion'), 'utf-8');
		$aut_face = $this->input->post('aut_face');


		$imagen = $_FILES['imagen_aut']['tmp_name'];
		if ($imagen == null) {
			$imag = '';
		} else {
			list($ancho, $alto) = getimagesize($_FILES['imagen_aut']['tmp_name']);
			$nuevo_ancho = 400;
			$nuevo_alto = 600;
			if ($_FILES['imagen_aut']['type'] == "image/jpg" || $_FILES['imagen_aut']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/img_autoridad/autoridad_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen_aut']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag = "autoridad_" . $ima;
			} else {
				if ($_FILES['imagen_aut']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/img_autoridad/autoridad_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen_aut']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag = "autoridad_" . $ima;
				} else {
					if ($_FILES['imagen_aut']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/img_autoridad/autoridad_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen_aut']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag = "autoridad_" . $ima;
					} else {
						$imag = '';
					}
				}
			}
		}

		$obj1 = array(


			'aut_nombre' => $aut_nombre,
			'aut_cargo' => $aut_cargo,
			'aut_gestion' => $aut_gestion,
			'link_face' => $aut_face,

			'img_autoridad' => $imag,
			'estado' => $estado,



		);

		$tabla = 'autoridades';
		$idtabla = 'idautoridades';
		$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
	}
	public function admin_presentadores()
	{


		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['aut'] = $this->Modelo_administracion->listar_presentador();
			$this->data['page_content'] = 'backend/vista_administracion/vista_administracion_web/admin_presentadores';
			$this->render();
		}
	}
	public function nueva_presentador()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {


			$this->data['page_content'] = 'backend/vista_administracion/vista_administracion_web/crear_presentador';
			$this->render();
		}
	}
	public  function guardar_presentador()
	{




		$pres_nombre = mb_strtoupper($this->input->post('pres_nombre'), 'utf-8');
		$pres_cargo = mb_strtoupper($this->input->post('pres_cargo'), 'utf-8');

		$pres_face = $this->input->post('pres_face');



		$imagen = $_FILES['imagen_pres']['tmp_name'];
		if ($imagen == null) {
			$imag = '';
		} else {
			list($ancho, $alto) = getimagesize($_FILES['imagen_pres']['tmp_name']);
			$nuevo_ancho = 400;
			$nuevo_alto = 600;
			if ($_FILES['imagen_pres']['type'] == "image/jpg" || $_FILES['imagen_pres']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/img_presentador/presentador_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen_pres']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag = "presentador_" . $ima;
			} else {
				if ($_FILES['imagen_pres']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/img_presentador/presentador_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen_pres']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag = "presentador_" . $ima;
				} else {
					if ($_FILES['imagen_pres']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/img_presentador/presentador_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen_pres']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag = "presentador_" . $ima;
					} else {
						$imag = '';
					}
				}
			}
		}
		$obj = array(
			'pres_nombre' => $pres_nombre,
			'pres_cargo' => $pres_cargo,

			'link_face' => $pres_face,

			'pres_img' => $imag,


			'estado' => 'activo',

		);

		$this->Model_configuracion->insertar_tabla_sys('presentadores', $obj);
	}


	public function cambiar_estado_presentador()
	{


		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('presentadores', $obj, 'idpresentadores', $id);
	}
	public  function eliminar_presentador()
	{
		$id = $this->input->post('id');
		$obj = array('estado' => 'eliminar');
		$this->Model_configuracion->editar_tabla_sys('presentadores', $obj, 'idpresentadores', $id);
	}
	public function editar_presentador($id)
	{


		$tabla = 'presentadores';
		$idtabla = 'idpresentadores';
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['page_content'] = 'backend/vista_administracion/vista_administracion_web/editar_presentador';
		$this->render();
	}


	public  function guardar_editado_presentador()
	{
		$id = $this->input->post('id_presentador');
		$estado = $this->input->post('estado');
		$pres_nombre = mb_strtoupper($this->input->post('pres_nombre'), 'utf-8');
		$pres_cargo = mb_strtoupper($this->input->post('pres_cargo'), 'utf-8');

		$pres_face = $this->input->post('pres_face');

		$imagen = $_FILES['imagen_pres']['tmp_name'];
		if ($imagen == null) {
			$imag = '';
		} else {
			list($ancho, $alto) = getimagesize($_FILES['imagen_pres']['tmp_name']);
			$nuevo_ancho = 400;
			$nuevo_alto = 600;
			if ($_FILES['imagen_pres']['type'] == "image/jpg" || $_FILES['imagen_pres']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/img_presentador/presentador_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen_pres']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag = "presentador_" . $ima;
			} else {
				if ($_FILES['imagen_pres']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/img_presentador/presentador_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen_pres']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag = "presentador_" . $ima;
				} else {
					if ($_FILES['imagen_pres']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/img_presentador/presentador_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen_pres']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag = "presentador_" . $ima;
					} else {
						$imag = '';
					}
				}
			}
		}

		$obj1 = array(


			'pres_nombre' => $pres_nombre,
			'pres_cargo' => $pres_cargo,

			'link_face' => $pres_face,

			'pres_img' => $imag,
			'estado' => $estado,



		);

		$tabla = 'presentadores';
		$idtabla = 'idpresentadores';
		$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
	}


	public function buscar_persona()
	{
		$carnet = $this->input->post('ci');
		$obj = $this->Modelo_administracion->listado_persona($carnet);
		$usuario = $this->Modelo_administracion->listado_usuario($carnet);
		$var = 'hola';
		if ($usuario) {
			echo json_encode($var);
		} else {
			echo json_encode($obj);
		}
	}
	public function reporteros_en_accion()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {


			$this->data['page_content'] = 'backend/vista_administracion/vista_reporteros/reporteros_en_accion';
			$this->render();
		}
	}



	public function listar_noticia_imagenes()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['list_noticia_imagen'] = $this->Modelo_administracion->listar_noticia_imagen();
			$this->data['page_content'] = 'backend/vista_administracion/vista_noticia/index_imagenes.php';
			$this->render();
		}
	}
	public function guardar_tipo_noticia_imagen()
	{

		$not_nombre = mb_strtoupper($this->input->post('not_nombre'), 'utf-8');

		$user_id = $this->session->userdata('user_id');
		$not_hora = $this->input->post('not_hora');
		$not_fecha = $this->input->post('not_fecha');
		$not_descripcion = $this->input->post('not_descripcion');
		$tipo_not = $this->input->post('tipo_not');
		$not_dest = $this->input->post('not_dest');


		$imagen = $_FILES['imagen_noticia']['tmp_name'];
		if ($imagen == null) {
			$imag = '';
		} else {
			list($ancho, $alto) = getimagesize($_FILES['imagen_noticia']['tmp_name']);
			$nuevo_ancho = 616;
			$nuevo_alto = 293;
			if ($_FILES['imagen_noticia']['type'] == "image/jpg" || $_FILES['imagen_noticia']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/archivos_noticias/noticia_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen_noticia']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag = "noticia_" . $ima;
			} else {
				if ($_FILES['imagen_noticia']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/archivos_noticias/noticia_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen_noticia']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag = "noticia_" . $ima;
				} else {
					if ($_FILES['imagen_noticia']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/archivos_noticias/noticia_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen_noticia']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag = "noticia_" . $ima;
					} else {
						$imag = '';
					}
				}
			}
		}





		$objeto = array(


			'not_nombre' => $not_nombre,
			'not_url' => $imag,
			'id_user' => $user_id,
			'not_hora' => $not_hora,
			'not_fecha' => $not_fecha,

			'not_descripcion' => $not_descripcion,
			'not_fecha_creacion' => date('Y-m-d'),
			'idtipo' => $tipo_not,

			'estado' => 'activo',

			'estado_destacado' => $not_dest,
			'not_tipo_dato' => 'imagen',
			'not_url_completa' => base_url() . 'assets/archivos_noticias/' . $imag,





		);
		$this->Model_configuracion->insertar_tabla_sys('noticia', $objeto);
	}
	public function crear_noticia_imagen()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['list_tip'] = $this->Modelo_administracion->listar_tipo_notica();
			$this->data['page_content'] = 'backend/vista_administracion/vista_noticia/crear_noticia_imagen';
			$this->render();
		}
	}
	public  function cambiar_estado_noticia_imagen()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('noticia', $obj, 'idnoticia', $id);
	}
	public  function elimina_noticia_imagen()
	{
		$id = $this->input->post('id');
		$obj = array('estado' => 'eliminar');
		$this->Model_configuracion->editar_tabla_sys('noticia', $obj, 'idnoticia', $id);
	}
	public function editar_noticia_imagen($id)
	{


		$tabla = 'noticia';
		$idtabla = 'idnoticia';
		$this->data['list_tip'] = $this->Modelo_administracion->listar_tipo_notica();
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['page_content'] = 'backend/vista_administracion/vista_noticia/editar_noticia_imagen';
		$this->render();
	}

	public  function guardar_editar_noticia_imagen()
	{



		$id = $this->input->post('id_noticia');
		$estado = $this->input->post('estado');


		$not_nombre = mb_strtoupper($this->input->post('not_nombre'), 'utf-8');
		$not_url = $this->input->post('not_url');
		$user_id = $this->session->userdata('user_id');
		$not_hora = $this->input->post('not_hora');
		$not_fecha = $this->input->post('not_fecha');
		$not_descripcion = $this->input->post('not_descripcion');
		$tipo_not = $this->input->post('tipo_not');
		$not_dest = $this->input->post('not_dest');

		$this->load->library('upload');

		// Configurar la carga del archivo
		$config['upload_path'] = 'videos_noticias/';
		$config['allowed_types'] = 'mp4|avi|flv';
		$config['max_size'] = '5000000';

		// Inicializar la carga del archivo
		$this->upload->initialize($config);

		if ($this->upload->do_upload('video')) {

			$obj1 = array(




				'not_nombre' => $not_nombre,
				'not_url' => $this->upload->data('file_name'),
				'id_user' => $user_id,
				'not_hora' => $not_hora,
				'not_fecha' => $not_fecha,

				'not_descripcion' => $not_descripcion,

				'idtipo' => $tipo_not,

				'estado' => $estado,

				'estado_destacado' => $not_dest,




			);

			$tabla = 'noticia';
			$idtabla = 'idnoticia';
			$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
		}
	}
	public function listar_periodico()
	{



		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['listar_periodico'] = $this->Modelo_periodico->listartodoCategoriaPeriodico();
			$this->data['page_content'] = 'backend/vista_administracion/vista_categoria_periodico/index';
			$this->render();
		}
	}
	public  function cambiar_estado_categoria_periodico()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('categoria_periodico', $obj, 'id', $id);
	}
	public  function eliminar_categoria_periodico()
	{
		$id = $this->input->post('id');
		$obj = array('estado' => 'eliminar');
		$this->Model_configuracion->editar_tabla_sys('categoria_periodico', $obj, 'id', $id);
	}

	public function crear_categoria_periodico()
	{



		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {


			$this->data['page_content'] = 'backend/vista_administracion/vista_categoria_periodico/crear_categoria_periodico';
			$this->render();
		}
	}
	public  function guardar_categoria_periodico()
	{

		$nombre_categoria = $this->input->post('nombre_categoria');

		$user_id = $this->session->userdata('user_id');
		$date = date('Y-m-d');
		$objeto = array(
			'categoria_periodico' => $nombre_categoria,


			'estado' => 'activo',
			'id_user' => $user_id,
			'fecha_creacion' => $date,

		);
		$this->Model_configuracion->insertar_tabla_sys('categoria_periodico', $objeto);
	}
	public function editar_categoria_periodico($id)
	{


		$tabla = 'categoria_periodico';
		$idtabla = 'id';
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['page_content'] = 'backend/vista_administracion/vista_categoria_periodico/editar_categoria_periodico';
		$this->render();
	}
	public  function guardar_editar_categoria_periodico()
	{
		$id = $this->input->post('id');


		$nombre_categoria = $this->input->post('nombre_categoria');


		$estado = $this->input->post('estado');
		$user_id = $this->session->userdata('user_id');
		$obj1 = array(

			'id' => $id,
			'categoria_periodico' => $nombre_categoria,


			'estado' => $estado,

			'id_user' => $user_id,
		);

		$tabla = 'categoria_periodico';
		$idtabla = 'id';
		$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
	}







	//MODULO PARA CREAR PERIODICOS


	public function listar_periodicos()
	{



		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['listar_perio'] = $this->Modelo_periodico->listartodoPeriodico();
			$this->data['page_content'] = 'backend/vista_administracion/vista_periodico/index';
			$this->render();
		}
	}
	public  function cambiar_estado_periodico()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('periodico_diario', $obj, 'id', $id);
	}
	public  function elimina_periodico()
	{
		$id = $this->input->post('id');
		$obj = array('estado' => 'eliminar');
		$this->Model_configuracion->editar_tabla_sys('periodico_diario', $obj, 'id', $id);
	}

	public function crear_periodico()
	{



		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {


			$this->data['page_content'] = 'backend/vista_administracion/vista_periodico/crear_periodico';
			$this->data['categoria_per'] = $this->Modelo_periodico->listar_categoria_periodico();
			$this->render();
		}
	}
	public  function guardar_periodico()
	{


		$this->load->library('upload');

		// Configurar la carga del archivo
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'mp4|avi|flv';
		$config['max_size'] = '5000000';

		// Inicializar la carga del archivo
		$this->upload->initialize($config);

		if ($this->upload->do_upload('video')) {
			$data = array(

				'id_categoria' => $this->input->post('cate_periodico'),

				'id_user' => $this->session->userdata('user_id'),
				'periodico_titulo' => mb_strtoupper($this->input->post('per_titulo'), 'utf-8'),
				'periodico_fecha' => $this->input->post('per_fecha'),
				'hora_periodico' => $this->input->post('per_hora'),
				'periodico_descripcion' => $this->input->post('per_descripcion'),
				'estado' => 'activo',
				'estado_destacado' => $this->input->post('per_dest'),

				'periodico_imagen' => $this->upload->data('file_name')



			);

			$this->Model_configuracion->insertar_tabla_sys('periodico_diario', $data);
		}




		// $obj=array(
		// 	'periodico_titulo'=>"dasdasd",
		// 	'periodico_descripcion'=>"sadasda",
		// 	'periodico_imagen'=>$nombre,


		// 	'periodico_fecha'=>"dasdad",
		// 	'hora_periodico'=>"asdada",
		// 	'estado'=>'activo',
		// 	'fecha_creacion'=>date('Y-m-d'),
		// 	'id_user'=>1,
		// 	'id_categoria'=>1,
		// 	'estado_destacado'=>1

		// );


	}
	public function editar_periodico($id)
	{


		$tabla = 'periodico_diario';
		$idtabla = 'id';
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['categoria_per'] = $this->Modelo_periodico->listar_categoria_periodico();
		$this->data['page_content'] = 'backend/vista_administracion/vista_periodico/editar_periodico';
		$this->render();
	}
	public  function guardar_editar_periodico()
	{
		$categoria_id = $this->input->post('cate_periodico');
		$id = $this->input->post('id_per');
		$user_id = $this->session->userdata('user_id');
		$titulo = mb_strtoupper($this->input->post('per_titulo'), 'utf-8');
		$fecha_publicacion = $this->input->post('per_fecha');
		$hora_publicacion = $this->input->post('per_hora');
		$descripcion = $this->input->post('per_descripcion');
		$per_dest = $this->input->post('per_dest');
		$this->load->library('upload');

		// Configurar la carga del archivo
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'mp4|avi|flv';
		$config['max_size'] = '5000000';

		// Inicializar la carga del archivo
		$this->upload->initialize($config);

		if ($this->upload->do_upload('video')) {


			$obj1 = array(
				'periodico_titulo' => $titulo,
				'periodico_descripcion' => $descripcion,
				'periodico_imagen' => $this->upload->data('file_name'),

				'periodico_fecha' => $fecha_publicacion,
				'hora_periodico' => $hora_publicacion,

				'estado' => 'activo',
				'fecha_creacion' => date('Y-m-d'),
				'id_user' => $user_id,
				'id_categoria' => $categoria_id,
				'estado_destacado' => $per_dest
			);
		}
		$tabla = 'periodico_diario';
		$idtabla = 'id';
		$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
	}
	public function listar_stream()
	{



		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['page_content'] = 'backend/vista_administracion/vista_stream/index';
			$this->render();
		}
	}

	public function crearStream()
	{



		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {


			$this->data['page_content'] = 'backend/vista_administracion/vista_stream/create_stream';
			$this->render();
		}
	}
	public  function cambiar_estado_usuario()
	{
		$idstream = $this->input->post('id_stream');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('streaming', $obj, 'id_stream', $idstream);
	}
	public  function guardarnuevostream()
	{

		$titulostream = $this->input->post('titulostream');
		$desc_stream = $this->input->post('desc_stream');
		$key_acceso = $this->input->post('key_acceso');
		$user_id = $this->session->userdata('user_id');
		$date = date('Y-m-d');
		$objeto = array(
			'titulo_stream' => $titulostream,
			'descripcion_stream' => $desc_stream,
			'key_stream' => $key_acceso,
			'estado' => 'activo',
			'id_usuario' => $user_id,
			'fecha_creacion' => $date,

		);
		$this->Model_configuracion->insertar_tabla_sys('streaming', $objeto);
	}
	public  function editarStream($id)
	{

		$tabla = 'streaming';
		$idtabla = 'id_stream';
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['page_content'] = 'backend/vista_administracion/vista_stream/edit_stream';
		$this->render();
	}
	public  function guardar_stream_editado()
	{
		$id_stream = $this->input->post('id_stream');


		$titulostream = $this->input->post('titulostream');
		$desc_stream = $this->input->post('desc_stream');
		$key_acceso = $this->input->post('key_acceso');
		$estado = $this->input->post('estado');
		$user_id = $this->session->userdata('user_id');
		$obj1 = array(

			'id_stream' => $id_stream,
			'titulo_stream' => $titulostream,
			'descripcion_stream' => $desc_stream,
			'key_stream' => $key_acceso,
			'estado' => $estado,

			'id_usuario' => $user_id,
		);

		$tabla = 'streaming';
		$idtabla = 'id_stream';
		$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id_stream);
	}
	public  function eliminar_stream()
	{
		$id_stream = $this->input->post('idstream');
		$obj = array('estado' => 'eliminar');
		$this->Modelo_stream->editar_tabla_sys('streaming', $obj, 'id_stream', $id_stream);
	}
	public function listar_periodico_imagenes()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {
			$this->data['list_noticia_imagen'] = $this->Modelo_administracion->listar_noticia_imagen();
			$this->data['page_content'] = 'backend/vista_administracion/vista_periodico/index_imagen.php';
			$this->render();
		}
	}
	public function guardar_tipo_periodico_imagen()
	{

		$not_nombre = mb_strtoupper($this->input->post('not_nombre'), 'utf-8');

		$user_id = $this->session->userdata('user_id');
		$not_hora = $this->input->post('not_hora');
		$not_fecha = $this->input->post('not_fecha');
		$not_descripcion = $this->input->post('not_descripcion');
		$tipo_not = $this->input->post('tipo_not');
		$not_dest = $this->input->post('not_dest');


		$imagen = $_FILES['imagen_noticia']['tmp_name'];
		if ($imagen == null) {
			$imag = '';
		} else {
			list($ancho, $alto) = getimagesize($_FILES['imagen_noticia']['tmp_name']);
			$nuevo_ancho = 616;
			$nuevo_alto = 293;
			if ($_FILES['imagen_noticia']['type'] == "image/jpg" || $_FILES['imagen_noticia']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/archivos_noticias/noticia_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen_noticia']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag = "noticia_" . $ima;
			} else {
				if ($_FILES['imagen_noticia']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/archivos_noticias/noticia_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen_noticia']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag = "noticia_" . $ima;
				} else {
					if ($_FILES['imagen_noticia']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/archivos_noticias/noticia_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen_noticia']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag = "noticia_" . $ima;
					} else {
						$imag = '';
					}
				}
			}
		}





		$objeto = array(


			'not_nombre' => $not_nombre,
			'not_url' => $imag,
			'id_user' => $user_id,
			'not_hora' => $not_hora,
			'not_fecha' => $not_fecha,

			'not_descripcion' => $not_descripcion,
			'not_fecha_creacion' => date('Y-m-d'),
			'idtipo' => $tipo_not,

			'estado' => 'activo',

			'estado_destacado' => $not_dest,
			'not_tipo_dato' => 'imagen',
			'not_url_completa' => base_url() . 'assets/archivos_noticias/' . $imag,





		);
		$this->Model_configuracion->insertar_tabla_sys('noticia', $objeto);
	}
	public function crear_periodico_imagen()
	{

		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['list_tip'] = $this->Modelo_administracion->listar_tipo_notica();
			$this->data['page_content'] = 'backend/vista_administracion/vista_noticia/crear_noticia_imagen';
			$this->render();
		}
	}
	public  function cambiar_estado_periodico_imagen()
	{
		$id = $this->input->post('id');
		$estado = $this->input->post('estado');
		if ($estado == '1') {
			$valor_estado = 'inactivo';
		} else {
			$valor_estado = 'activo';
		}
		$obj = array('estado' => $valor_estado);
		$this->Model_configuracion->editar_tabla_sys('noticia', $obj, 'idnoticia', $id);
	}
	public  function elimina_periodico_imagen()
	{
		$id = $this->input->post('id');
		$obj = array('estado' => 'eliminar');
		$this->Model_configuracion->editar_tabla_sys('noticia', $obj, 'idnoticia', $id);
	}
	public function editar_periodico_imagen($id)
	{


		$tabla = 'noticia';
		$idtabla = 'idnoticia';
		$this->data['list_tip'] = $this->Modelo_administracion->listar_tipo_notica();
		$this->data['obj'] = $this->Model_configuracion->selec_registro_result($tabla, $idtabla, $id);
		$this->data['page_content'] = 'backend/vista_administracion/vista_noticia/editar_noticia_imagen';
		$this->render();
	}

	public  function guardar_editar_periodico_imagen()
	{



		$id = $this->input->post('id_noticia');
		$estado = $this->input->post('estado');


		$not_nombre = mb_strtoupper($this->input->post('not_nombre'), 'utf-8');
		$not_url = $this->input->post('not_url');
		$user_id = $this->session->userdata('user_id');
		$not_hora = $this->input->post('not_hora');
		$not_fecha = $this->input->post('not_fecha');
		$not_descripcion = $this->input->post('not_descripcion');
		$tipo_not = $this->input->post('tipo_not');
		$not_dest = $this->input->post('not_dest');

		$this->load->library('upload');

		// Configurar la carga del archivo
		$config['upload_path'] = 'videos_noticias/';
		$config['allowed_types'] = 'mp4|avi|flv';
		$config['max_size'] = '5000000';

		// Inicializar la carga del archivo
		$this->upload->initialize($config);

		if ($this->upload->do_upload('video')) {

			$obj1 = array(




				'not_nombre' => $not_nombre,
				'not_url' => $this->upload->data('file_name'),
				'id_user' => $user_id,
				'not_hora' => $not_hora,
				'not_fecha' => $not_fecha,

				'not_descripcion' => $not_descripcion,

				'idtipo' => $tipo_not,

				'estado' => $estado,

				'estado_destacado' => $not_dest,




			);

			$tabla = 'noticia';
			$idtabla = 'idnoticia';
			$this->Model_configuracion->editar_tabla_sys($tabla, $obj1, $idtabla, $id);
		}
	}
}
