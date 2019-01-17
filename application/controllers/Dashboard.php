<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."login");
		}
		$this->load->model('Ropa_model');
		$this->load->model('Usuarios_model');
		$this->load->model('Pagos_model');
	}

	public function index()
	{
		$data = array(
			'total_ropa'     => $this->Ropa_model->count_ropa(),
			'total_usuarios' => $this->Usuarios_model->count_usuario(),
			'total_pagos'    => $this->Pagos_model->count_pagos(),
			'monto_pagos'    => $this->Pagos_model->monto_pagos()
		);

		$this->layout->view("pagina_inicio",$data);

	}

	


}
