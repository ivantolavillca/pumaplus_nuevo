<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_institucion extends Backend
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_institucion');
		$this->load->model('Model_configuracion');

		$this->load->library('session');
		$this->load->library('Ion_auth');
		$this->load->model('Ion_auth_model');
		$this->lang->load('ion_auth');

		if (!$this->ion_auth->logged_in()) {
			//verifica login usuario
			redirect('sali', 'refresh');
		}
		date_default_timezone_set('America/La_Paz');
	}

	public function index()
	{
		redirect(site_url(Hasher::make(6)));
	}
	public function admin_autoridad()
	{
		if (!$this->ion_auth->logged_in() && !$this->ion_auth->is_admin()) {
			redirect('auth/login', 'refresh');
		} else {

			$this->data['datos_institucion'] = $this->Model_institucion->listar_institucion();
			$this->data['page_content'] = 'backend/vista_administracion/vista_administracion_web/edit_pag';
			$this->render();
		}
	}


	public function guardar_institucion()
	{
		$idinstitucion = $this->input->post('idinstitucion');
		$ins_logo = $this->input->post('ins_logo');
		$ins_foto_rector = $this->input->post('ins_foto_rector');
		$ins_foto_vicerector = $this->input->post('ins_foto_vicerector');
		$ins_foto_jefe_unidad = $this->input->post('ins_foto_jefe_unidad');

		$nombre = mb_strtoupper($this->input->post('nombre'), 'utf-8');
		$historia = mb_strtoupper($this->input->post('historia'), 'utf-8');
		$mision = mb_strtoupper($this->input->post('mision'), 'utf-8');
		$vision = mb_strtoupper($this->input->post('vision'), 'utf-8');
		$email = $this->input->post('correo1');
		$celular1 = $this->input->post('celular1');
		$facebook = $this->input->post('facebook');
		$direccion = mb_strtoupper($this->input->post('direccion'), 'utf-8');

		$api_map = $this->input->post('api_map');
		$datos_dir = mb_strtoupper($this->input->post('datos_dir'), 'utf-8');
		$datos_vice = mb_strtoupper($this->input->post('datos_vice'), 'utf-8');
		$datos_jefe = mb_strtoupper($this->input->post('datos_jefe'), 'utf-8');


		// $imagen = $_FILES['imagen']['tmp_name'];
		// $imagen_rector = $_FILES['imagen_rector']['tmp_name'];
		// $imagen_vice = $_FILES['imagen_vice']['tmp_name'];
		// $imagen_jefe = $_FILES['imagen_jefe']['tmp_name'];
		$imagen = $_FILES['imagen']['tmp_name'];
		if ($imagen == null) {
			$imag = $ins_logo;
		} else {
			if ($ins_logo) {
				unlink("./assets/institucion/".$ins_logo);
			}
			list($ancho, $alto) = getimagesize($_FILES['imagen']['tmp_name']);
			$nuevo_ancho = 100;
			$nuevo_alto = 130;
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/institucion/logo_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag = "logo_" . $ima;
			} else {
				

				if ($_FILES['imagen']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/institucion/logo_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag = "logo_" . $ima;
				} else {
					if ($_FILES['imagen']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/institucion/logo_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag = "logo_" . $ima;
					} else {
						$imag = "logo_" . $ima;
					}
				}
			}
		}
		
		

		$imagen_rector = $_FILES['imagen_rector']['tmp_name'];
		if ($imagen_rector == null) {
			$imagen_rector = $ins_foto_rector;
		} else {
			if ($ins_foto_rector) {
				unlink("./assets/institucion/".$ins_foto_rector);
			}
			list($ancho, $alto) = getimagesize($_FILES['imagen_rector']['tmp_name']);
			$nuevo_ancho = 300;
			$nuevo_alto = 300;
			if ($_FILES['imagen_rector']['type'] == "image/jpg" || $_FILES['imagen_rector']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/institucion/rector_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen_rector']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag_rector = "rector_" . $ima;
			} else {
				

				if ($_FILES['imagen_rector']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/institucion/rector_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen_rector']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag_rector = "rector_" . $ima;
				} else {
					if ($_FILES['imagen_rector']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/institucion/rector_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen_rector']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag_rector = "rector_" . $ima;
					} else {
						$imag =  "rector_" . $ima;
					}
				}
			}
		}
		$imagen_vice = $_FILES['imagen_vice']['tmp_name'];
		if ($imagen_vice == null) {
			$imag = $ins_foto_vicerector;
		} else {
			if ($ins_foto_vicerector) {
				unlink("./assets/institucion/".$ins_foto_vicerector);
			}
			list($ancho, $alto) = getimagesize($_FILES['imagen_vice']['tmp_name']);
			$nuevo_ancho = 300;
			$nuevo_alto = 300;
			if ($_FILES['imagen_vice']['type'] == "image/jpg" || $_FILES['imagen_vice']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/institucion/vicerec_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen_vice']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag_vice = "vicerec_" . $ima;
			} else {
				

				if ($_FILES['imagen_vice']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/institucion/vicerec_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen_vice']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag_vice = "vicerec_" . $ima;
				} else {
					if ($_FILES['imagen_vice']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/institucion/vicerec_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen_vice']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag_vice = "vicerec_" . $ima;
					} else {
						$imag = '';
					}
				}
			}
		}
		$imagen_jefe = $_FILES['imagen_jefe']['tmp_name'];
		if ($imagen_jefe == null) {
			$imag = $ins_foto_jefe_unidad;
		} else {
			if ($ins_foto_jefe_unidad) {
				unlink("./assets/institucion/".$ins_foto_jefe_unidad);
			}
			list($ancho, $alto) = getimagesize($_FILES['imagen_jefe']['tmp_name']);
			$nuevo_ancho = 300;
			$nuevo_alto = 300;
			if ($_FILES['imagen_jefe']['type'] == "image/jpg" || $_FILES['imagen_jefe']['type'] == "image/jpeg") {
				$ima = round(microtime(true)) . '.jpg';
				$ruta = "assets/institucion/jefe_" . $ima;
				$origen = imagecreatefromjpeg($_FILES['imagen_jefe']['tmp_name']);
				$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino, $ruta);
				$imag_jefe = "jefe_" . $ima;
			} else {
				

				if ($_FILES['imagen_jefe']['type'] == "image/png") {
					$ima = round(microtime(true)) . '.jpg';
					$ruta = "assets/institucion/jefe_" . $ima;
					$origen = imagecreatefrompng($_FILES['imagen_jefe']['tmp_name']);
					$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino, $ruta);
					$imag_jefe = "jefe_" . $ima;
				} else {
					if ($_FILES['imagen_jefe']['type'] == "image/gif") {
						$ima = round(microtime(true)) . '.jpg';
						$ruta = "assets/institucion/jefe_" . $ima;
						$origen = imagecreatefromgif($_FILES['imagen_jefe']['tmp_name']);
						$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino, $ruta);
						$imag_jefe = "jefe_" . $ima;
					} else {
						$imag = '';
					}
				}
			}
		}
$logo_upea="error";
		$obj = array(
			'idinstitucion'=>$idinstitucion,
			'institucion_nombre' => $nombre,
			'logo_upea'=>$logo_upea,
			'ins_logo' => $imag,
			'ins_mision' => $mision,
			'ins_vision' => $vision,
			'ins_historia' => $historia,
			'ins_foto_rector' => $imag_rector,
			'ins_nombre_rector' => $datos_dir,
			'ins_foto_vicerector' => $imag_vice,
			'ins_nombre_vice' => $datos_vice,
			'ins_foto_jefe_unidad' => $imag_jefe,
			'ins_nombre_jefe' => $datos_jefe,
			'ins_correo' => $email,
			'ins_telefono' => $celular1,
			'ins_api_google_map' => $api_map,
			'ins_url_facebook' => $facebook,
			'ins_ubicacion' => $direccion,
			'dp_auth_users_id' => '1'
		);
		
		
		$this->Model_configuracion->editar_tabla_sys('institucion', $obj, 'idinstitucion', $idinstitucion);
	}
	
}
