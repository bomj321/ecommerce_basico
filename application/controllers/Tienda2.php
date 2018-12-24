<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class Tienda extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
		$this->load->model("Tienda_model");

	}

	public function index()
	{

		$this->layout_tienda->view("inicio");
	}


/**********************************************SECCION DE REGISTRO E INICIO DE SESION DE USUARIO**********************************************/
public function inicio(){
			$this->layout_tienda->view("register/inicio_sesion");

}

public function registrate(){
			$this->layout_tienda->view("register/register_usuario");

}

public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

public function registro_usuarios()
{
	    $nombre_usuario       = $this->input->post("nombre_usuario");
			$dni_usuario          = $this->input->post("dni_usuario");
			$email_usuario        = $this->input->post("email_usuario");
			$contrasena           = $this->input->post("contrasena");


			$this->form_validation->set_rules("nombre_usuario","Nombre del Usuario","required");
			$this->form_validation->set_rules("dni_usuario","Cedula del Usuario","required|is_unique[usuarios.dni_usuario]");
			$this->form_validation->set_rules("email_usuario","Email del Usuario","required|is_unique[usuarios.email_usuario]|valid_email");
			$this->form_validation->set_rules("contrasena","Contraseña del Usuario","required");


		if ($this->form_validation->run()) {
			$data = [
			    'nombre_usuario'   => $nombre_usuario,
			    'dni_usuario'      => $dni_usuario,
			    'email_usuario'    => $email_usuario,
			    'contrasena'       => sha1($contrasena),
			    'tipo_usuario'     => '2',
			    'estado_usuario'   => '1',
			];

			 if ($this->Usuarios_model->add_user($data)) {
			 	$this->session->set_flashdata("registro_correcto","Usuario Registrado");
				$this->inicio();
			 }else{
			 	$this->session->set_flashdata("error_registro_usuario","No se pudo guardar la información");
			 	$this->registrate();
			 }

		}else {
			$this->registrate();
		}
}



public function login()
{
				$email_usuario    = $this->input->post("email_usuario");
				$contrasena       = $this->input->post("contrasena");


		    $this->form_validation->set_rules("email_usuario","Email del Usuario","required|valid_email");
				$this->form_validation->set_rules("contrasena","Contraseña","required");

				if ($this->form_validation->run()) {
							$res = $this->Usuarios_model->login_tienda($email_usuario, $contrasena);

							if (!$res) {
								$this->session->set_flashdata("error_datos_incorrectos","El usuario y/o contraseña son incorrectos");
								$this->inicio();
							}else{
								$data  = array(
									'id_usuario_tienda'         => $res->id_usuario,
									'nombre_persona_tienda'     => $res->nombre_usuario,
									'dni_usuario_tienda'        => $res->dni_usuario,
									'email_usuario_tienda'      => $res->email_usuario,
									'tipo_usuario_tienda'       => $res->tipo_usuario,
									'login_tienda'              => TRUE
								);
								$this->session->set_userdata($data);
								redirect(base_url());

							}
			}else{
				$this->inicio();
			}
}


/**********************************************SECCION DE REGISTRO E INICIO DE SESION DE USUARIO**********************************************/



/**********************************************SECCION DE VER ROPA**********************************************/
public function tienda($id_tipo_topa){
			$data = array(
				'id_tipo_topa_url' => $id_tipo_topa ,
			);
			$this->layout_tienda->view("tienda/articulos",$data);

}

public function tienda_articulo($id_ropa, $id_subtipo)
{
	$data = array(
			'articulos'       => $this->Tienda_model->get_ropa($id_ropa, $id_subtipo)
	);
	$this->load->view("tienda/tienda/respuesta_ajax_articulo",$data);

}

public function carrito(){

	if ($this->session->userdata("login_tienda")) {
				$data = array(
					'cantidad_articulos'  => $this->Tienda_model->select_carrito($this->session->userdata("id_usuario_tienda")),
					'numero_articulos'    => $this->Tienda_model->cantidad_carrito($this->session->userdata("id_usuario_tienda")),
					'suma_compra'         => $this->Tienda_model->suma_carrito($this->session->userdata("id_usuario_tienda"))
				);
				$this->layout_tienda->view("tienda/carrito",$data);
	}else{
				redirect(base_url().'tienda/inicio');
	}


}

