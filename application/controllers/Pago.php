<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pago extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."index");
		}
		$this->load->model('Pagos_model');

	}



  public function list()
	{
    $data = array(
      'pagos' => $this->Pagos_model->list() ,
    );
		$this->layout->view("list",$data);
	}

  public function update($id)
	{
      $data = array(
        'estado_entrega' => '1',
      );
      $this->Pagos_model->update($data,$id);
      redirect(base_url()."pago/list");

	}

}
