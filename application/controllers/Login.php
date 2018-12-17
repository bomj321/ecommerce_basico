<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model("Usuarios_model");
		}

			public function index()
			{
				$this->load->view('login/login');
			}

			public function login()
			{
							$email_usuario    = $this->input->post("email_usuario");
							$contraseña = $this->input->post("contraseña");


					  	$this->form_validation->set_rules("email_usuario","Nombre del Usuario","required");
							$this->form_validation->set_rules("contraseña","Contraseña","required");

							if ($this->form_validation->run()) {
										$res = $this->Usuarios_model->login($email_usuario, $contraseña);

										if (!$res) {
											$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
											$this->index();
										}else{
											$data  = array(
												'id_usuario'         => $res->id_usuario,
												'nombre_persona'     => $res->nombre_usuario,
												'dni_usuario'        => $res->dni_usuario,
												'email_usuario'      => $res->email_usuario,
												'tipo_usuario'       => $res->tipo_usuario,
												'login'              => TRUE
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
			}
}
