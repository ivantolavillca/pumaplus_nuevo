<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend {

	function __construct()
	{
		parent::__construct();
        
        if ($this->ion_auth->logged_in()) 
            redirect(site_url(Hasher::make(1)));
	}

	public function index()
	{
		$this->data['title1'] = 'Sistema';
		$this->data['subtitle'] = 'UPEA';
		$this->data['carrera'] = '';
		$this->data['page_content'] = 'home';

		$this->render();
	}
}
