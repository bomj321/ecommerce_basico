<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Actualizar Configuraci&oacute;n</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Configuraci&oacute;n Actual</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  	<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php if($this->session->flashdata("mensaje")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <center><p><?php echo $this->session->flashdata("mensaje"); ?></p></center>
                             </div>
                       		 <?php endif;?>

							<?php
							 $formulario = array('class' => 'form-horizontal');
							 echo form_open_multipart('usuario/crear_configuracion',$formulario);
                             ?>
                             
                             <input type="hidden" name='id_configuracion' value='<?php echo $configuracion->id_configuracion?>'>

								<div class="form-group">
                                        <label for="titulo_producto">Titulo de los Productos</label>
                                        <input value="<?php echo !empty($configuracion->titulo_producto) ? $configuracion->titulo_producto : 'No definida'?>" type="text" class="form-control" id="titulo_producto" placeholder="Nuevo Titulo" name="titulo_producto">
                                        <?php
                                                echo form_error("titulo_producto","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                                        ?>
                                </div>
                                
                                <div class="form-group">
                                        <label for="titulo_footer">Titulo de la secci&oacute;n del Footer</label>
                                        <input value="<?php echo !empty($configuracion->titulo_footer) ? $configuracion->titulo_footer : 'No definida'?>" type="text" class="form-control" id="titulo_footer" placeholder="Nuevo Titulo del Footer" name="titulo_footer">
                                        <?php
                                                echo form_error("titulo_footer","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                                        ?>
                                </div>
                                
                                <div class="form-group">
                                        <label for="contenido_footer">Contenido del Footer</label>
                                        <textarea name="contenido_footer" class="form-control" id="contenido_footer" placeholder="Contenido del Footer"><?php echo !empty($configuracion->contenido_footer) ? $configuracion->contenido_footer : 'No definida'?></textarea> 
                                        <?php
                                                echo form_error("contenido_footer","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                                        ?>
                                </div>
                                
                                <div class="form-group">
                                        <label for="link_facebook">Link a Facebook</label>
                                        <input value="<?php echo !empty($configuracion->link_facebook) ? $configuracion->link_facebook : 'No definida'?>" type="link_facebook" class="form-control" id="link_facebook" placeholder="Link a Facebook" name="link_facebook">
                                        <?php
                                                echo form_error("link_facebook","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                                        ?>
                                </div>
                                
                                <div class="form-group">
                                        <label for="link_twitter">Link a Twitter</label>
                                        <input value="<?php echo !empty($configuracion->link_twitter) ? $configuracion->link_twitter : 'No definida'?>" type="link_twitter" class="form-control" id="link_twitter" placeholder="Link a Twitter" name="link_twitter">
                                        <?php
                                                echo form_error("link_twitter","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                                        ?>
                                </div>
                                
                                <div class="form-group">
                                        <label for="link_google">Link a Google+</label>
                                        <input value="<?php echo !empty($configuracion->link_google) ? $configuracion->link_google : 'No definida'?>" type="link_google" class="form-control" id="link_google" placeholder="Link a Google+" name="link_google">
                                        <?php
                                                echo form_error("link_google","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                                        ?>
                                </div>
                                
                                <div class="form-group">
                                        <label for="link_instagram">Link a Instagram</label>
                                        <input value="<?php echo !empty($configuracion->link_instagram) ? $configuracion->link_instagram : 'No definida'?>" type="link_instagram" class="form-control" id="link_instagram" placeholder="Link a Instagram" name="link_instagram">
                                        <?php
                                                echo form_error("link_instagram","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                                        ?>
								</div>

								
								<div class="col-md-12 col-sm-12 col-xs-12">
									<center><button class="btn btn-primary" type="submit" id="button">Guardar la Configuración</button></center>
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
