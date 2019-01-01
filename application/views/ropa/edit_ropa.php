<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edici&oacute;n de Prendas</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Prenda</h2>
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

                        </div>
                   </div>
                 <?php
                    $formulario = array('class' => 'form-horizontal');
                    echo form_open_multipart('ropa/edit_ropa',$formulario);
                  ?>

                  <!--INPUT ESCONDIDO CON EL ID-->
                  <input type="hidden" name="id_ropa_tienda" value="<?php echo $editar_ropa->id_ropa_tienda ?>">
                  <!--INPUT ESCONDIDO CON EL ID-->
								<div class="form-group">
                      <label for="titulo_ropa">Titulo de la Prenda</label>
                      <input value="<?php echo $editar_ropa->titulo_ropa ?>" required type="text" class="form-control" id="titulo_ropa" placeholder="Titulo de la Prenda(Sera vista en grande y negrita)" name="titulo_ropa">
                      <?php
                             echo form_error("titulo_ropa","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                       ?>
								</div>



                <div class="form-group">
                        <label for="color_ropa">Descripci&oacute;n del Color</label>
                        <input value="<?php echo $editar_ropa->color_ropa ?>" required type="text" class="form-control" id="color_ropa" placeholder="Descripci&oacute;n del Color" name="color_ropa">
                        <?php
                               echo form_error("color_ropa","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                         ?>
								</div>

                <div class="form-group">
                        <label for="descripcion_ropa">Descripci&oacute;n General</label>
                        <textarea required class="form-control" id="descripcion_ropa" placeholder="Descripci&oacute;n General" name="descripcion_ropa"><?php echo $editar_ropa->descripcion_ropa ?></textarea>
                        <?php
                               echo form_error("descripcion_ropa","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                         ?>
                </div>

								<div class="form-group">
												<label for="cantidad_ropa">Cantidad de Stock</label>
												<input value="<?php echo $editar_ropa->cantidad_ropa ?>" required type="text" class="form-control" id="cantidad_ropa" placeholder="Cantidad de Ropa en el stock" name="cantidad_ropa">
												<?php
															 echo form_error("cantidad_ropa","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
												 ?>
								</div>


								<div class="form-group">
												<label for="precio_ropa">Precio de la Ropa</label>
												<input value="<?php echo $editar_ropa->precio_ropa ?>" required class="form-control" id="precio_ropa" placeholder="Ingrese Precio Ej: 1250.00" name="precio_ropa">
												<?php
															 echo form_error("precio_ropa","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
												 ?>
								</div>



                <div class="form-group">
                      <label for="color_ropa">Menu de la Prenda</label>
                       <select required class="form-control" id="tipo_ropa" name="tipo_ropa">
                          <option value="">Seleccione un Menu</option>
                          <?php foreach ($menus as $menu): ?>
                              <option <?php echo $editar_ropa->id_tipo_ropa == $menu->id_tipo_ropa ? 'selected' : '' ?> value="<?php echo $menu->id_tipo_ropa ?>"><?php echo $menu->nombre_tipo_ropa ?></option>
                          <?php endforeach; ?>
                       </select>
                       <?php
                               echo form_error("tipo_ropa","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                         ?>
	             </div>

              <div class="form-group">
                        <label for="color_ropa">Submenu de la Prenda</label>
                       <select required class="form-control" id="sub_tipo_ropa" name="sub_tipo_ropa">
                          <option value="">Seleccione un SubMenu</option>
                          <?php foreach ($submenus as $submenu): ?>
                              <option <?php echo $editar_ropa->id_sub_tipo_ropa == $submenu->id_sub_tipo_ropa ? 'selected' : '' ?> value="<?php echo $submenu->id_sub_tipo_ropa ?>"><?php echo $submenu->nombre_sub_tipo_ropa ?></option>
                          <?php endforeach; ?>
                       </select>
                       <?php
                               echo form_error("sub_tipo_ropa","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                         ?>

               </div>

               <div class="form-group">
                       <label for="imagen_ropa">Imagen de la Prenda(Se recomienda una imagen de media Resoluci&oacute;n)</label>
                       <input type="file" class="form-control" id="imagen_ropa" name="imagen_ropa">
                       <?php
                              echo form_error("imagen_ropa","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                        ?>
              </div>


								<div class="col-md-12 col-sm-12 col-xs-12">
									<center><button class="btn btn-primary" type="submit" id="button">Editar la Prenda</button></center>
								</div>


							<?php echo form_close(); ?>





<!--CONTENIDO-->
                </div>
              </div>
             </div>
            </div>
          </div>
</div>