public function add_carrito($id_usuario, $id_ropa_tienda,$precio_ropa){
		$data = array(
			'id_usuario'        => $id_usuario,
			'id_articulo'       => $id_ropa_tienda,
			'precio_articulo'   => $precio_ropa,
			'cantidad_articulo' => '1',
		);
		 $this->Tienda_model->add_carrito($data);

}

/**********************************************SECCION DE VER ROPA**********************************************/

/**********************************************SECCION DE COMPRA**********************************************/
public function update_carrito_prenda($id_ropa_tienda,$cantidad_articulo){
		$data = array(
			'cantidad_articulo' => $cantidad_articulo
		);
		 $this->Tienda_model->update_carrito_prenda($id_ropa_tienda,$data);

}

public function delete_carrito_prenda($id_ropa_tienda){
		 $this->Tienda_model->delete_carrito_prenda($id_ropa_tienda);

}

public function pagar_paypal(){
			if ($this->session->userdata("login_tienda")) {
					$costo_total             = $this->input->post("costo_total");
					$id_persona              = $this->input->post("id_persona");
				  $cantidad_articulos      =  htmlspecialchars($this->input->post("cantidad_articulos"));
/*SECCION DE BASE DE DATOS*/
					$articulos_comprar =  $this->Tienda_model->select_carrito($this->session->userdata("id_usuario_tienda"));
					$suma_compra       =  $this->Tienda_model->suma_carrito($this->session->userdata("id_usuario_tienda"));
/*SECCION DE BASE DE DATOS*/
					require_once ('./public/paypal/config.php');
					//$producto = htmlspecialchars($nombre_articulo);
					$precio   = $suma_compra->suma_compra;
					$envio    = 0;
					$total    = $precio + $envio;


					$compra = new Payer();
					$compra->setPaymentMethod('paypal');
$i=0;
$arreglo_pedido = array();
/*SE PUEDE HACER UN FOREACH*/
foreach ($articulos_comprar as $articulo_comprar) {
					${"articulo$i"} = new Item();
					$arreglo_pedido[] = ${"articulo$i"};
					${"articulo$i"}->setName($articulo_comprar->titulo_ropa)
								->setCurrency('EUR')
								->setQuantity($articulo_comprar->cantidad_articulo)
								->setPrice($articulo_comprar->cantidad_articulo * $articulo_comprar->precio_articulo);

$i++;
}

/*SE PUEDE HACER UN FOREACH*/

					$listaArticulos = new ItemList();
					$listaArticulos->setItems($arreglo_pedido);


					$detalles = new Details();
					$detalles->setShipping($envio)
					          ->setSubtotal($total);



					$cantidad = new Amount();
					$cantidad->setCurrency('EUR')
					          ->setTotal($total)
					          ->setDetails($detalles);

					$transaccion = new Transaction();
					$transaccion->setAmount($cantidad)
					               ->setItemList($listaArticulos)
					               ->setDescription('Pago')
					               ->setInvoiceNumber($id_persona);

	/*	echo "<pre>";
		var_dump($articulo0->getPrice());
		var_dump($articulo1->getPrice());
		$suma0 = $articulo0->getPrice()+$articulo1->getPrice();
		var_dump($suma0);
	 	var_dump($precio);
	 	var_dump($total);


	 	echo "</pre>";

	 		die();*/

					$redireccionar = new RedirectUrls();
					$redireccionar->setReturnUrl(base_url() . "/tienda/pago_realizado/true")
					              ->setCancelUrl(base_url() . "/tienda/pago_realizado/false");


					$pago = new Payment();
					$pago->setIntent("sale")
					     ->setPayer($compra)
					     ->setRedirectUrls($redireccionar)
					     ->setTransactions(array($transaccion));

					     try {
					       $pago->create($apiContext);
					     } catch (PayPal\Exception\PayPalConnectionException $pce) {
					       // Don't spit out errors or use "exit" like this in production code
					       echo '<pre>';print_r(json_decode($pce->getData()));
								 exit;
								 echo "</pre>";
					   }

					$aprobado = $pago->getApprovalLink();


					header("Location: {$aprobado}");
			}else{
						redirect(base_url().'tienda/inicio');
			}

}


public function pago_realizado($estado_pago){

	if ($estado_pago == 'true') {
			$data = array(
				'estado_pago' => $estado_pago,
			);
			$this->layout_tienda->view("tienda/pago_realizado",$data);
	}
}


/**********************************************SECCION DE COMPRA**********************************************/



}
