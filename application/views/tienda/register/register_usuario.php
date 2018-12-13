<div class="row titulo_inicio">	
	<div class="col-md-12">
			<center><h4>Gracias por querer pertenecer a nuestra Comunidad!!!</h4></center>	

	</div>
</div>


<?php if($this->session->flashdata("error")):?>
<div class="row ">
	<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-xs-12">
		<div class="alert alert-danger" role="alert">
				  <h4 class="alert-heading">Well done!</h4>
				  <p><?php echo $this->session->flashdata("error"); ?>.</p>
		</div>
	</div>                                      
</div>
    <?php endif;?>


<div class="row formulario_inicio">	
	<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-xs-12">
		<form>

				   <div class="form-group">
					    <label for="nombre_usuario">Ingresa tu Nombre Completo</label>
					    <input type="text" class="form-control" id="nombre_usuario"placeholder="Ingresa tu nombre" pattern="[A-Za-z ]+">
					    <?php echo form_error("nombre_usuario","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")?>
				  </div>


				   <div class="form-group">
					    <label for="dni_usuario">Ingresa tu DNI</label>
					    <input type="text" class="form-control" id="dni_usuario"placeholder="Ingresa tu DNI" pattern="[0-9]+">
					    <?php echo form_error("nombre_usuario","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")?>

				  </div>


				  <div class="form-group">
				    <label for="email_usuario">Direcci&oacute;n de Email</label>
				    <input type="email" class="form-control" id="email_usuario" aria-describedby="emailHelp" placeholder="Ingresa Email">
				    <small id="emailHelp" class="form-text text-muted">Ingresa tu email por favor Ej: xxxx@gmail.com</small>
				    <?php echo form_error("nombre_usuario","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")?>

				  </div>



				  <div class="form-group">
				    <label for="contrasena">Contrase&ntilde;a</label>
				    <input type="password" class="form-control" id="contrasena" placeholder="Ingresa Contrase&ntilde;a">
				    <?php echo form_error("nombre_usuario","<span style='margin-top:10px;' class='pull-left label label-danger'>","</span>")?>

				  </div>

			  <button type="submit" class="btn btn-primary">Registrarme</button>
		</form>
	</div>
</div>

<div class="row">
	<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-xs-12">
			<hr>
	</div>	
</div>

<div class="row" style="margin-bottom: 200px;">
	<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-xs-12">
			<center><p>¿Ya estas Registrado? <a href="<?php echo base_url();?>tienda/inicio" title="">Inicia Sesi&oacute;n</a></p></center>
	</div>	
</div>

	