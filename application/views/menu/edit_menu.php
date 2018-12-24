<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Editar Menu de Prendas</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edici&oacute;n del menu de Prendas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  	<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><?php echo $this->session->flashdata("error"); ?></p>
                             </div>
                       		 <?php endif;?>

							<?php
							 $formulario = array('class' => 'form-horizontal');
							 echo form_open_multipart('menu/edit_menu',$formulario);
							 ?>

               <input type="hidden" name="id_menu" value="<?php echo $editar_menu->id_tipo_ropa ?>">


								<div class="form-group" style="margin-bottom: 50px;">
                  <label for="menu">Menu</label>
                  <input type="text" class="form-control" id="menu" placeholder="Nuevo Menu" name="menu" value="<?php echo $editar_menu->nombre_tipo_ropa ?>">
                  <?php
                         echo form_error("menu","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                   ?>

								</div>

								<div class="form-group">
												<label for="imagen_tipo_ropa">Imagen de Referencia</label>
												<input required type="file" class="form-control" id="imagen_tipo_ropa" name="imagen_tipo_ropa">
												<?php
															 echo form_error("imagen_tipo_ropa","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
												 ?>
							 </div>

								<div class="col-md-12 col-sm-12 col-xs-12">
									<center><button class="btn btn-primary" type="submit" id="button">Editar Menu</button></center>
								</div>


							<?php echo form_close(); ?>

						</div>
                 </div>


<!--CONTENIDO-->
                </div>
              </div>
             </div>
            </div>
          </div>
</div>
