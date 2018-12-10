<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model('Usuarios_model');

	}

	

  public function list()
	{
    $data = array(
      'usuarios' => $this->Usuarios_model->list() ,
    );
		$this->layout->view("list",$data);
	}

}
