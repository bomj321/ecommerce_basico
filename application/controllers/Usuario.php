<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		error_reporting(E_ALL);
		if (!$this->session->userdata("login")) {
			redirect(base_url()."index");
		}
		$this->load->model('Usuarios_model');
		$this->load->model('Email_model');

	}



  public function list()
	{
    $data = array(
      'usuarios' => $this->Usuarios_model->list() ,
    );
		$this->layout->view("list",$data);
	}

		public function enviar_correo($id_usuario)
		{
			$usuario_actual = $this->Usuarios_model->get_usuario($id_usuario);
			$emailactivo    = $this->Email_model->get_email_activo();

			if ($emailactivo) {
				$subject = $emailactivo->titulo_email;
				$cuerpo_email = $emailactivo->cuerpo_email;
			}else{
				$subject = 'Nuevas Ofertas';
				$cuerpo_email = "Como estas?, queriamos avisarte que tenemos nuevas ofertas en diferentes productos en nuestra tienda Londoneye, seria una pena que te las perdieras...ven visitanos";
			}



								$this->load->library('email');
								$subject = "$subject";
								$message = "
								<h2>Hola $usuario_actual->nombre_usuario un gusto saludarte, </h2>
								<p>$cuerpo_email</p>
								";

								// Get full html:
								$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
								<html xmlns="http://www.w3.org/1999/xhtml">
								<head>
								    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
								    <title>' . html_escape($subject) . '</title>
								    <style type="text/css">
								        body {
								            font-family: Arial, Verdana, Helvetica, sans-serif;
								            font-size: 16px;
								        }
								    </style>
								</head>
								<body>
								' . $message . '
								</body>
								</html>';
								// Also, for getting full html you may use the following internal method:
								//$body = $this->email->full_html($subject, $message);

								$result = $this->email
								    ->from('jmob612@gmail.com')
								    ->reply_to('jmob612@gmail.com')    // Optional, an account where a human being reads.
								    ->to("$usuario_actual->email_usuario")
								    ->subject($subject)
								    ->message($body)
								    ->send();

							/*	var_dump($result);
								echo '<br />';
								echo $this->email->print_debugger();*/

								exit;



		}

/*SECCION DE CONFIGURACION DEL ENTORNO*/
public function configuracion(){
	$data = array(
		'configuracion' => $this->Usuarios_model->obtener_configuracion() ,
	  );

	$this->layout->view("configuracion",$data);

}

public function crear_configuracion(){
	                $id_configuracion   = $this->input->post("id_configuracion");
					$titulo_producto    = $this->input->post("titulo_producto");
					$titulo_footer      = $this->input->post("titulo_footer");
					$contenido_footer   = $this->input->post("contenido_footer");
					$link_facebook      = $this->input->post("link_facebook");
					$link_twitter       = $this->input->post("link_twitter");
					$link_google        = $this->input->post("link_google");
					$link_instagram     = $this->input->post("link_instagram");				

					$this->form_validation->set_rules("titulo_producto","Titulo de la Ropa","required");
					$this->form_validation->set_rules("titulo_footer","El titulo del Footer","required");
					$this->form_validation->set_rules("contenido_footer","Contenido del Footer","required");
					$this->form_validation->set_rules("link_facebook","Link de Facebook","required");
					$this->form_validation->set_rules("link_twitter","Link de Twitter","required");
					$this->form_validation->set_rules("link_google","Link de Google","required");
					$this->form_validation->set_rules("link_instagram","Link de Instagram","required");

	if ($this->form_validation->run()) {
		$data = array
		(
			'titulo_producto'          =>  trim($titulo_producto),
			'titulo_footer'            =>  trim($titulo_footer),
			'contenido_footer'         =>  trim($contenido_footer),
			'link_facebook '           =>  trim($link_facebook),
			'link_twitter'             =>  trim($link_twitter),
			'link_google'              =>  trim($link_google),
			'link_instagram'           =>  trim($link_instagram),
		);
		if (!$this->Usuarios_model->update_configuracion($data,$id_configuracion)) {
				$this->session->set_flashdata("mensaje","No se pudo guardar la información");
				$this->configuracion();
		}else{
				$this->session->set_flashdata("mensaje","Configuracion Guardada");
				$this->configuracion();
		}
				
	}else{
		$this->configuracion();
	}
}
/*SECCION DE CONFIGURACION DEL ENTORNO*/		



}
