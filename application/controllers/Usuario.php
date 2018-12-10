<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		error_reporting(E_ALL);
		if (!$this->session->userdata("login")) {
			redirect(base_url());
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

}
