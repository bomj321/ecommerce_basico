<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Editar Submenu de Prendas</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edici&oacute;n del Submenu de Prendas</h2>
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
							 echo form_open('menu/edit_submenu',$formulario);
							 ?>

               <input type="hidden" name="id_submenu" value="<?php echo $editar_submenu->id_sub_tipo_ropa ?>">


								<div class="form-group" style="margin-bottom: 50px;">
                  <label for="submenu">Menu</label>
                  <input type="text" class="form-control" id="submenu" placeholder="Nuevo Submenu" name="submenu" value="<?php echo $editar_submenu->nombre_sub_tipo_ropa ?>">
                  <?php
                         echo form_error("submenu","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                   ?>

								</div>

								<div class="col-md-12 col-sm-12 col-xs-12">
									<center><button class="btn btn-primary" type="submit" id="button">Editar Submenu</button></center>
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
