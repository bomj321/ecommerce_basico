<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."index");
		}
		$this->load->model('Email_model');

	}


  public function list()
	{
    $data = array(
      'emails' => $this->Email_model->list() ,
    );
		$this->layout->view("list",$data);
	}

  public function add_view()
	{

		    $this->layout->view("add");
	}

  public function add()
  {
            $titulo_email         = $this->input->post("titulo_email");
            $cuerpo_email         = $this->input->post("cuerpo_email");


            $this->form_validation->set_rules("titulo_email","Titulo del Email","required");
            $this->form_validation->set_rules("cuerpo_email","Cuerpo del Email","required");

            if ($this->form_validation->run()) {


                          $data = array
                          (
                            'titulo_email'             => $titulo_email,
                            'cuerpo_email'             => $cuerpo_email,

                          );
                          if (!$this->Email_model->add($data)) {
                              $this->session->set_flashdata("error","No se pudo guardar la información");
                              $this->add_view();
                          }else{
                              redirect(base_url()."email/list");
                          }
          }else{
            $this->add_view();

          }
  }

  public function edit_view($id_email){
  		$data = [
  				'email'    => $this->Email_model->get_email($id_email)
  		];
  		$this->layout->view("edit_email",$data);
	}

  public function edit_email(){
            $id_email             = $this->input->post("id_email");
            $titulo_email         = $this->input->post("titulo_email");
            $cuerpo_email         = $this->input->post("cuerpo_email");


            $this->form_validation->set_rules("titulo_email","Titulo del Email","required");
            $this->form_validation->set_rules("cuerpo_email","Cuerpo del Email","required");

            if ($this->form_validation->run()) {
                          $data = array
                          (
                            'titulo_email'             => $titulo_email,
                            'cuerpo_email'             => $cuerpo_email,

                          );
                          if (!$this->Email_model->update_email($data,$id_email)) {
                              $this->session->set_flashdata("error","No se pudo actualizar la información");
                              $this->edit_view($id_email);
                          }else{
                              redirect(base_url()."email/list");
                          }
          }else{
            $this->edit_view($id_email);

          }
  }

  public function delete($id_email){
  		if ($this->Email_model->delete_email($id_email)) {
  			redirect(base_url()."email/list");
  		}
	}

  public function update($id,int $estado_actualizar){

/*DESACTIVAR EMAIL YA ACTIVO*/
    $email_activo = $this->Email_model->get_email_activo();
    if ($email_activo) {
        $id_email = $email_activo->id_email;
        echo $id_email;
       $data = array(
          'estado_email' => 0
        );
        $this->Email_model->update_email($data,$id_email);
    }
/*DESACTIVAR EMAIL YA ACTIVO*/


      $data = array(
          'estado_email' => $estado_actualizar
        );
        $this->Email_model->update_email($data,$id);
        redirect(base_url()."email/list");
  }






}
