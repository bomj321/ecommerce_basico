<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function login($usuario, $contraseña)
	{
		$this->db->where("nombre_usuario", $usuario);
		$this->db->where("contrasena", sha1($contraseña));
		$resultados = $this->db->get("usuarios");
  		if ($resultados->num_rows() > 0) {
  			return $resultados->row();
  		}
  		else{
  			return false;
  		}
	}


	public function add_user($data)
	{
	   return $this->db->insert("usuarios",$data);
	}


}
