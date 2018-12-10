<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ropa_model extends CI_Model {

	public function list()
	{

		$this->db->select('rt.*,tipo_ropa.nombre_tipo_ropa as nombre_tipo_ropa,sub_tipo_ropa.nombre_sub_tipo_ropa as nombre_subtipo_ropa');
		$this->db->from('ropa_tienda rt');
		$this->db->join('tipo_ropa tipo_ropa', 'rt.tipo_ropa = tipo_ropa.id_tipo_ropa');
		$this->db->join('sub_tipo_ropa sub_tipo_ropa', 'rt.sub_tipo_ropa = sub_tipo_ropa.id_sub_tipo_ropa');
		$this->db->where('estado_ropa','1');
		$resultado = $this->db->get();
		return $resultado->result();

	}

  public function add($data)
	{
		return $this->db->insert("ropa_tienda",$data);

	}

	public function get_ropa($id_ropa)
	{

		$this->db->select('rt.*,tipo_ropa.id_tipo_ropa as id_tipo_ropa,sub_tipo_ropa.id_sub_tipo_ropa as id_sub_tipo_ropa');
		$this->db->from('ropa_tienda rt');
		$this->db->join('tipo_ropa tipo_ropa', 'rt.tipo_ropa = tipo_ropa.id_tipo_ropa');
		$this->db->join('sub_tipo_ropa sub_tipo_ropa', 'rt.sub_tipo_ropa = sub_tipo_ropa.id_sub_tipo_ropa');
		$this->db->where('rt.id_ropa_tienda',$id_ropa);
		$this->db->where('rt.estado_ropa','1');
		$resultado = $this->db->get();
		return $resultado->row();

	}

	public function update_ropa($data,$id_ropa_tienda)
	{
		$this->db->where('id_ropa_tienda', $id_ropa_tienda);
		return $this->db->update('ropa_tienda', $data);
	}

	public function delete_ropa($data,$id_ropa_tienda)
	{
		$this->db->where('id_ropa_tienda', $id_ropa_tienda);
		return $this->db->update('ropa_tienda', $data);
	}

}
