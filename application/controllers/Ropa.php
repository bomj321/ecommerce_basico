<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ropa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model('Ropa_model');

	}

	public function list()
	{
        $data = array
        (
          'ropa_subida' => $this->Ropa_model->list()
        );

		    $this->layout->view("list",$data);
	}

  public function add()
	{

		    $this->layout->view("add");
	}

}
