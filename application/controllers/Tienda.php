<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model("Usuarios_model");
		}

			public function index()
			{
        $this->layout_tienda->view("inicio");
			}

			/*public function login()
			{
							$usuario    = $this->input->post("usuario");
							$contraseña = $this->input->post("contraseña");


					  	$this->form_validation->set_rules("usuario","Nombre del Usuario","required");
							$this->form_validation->set_rules("contraseña","Contraseña","required");

							if ($this->form_validation->run()) {
										$res = $this->Usuarios_model->login($usuario, $contraseña);

										if (!$res) {
											$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
											$this->index();
										}else{
											$data  = array(
												'id_usuario_tienda'         => $res->id_usuario,
												'nombre_persona_tienda'     => $res->nombre_usuario,
												'dni_usuario_tienda'        => $res->dni_usuario,
												'email_usuario_tienda'      => $res->email_usuario,
												'tipo_usuario_tienda'       => $res->tipo_usuario,
												'login_tienda '             => TRUE
											);
											$this->session->set_userdata($data);
											redirect(base_url()."dashboard");
										}
						}else{
							$this->index();
						}
			}

			public function logout()
			{
				$this->session->sess_destroy();
				redirect(base_url()."index");
			}*/
}