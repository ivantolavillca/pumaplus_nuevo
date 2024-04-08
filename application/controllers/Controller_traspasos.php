<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_traspasos extends Backend
{
    public function __construct()
    {

        parent::__construct();

        $this->load->model('Model_configuracion');
        $this->load->model('Modelo_administracion');



        if (!$this->ion_auth->logged_in()) {
            //verifica login usuario
            redirect('sali', 'refresh');
        }
        date_default_timezone_set('America/La_Paz');
    }

    public function traspasos()
    {
       
            $this->data['page_content'] = 'backend/vista_administracion/vista_traspasos/index';
            $this->render();
      
       
    }
}