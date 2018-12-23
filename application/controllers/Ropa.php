<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ropa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."index");
		}
		$this->load->model('Ropa_model');
		$this->load->model('Menus_model');
		$this->load->model('Submenus_model');

	}

	public function list()
	{
        $data = array
        (
          'ropa_subida' => $this->Ropa_model->list()
        );

		    $this->layout->view("list",$data);
	}

  public function add_view()
	{
				$data = array
				(
					'menus'    => $this->Menus_model->list(),
					'submenus' => $this->Submenus_model->list()

				);

		    $this->layout->view("add",$data);
	}

	public function add()
	{

			$titulo_ropa         = $this->input->post("titulo_ropa");
			$color_ropa          = $this->input->post("color_ropa");
			$descripcion_ropa    = $this->input->post("descripcion_ropa");
			$cantidad_ropa       = $this->input->post("cantidad_ropa");
			$precio_ropa         = $this->input->post("precio_ropa");
			$tipo_ropa           = $this->input->post("tipo_ropa");
			$sub_tipo_ropa       = $this->input->post("sub_tipo_ropa");
			$imagen_ropa         = $this->input->post("imagen_ropa");

			$this->form_validation->set_rules("titulo_ropa","Titulo de la Ropta","required");
			$this->form_validation->set_rules("color_ropa","Color de la Ropa","required");
			$this->form_validation->set_rules("descripcion_ropa","Descripcion de la Ropa","required");
			$this->form_validation->set_rules("cantidad_ropa","Cantidad de Ropa Existente","required|integer");
			$this->form_validation->set_rules("precio_ropa","Precio de la Ropa","required|decimal");
			$this->form_validation->set_rules("tipo_ropa","Menu de la Ropa","required");
			$this->form_validation->set_rules("sub_tipo_ropa","Submenu de la Ropa","required");
			//$this->form_validation->set_rules("imagen_ropa","Imagen de la Ropa","required");

			if ($this->form_validation->run()) {
								$this->load->library("upload");
								$config['upload_path']          =  './public/images_ropa';
								$config['allowed_types']        =  'gif|jpg|png|jpeg';
								$config['max_size']             =  0;
								$config['max_width']            =  0;
	              $config['max_height']           =  0;

								$this->upload->initialize($config);
								$this->load->library('upload', $config);
								$this->upload->do_upload('imagen_ropa');
								$data = array("upload_data" => $this->upload->data());


										$data = array
										(
											'titulo_ropa'            => $titulo_ropa,
											'color_ropa'             => $color_ropa,
											'descripcion_ropa'       => trim($descripcion_ropa),
											'cantidad_ropa '         => $cantidad_ropa,
											'precio_ropa'            => $precio_ropa,
											'tipo_ropa'              => $tipo_ropa,
											'sub_tipo_ropa'          => $sub_tipo_ropa,
											'imagen_ropa'            => $data['upload_data']['file_name']
										);
										if (!$this->Ropa_model->add($data)) {
												$this->session->set_flashdata("error","No se pudo guardar la información");
												$this->add_view();
										}else{
												redirect(base_url()."ropa/list");
										}
		}else{
			$this->add_view();

		}

	}

	public function edit_view($id_ropa){
		$data = [
				'menus'    => $this->Menus_model->list(),
				'submenus' => $this->Submenus_model->list(),
				'editar_ropa' => $this->Ropa_model->get_ropa($id_ropa)
		];
		$this->layout->view("edit_ropa",$data);

	}

	public function edit_ropa(){
		    	$id_ropa_tienda      = $this->input->post("id_ropa_tienda");
					$titulo_ropa         = $this->input->post("titulo_ropa");
					$color_ropa          = $this->input->post("color_ropa");
					$descripcion_ropa    = $this->input->post("descripcion_ropa");
					$cantidad_ropa       = $this->input->post("cantidad_ropa");
					$precio_ropa         = $this->input->post("precio_ropa");
					$tipo_ropa           = $this->input->post("tipo_ropa");
					$sub_tipo_ropa       = $this->input->post("sub_tipo_ropa");
					$imagen_ropa         = $this->input->post("imagen_ropa");

					$this->form_validation->set_rules("titulo_ropa","Titulo de la Ropta","required");
					$this->form_validation->set_rules("color_ropa","Color de la Ropa","required");
					$this->form_validation->set_rules("descripcion_ropa","Descripcion de la Ropa","required");
					$this->form_validation->set_rules("cantidad_ropa","Cantidad de Ropa Existente","required|integer");
					$this->form_validation->set_rules("precio_ropa","Precio de la Ropa","required|decimal");
					$this->form_validation->set_rules("tipo_ropa","Menu de la Ropa","required");
					$this->form_validation->set_rules("sub_tipo_ropa","Submenu de la Ropa","required");
					//$this->form_validation->set_rules("imagen_ropa","Imagen de la Ropa","required");
	if ($this->form_validation->run()) {
						if (!empty($_FILES['imagen_ropa']["name"])) {/*IF DE LAS FOTOS*/
												$this->load->library("upload");
												$config['upload_path']          =  './public/images_ropa';
												$config['allowed_types']        =  'gif|jpg|png|jpeg';
												$config['max_size']             =  0;
												$config['max_width']            =  0;
					              $config['max_height']           =  0;

												$this->upload->initialize($config);
												$this->load->library('upload', $config);
												$this->upload->do_upload('imagen_ropa');
												$data = array("upload_data" => $this->upload->data());


														$data = array
														(
															'titulo_ropa'            => $titulo_ropa,
															'color_ropa'             => $color_ropa,
															'descripcion_ropa'       => trim($descripcion_ropa),
															'cantidad_ropa '         => $cantidad_ropa,
															'precio_ropa'            => $precio_ropa,
															'tipo_ropa'              => $tipo_ropa,
															'sub_tipo_ropa'          => $sub_tipo_ropa,
															'imagen_ropa'            => $data['upload_data']['file_name']
														);
														if (!$this->Ropa_model->update_ropa($data,$id_ropa_tienda)) {
																$this->session->set_flashdata("error","No se pudo guardar la información");
																$this->edit_view();
														}else{
																redirect(base_url()."ropa/list");
														}

/*IF DE LAS FOTOS*/	}else{

													$data = array
													(
														'titulo_ropa'            => $titulo_ropa,
														'color_ropa'             => $color_ropa,
														'descripcion_ropa'       => trim($descripcion_ropa),
														'cantidad_ropa '         => $cantidad_ropa,
														'precio_ropa'            => $precio_ropa,
														'tipo_ropa'              => $tipo_ropa,
														'sub_tipo_ropa'          => $sub_tipo_ropa,
													);
													if (!$this->Ropa_model->update_ropa($data,$id_ropa_tienda)) {
															$this->session->set_flashdata("error","No se pudo guardar la información");
															$this->edit_view();
													}else{
															redirect(base_url()."ropa/list");
													}

						}/*IF DE LAS FOTOS*/
			}else{
				$this->edit_view($id_ropa_tienda);

			}

	}

	public function delete($id_ropa_tienda){
		$data = array(
			'estado_ropa' => '0',
		);
		if ($this->Ropa_model->delete_ropa($data,$id_ropa_tienda)) {
			redirect(base_url()."ropa/list");
		}

	}

}
