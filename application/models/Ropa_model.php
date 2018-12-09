<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ropa_model extends CI_Model {

	public function list()
	{
    $resultados = $this->db->get('ropa_tienda');
    return $resultados->result();
	}

  public function add()
	{

	}

}
