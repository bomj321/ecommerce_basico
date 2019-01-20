<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagos_model extends CI_Model {



	public function list()
	{
        $this->db->select('cp.*,usuarios.nombre_usuario as nombre_usuario,usuarios.email_usuario as email_usuario,usuarios.telefono_usuario as telefono_usuario,ropa_tienda.titulo_ropa as titulo_ropa,SUM(total_compra) as total_compra');
		$this->db->from('compras cp');
		$this->db->join('usuarios usuarios', 'cp.id_usuario = usuarios.id_usuario');
		$this->db->join('ropa_tienda ropa_tienda', 'cp.id_articulo = ropa_tienda.id_ropa_tienda');
		$this->db->group_by('cp.numero_referencia');
		$resultado = $this->db->get();
		return $resultado->result();
	}


	public function list_usuario($id)
	{
    $this->db->select('cp.*,usuarios.nombre_usuario as nombre_usuario,ropa_tienda.titulo_ropa as titulo_ropa,SUM(total_compra) as total_compra');
		$this->db->from('compras cp');
		$this->db->join('usuarios usuarios', 'cp.id_usuario = usuarios.id_usuario');
		$this->db->join('ropa_tienda ropa_tienda', 'cp.id_articulo = ropa_tienda.id_ropa_tienda');
		$this->db->where('cp.id_usuario', $id);
		$this->db->group_by('cp.numero_referencia');
		$resultado = $this->db->get();
		return $resultado->result();
	}




	public function list_detalle($compra)
	{
		$this->db->select('cp.*,usuarios.nombre_usuario as nombre_usuario,ropa_tienda.titulo_ropa as titulo_ropa');
		$this->db->from('compras cp');
		$this->db->join('usuarios usuarios', 'cp.id_usuario = usuarios.id_usuario');
		$this->db->join('ropa_tienda ropa_tienda', 'cp.id_articulo = ropa_tienda.id_ropa_tienda');
		$this->db->where('cp.numero_referencia', $compra);
		$resultado = $this->db->get();
		return $resultado->result();
	}

  public function update($data,$id)
  {
    $this->db->where('id_compra', $id);
		return $this->db->update('compras', $data);
  }

	public function count_pagos()
	{
		return $this->db->count_all('compras');
	}

	public function monto_pagos()
	{

		$this->db->select("SUM(total_compra) as total_compra");
		$this->db->from("compras");
		$resultados = $this->db->get();
		return $resultados->row();
	}

/*SECCION DE PRODUCTOS MAS VENDIDOS*/
public function list_productos_vendidos(){
	    $this->db->select('cp.*,usuarios.nombre_usuario as nombre_usuario,ropa_tienda.titulo_ropa as titulo_ropa,SUM(total_compra) as total_compra,SUM(cantidad_articulo) as cantidad_vendidos');
		$this->db->from('compras cp');
		$this->db->join('usuarios usuarios', 'cp.id_usuario = usuarios.id_usuario');
		$this->db->join('ropa_tienda ropa_tienda', 'cp.id_articulo = ropa_tienda.id_ropa_tienda');
		$this->db->group_by('cp.id_articulo');
		$resultado = $this->db->get();
		return $resultado->result();
}

public function montos($id_compra,$year){
		$this->db->select("MONTH(fecha_pago) as mes, SUM(cantidad_articulo) as monto");
		$this->db->from("compras");
		$this->db->where("fecha_pago >=",$year."-01-01");
		$this->db->where("fecha_pago <=",$year."-12-31");
		$this->db->where('id_articulo', $id_compra);
		$this->db->group_by("mes");
		$this->db->order_by("mes");
		$resultados = $this->db->get();
		return $resultados->result();
	}
/*SECCION DE PRODUCTOS MAS VENDIDOS*/

}
