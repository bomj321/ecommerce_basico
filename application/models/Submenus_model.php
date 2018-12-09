<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenus_model extends CI_Model {

	public function list()
	{
    $resultados = $this->db->get('sub_tipo_ropa');
    return $resultados->result();
	}

  public function add($data)
	{
    return $this->db->insert("sub_tipo_ropa",$data);

	}

  public function get_submenu($id_submenu)
	{
      $this->db->where('id_sub_tipo_ropa', $id_submenu);
      $resultado = $this->db->get('sub_tipo_ropa');
      return $resultado->row();

	}

  public function update($data,$id_submenu)
	{
    $this->db->where('id_sub_tipo_ropa', $id_submenu);
    return $this->db->update('sub_tipo_ropa', $data);
	}

}
