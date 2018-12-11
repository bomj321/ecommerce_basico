<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus_model extends CI_Model {

	public function list()
	{
    $resultados = $this->db->get('tipo_ropa');
    return $resultados->result();
	}

  public function add($data)
	{
    return $this->db->insert("tipo_ropa",$data);

	}

  public function get_menu($id_menu)
	{
      $this->db->where('id_tipo_ropa', $id_menu);
      $resultado = $this->db->get('tipo_ropa');
      return $resultado->row();

	}

  public function update($data,$id_menu)
	{
    $this->db->where('id_tipo_ropa', $id_menu);
    return $this->db->update('tipo_ropa', $data);
	}

}
