<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edici&oacute;n de Emails</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Email</h2>
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
                    echo form_open('email/edit_email',$formulario);
                  ?>

                  <input type="hidden" name="id_email" value="<?php echo $email->id_email ?>">

								<div class="form-group">
                      <label for="titulo_email">Titulo del Email(Se ver&aacute; de gran tama&ntilde;o y negrita)</label>
                      <input value="<?php echo $email->titulo_email ?>" required type="text" class="form-control" id="titulo_email" placeholder="Titulo de la Prenda(Sera vista en grande y negrita)" name="titulo_email">
                      <?php
                             echo form_error("titulo_email","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                       ?>
								</div>


                <div class="form-group" style="margin-top:50px;">
                  <input disabled type="text" class="form-control" placeholder="Hola (Nombre de Usuario) un gusto saludarte," >
                </div>

                <div class="form-group">
                        <label for="cuerpo_email">Cuerpo del Email</label>
                        <textarea required class="form-control" id="cuerpo_email" placeholder="Cuerpo del Email" name="cuerpo_email"><?php echo $email->cuerpo_email ?></textarea>
                        <?php
                               echo form_error("cuerpo_email","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")
                         ?>
                </div>


								<div class="col-md-12 col-sm-12 col-xs-12">
									<center><button class="btn btn-primary" type="submit" id="button">Editar Email</button></center>
								</div>

							<?php echo form_close(); ?>





<!--CONTENIDO-->
                </div>
              </div>
             </div>
            </div>
          </div>
</div>
