<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagos_model extends CI_Model {



	public function list()
	{
    $this->db->select('cp.*,usuarios.nombre_usuario as nombre_usuario,ropa_tienda.titulo_ropa as titulo_ropa');
		$this->db->from('compras cp');
		$this->db->join('usuarios usuarios', 'cp.id_usuario = usuarios.id_usuario');
		$this->db->join('ropa_tienda ropa_tienda', 'cp.id_articulo = ropa_tienda.id_ropa_tienda');
		$resultado = $this->db->get();
		return $resultado->result();
	}

  public function update($data,$id)
  {
    $this->db->where('id_compra', $id);
		return $this->db->update('compras', $data);
  }
}
