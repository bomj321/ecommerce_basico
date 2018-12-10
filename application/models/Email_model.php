<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model {

	public function list()
	{

    $resultados = $this->db->get('emails');
    return $resultados->result();

	}

  public function add($data)
	{
		return $this->db->insert("emails",$data);

	}

	public function get_email($id_email)
	{


		$this->db->where('id_email',$id_email);
    $resultado = $this->db->get('emails');
		return $resultado->row();

	}


  public function get_email_activo()
	{
    $this->db->where('estado_email','1');
    $resultado = $this->db->get('emails');
		return $resultado->row();

	}

	public function update_email($data,$id_email)
	{
		$this->db->where('id_email', $id_email);
		return $this->db->update('emails', $data);
	}

	public function delete_email($id_email)
	{
		$this->db->where('id_email', $id_email);
		return $this->db->delete('emails');
	}

}
