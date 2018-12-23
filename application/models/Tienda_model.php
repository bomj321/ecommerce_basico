<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda_model extends CI_Model {

  public function get_ropa($id_ropa, $id_subtipo)
	{

		$this->db->select('rt.*,tipo_ropa.id_tipo_ropa as id_tipo_ropa,sub_tipo_ropa.id_sub_tipo_ropa as id_sub_tipo_ropa');
		$this->db->from('ropa_tienda rt');
		$this->db->join('tipo_ropa tipo_ropa', 'rt.tipo_ropa = tipo_ropa.id_tipo_ropa');
		$this->db->join('sub_tipo_ropa sub_tipo_ropa', 'rt.sub_tipo_ropa = sub_tipo_ropa.id_sub_tipo_ropa');
		$this->db->where('rt.tipo_ropa',$id_ropa);
    $this->db->where('rt.sub_tipo_ropa',$id_subtipo);
		$this->db->where('rt.estado_ropa','1');
		$resultado = $this->db->get();
    return $resultado->result();

	}

}
