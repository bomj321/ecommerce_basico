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

/*SECCION DE ADMINISTRADOR*/

  public function list()
	{
    $data = array(
      'pagos' => $this->Pagos_model->list() ,
    );
		$this->layout->view("list",$data);
	}




 public function list_detalle($compra)
	{

    $data = array(
      'pagos' => $this->Pagos_model->list_detalle($compra),
    );
		$this->load->view("pago/detalle",$data);

	}


/*SECCION DE ADMINISTRADOR*/	




  public function update($id)
	{
      $data = array(
        'estado_entrega' => '1',
      );
      $this->Pagos_model->update($data,$id);
      redirect(base_url()."pago/list");

	}

/*SECCION DE PRODUCTOS MAS VENDIDOS*/
public function list_products(){
	$data = array(
		'productos_vendidos' => $this->Pagos_model->list_productos_vendidos(),
	);

	$this->layout->view("list_productos_vendidos",$data);

}

	public function getCharts($id_compra,$year){		
		$resultados = $this->Pagos_model->montos($id_compra,$year);
		echo json_encode($resultados);
	}

/*SECCION DE PRODUCTOS MAS VENDIDOS*/



}
