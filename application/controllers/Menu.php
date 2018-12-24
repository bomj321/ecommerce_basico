<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."index");
		}
		$this->load->model('Menus_model');
    $this->load->model('Submenus_model');


	}

/*********************************************************************SECCION MENUS********************************************/
public function menu()
{
  $data = array
  (
    'menus' => $this->Menus_model->list()
  );

  $this->layout->view("menu",$data);
}


public function view_add()
{

  $this->layout->view("add_menu");
}

public function create_menu()
{
        $menu_tipo                = $this->input->post("menu");
        $this->form_validation->set_rules("menu","Nombre Menu","required|is_unique[tipo_ropa.nombre_tipo_ropa]");

				if ($this->form_validation->run()) {
									$this->load->library("upload");
									$config['upload_path']          =  './public/images_ropa';
									$config['allowed_types']        =  'gif|jpg|png|jpeg';
									$config['max_size']             =  0;
									$config['max_width']            =  0;
									$config['max_height']           =  0;

									$this->upload->initialize($config);
									$this->load->library('upload', $config);
									$this->upload->do_upload('imagen_tipo_ropa');
									$imagen = array("upload_data" => $this->upload->data());

											$data = array
											(
												'nombre_tipo_ropa'            => $menu_tipo,
												'imagen_tipo_ropa'            => $imagen['upload_data']['file_name']
											);
											if ($this->Menus_model->add($data)) {
												 redirect(base_url()."menu/menu");
											}else{
												$this->session->set_flashdata("error","No se pudo guardar la información");
												$this->view_add();
											}
			}else{
				$this->view_add();

			}

}

public function edit_view($id_menu)
{
      $data = [
          'editar_menu' => $this->Menus_model->get_menu($id_menu)
      ];
      $this->layout->view("edit_menu",$data);
}

public function edit_menu()
{
        $id_menu      = $this->input->post("id_menu");
        $menu_tipo    = $this->input->post("menu");

/*CODIGO PARA CORROBORAR CAMPO*/
        $menuactual = $this->Menus_model->get_menu($id_menu);
        if ($menu_tipo == $menuactual->nombre_tipo_ropa) {
          $is_unique = "";
        }else{
          $is_unique = "|is_unique[tipo_ropa.nombre_tipo_ropa]";

        }
        $this->form_validation->set_rules("menu","Nombre Menu","required".$is_unique);
/*CODIGO PARA CORROBORAR CAMPO*/


          if ($this->form_validation->run()) {
						if (!empty($_FILES['imagen_tipo_ropa']["name"])) {/*IF DE LAS FOTOS*/
												$this->load->library("upload");
												$config['upload_path']          =  './public/images_ropa';
												$config['allowed_types']        =  'gif|jpg|png|jpeg';
												$config['max_size']             =  0;
												$config['max_width']            =  0;
												$config['max_height']           =  0;

												$this->upload->initialize($config);
												$this->load->library('upload', $config);
												$this->upload->do_upload('imagen_tipo_ropa');
												$imagen = array("upload_data" => $this->upload->data());

		                    $data = [
													'nombre_tipo_ropa'            => $menu_tipo,
													'imagen_tipo_ropa'            => $imagen['upload_data']['file_name']
		                    ];

			                   if ($this->Menus_model->update($data,$id_menu)) {
			                       redirect(base_url()."menu/menu");
			                   }else{
			                      $this->session->set_flashdata("error","No se pudo guardar la información");
			                      $this->edit_view($id_menu);
			                   }

/*IF DE LAS FOTOS*/	}else{
												$data = [
														'nombre_tipo_ropa' => $menu_tipo
												];

											 if ($this->Menus_model->update($data,$id_menu)) {
													 redirect(base_url()."menu/menu");
											 }else{
													$this->session->set_flashdata("error","No se pudo guardar la información");
													$this->edit_view($id_menu);
											 }
						}/*IF DE LAS FOTOS*/

          }else {
                $this->edit_view($id_menu);
          }
}



public function update_estado($id_menu,$id_estado)
{
		$data = array(
			'estado_importante' => $id_estado,
		);
		$this->Menus_model->update_estado($data,$id_menu);
		 redirect(base_url()."menu/menu");
}


/*********************************************************************SECCION MENUS********************************************/



/*******************************************************************SECCION SUBMENUS********************************************/
  public function submenu()
  {
    $data = array
    (
      'submenus' => $this->Submenus_model->list()
    );

    $this->layout->view("submenu",$data);
  }

  public function view_add_submenu()
  {

    $this->layout->view("add_submenu");
  }

  public function create_submenu()
  {
          $submenu_tipo    = $this->input->post("submenu");
          $this->form_validation->set_rules("submenu","Nombre Submenu","required|is_unique[sub_tipo_ropa.nombre_sub_tipo_ropa]");

          if ($this->form_validation->run()) {
                    $data = [
                        'nombre_sub_tipo_ropa' => $submenu_tipo
                    ];

                   if ($this->Submenus_model->add($data)) {
                       redirect(base_url()."menu/submenu");
                   }else{
                      $this->session->set_flashdata("error","No se pudo guardar la información");
                      $this->view_add_submenu();
                   }

          }else {
                $this->view_add_submenu();
          }

  }

  public function edit_view_submenu($id_submenu)
  {
        $data = [
            'editar_submenu' => $this->Submenus_model->get_submenu($id_submenu)
        ];
        $this->layout->view("edit_submenu",$data);
  }

  public function edit_submenu()
  {
          $id_submenu      = $this->input->post("id_submenu");
          $submenu_tipo       = $this->input->post("submenu");

  /*CODIGO PARA CORROBORAR CAMPO*/
          $submenuactual = $this->Submenus_model->get_submenu($id_submenu);
          if ($submenu_tipo == $submenuactual->nombre_sub_tipo_ropa) {
            $is_unique = "";
          }else{
            $is_unique = "|is_unique[sub_tipo_ropa.nombre_sub_tipo_ropa]";

          }
          $this->form_validation->set_rules("menu","Nombre Menu","required".$is_unique);
  /*CODIGO PARA CORROBORAR CAMPO*/


            if ($this->form_validation->run()) {
                      $data = [
                          'nombre_sub_tipo_ropa' => $submenu_tipo
                      ];

                     if ($this->Submenus_model->update($data,$id_submenu)) {
                         redirect(base_url()."menu/submenu");
                     }else{
                        $this->session->set_flashdata("error","No se pudo guardar la información");
                        $this->edit_view_submenu($id_submenu);
                     }

            }else {
                  $this->edit_view_submenu($id_submenu);
            }
  }


/*******************************************************************SECCION SUBMENUS********************************************/


}
