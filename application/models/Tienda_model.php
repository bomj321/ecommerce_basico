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
    $this->db->where('rt.cantidad_ropa >','0');
		$resultado = $this->db->get();
    return $resultado->result();

	}

  public function add_carrito($data)
  {
    return $this->db->insert("carrito_compra",$data);

  }


/*SECCION DEL CARRITO DE COMPRA*/
  public function select_carrito($id_usuario)
  {

    $this->db->select('cr.*,usuarios.nombre_usuario as nombre_usuario,ropa_tienda.titulo_ropa as titulo_ropa,ropa_tienda.cantidad_ropa as cantidad_ropa');
    $this->db->from('carrito_compra cr');
    $this->db->join('usuarios usuarios', 'cr.id_usuario = usuarios.id_usuario');
    $this->db->join('ropa_tienda ropa_tienda', 'cr.id_articulo = ropa_tienda.id_ropa_tienda');
    $this->db->where('cr.id_usuario',$id_usuario);
    $resultado = $this->db->get();
    return $resultado->result();

  }


  public function cantidad_carrito($id_usuario)
  {

    $this->db->select('cr.*,usuarios.nombre_usuario as nombre_usuario,ropa_tienda.titulo_ropa as titulo_ropa,ropa_tienda.cantidad_ropa as cantidad_ropa');
    $this->db->from('carrito_compra cr');
    $this->db->join('usuarios usuarios', 'cr.id_usuario = usuarios.id_usuario');
    $this->db->join('ropa_tienda ropa_tienda', 'cr.id_articulo = ropa_tienda.id_ropa_tienda');
    $this->db->where('cr.id_usuario',$id_usuario);
    $resultado = $this->db->get();
    return $resultado->num_rows();

  }

  public function suma_carrito($id_usuario)
  {
        $this->db->select('sum(cr.precio_articulo * cr.cantidad_articulo) as suma_compra');
        $this->db->from('carrito_compra cr');
        $resultado = $this->db->get();
        return $resultado->row();
  }

  public function update_carrito_prenda($id_ropa_tienda,$data)
  {
    $this->db->where("id_carrito_compra",$id_ropa_tienda);
    return $this->db->update("carrito_compra",$data);
  }

  public function delete_carrito_prenda($id_ropa_tienda)
  {
    $this->db->where('id_carrito_compra', $id_ropa_tienda);
    $this->db->delete('carrito_compra');
  }


/*SECCION DEL CARRITO DE COMPRA*/




}
