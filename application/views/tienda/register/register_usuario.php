<div class="row titulo_inicio">	
	<div class="col-md-12">
			<center><h4>Gracias por querer pertenecer a nuestra Comunidad!!!</h4></center>	

	</div>
</div>


<?php if($this->session->flashdata("error_registro_usuario")):?>
<div class="row ">
	<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-xs-12">
		<div class="alert alert-danger" role="alert">
				  <p><?php echo $this->session->flashdata("error_registro_usuario"); ?>.</p>
		</div>
	</div>                                      
</div>
    <?php endif;?>


<div class="row formulario_inicio">	
	<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-xs-12">
    <?php echo form_open('tienda/registro_usuarios');  ?><!--FORMULARIO CIERRE Y APERTURA-->


				   <div class="form-group">
					    <label for="nombre_usuario">Ingresa tu Nombre Completo</label>
					    <input value="<?php echo set_value('nombre_usuario');?>" type="text" name="nombre_usuario" class="form-control" id="nombre_usuario" placeholder="Ingresa tu nombre(Solo Letras)" pattern="[A-Za-z ]+" required>
					    <?php echo form_error("nombre_usuario","<div style='margin-top:10px;' class='alert alert-danger'>","</div>")?>
				  </div>


				   <div class="form-group">
					    <label for="dni_usuario">Ingresa tu DNI</label>
					    <input value="<?php echo set_value('dni_usuario');?>" type="text" name="dni_usuario" class="form-control" id="dni_usuario" placeholder="Ingresa tu DNI(Solo Numeros)" pattern="[0-9]+" required>
					    <?php echo form_error("dni_usuario","<div style='margin-top:10px;' class='alert alert-danger'>","</div>")?>

				  </div>


				  <div class="form-group">
				    <label for="email_usuario">Direcci&oacute;n de Email</label>
				    <input value="<?php echo set_value('email_usuario');?>" type="email" name="email_usuario" class="form-control" id="email_usuario" aria-describedby="emailHelp" placeholder="Ingresa Email" required>
				    <small id="emailHelp" class="form-text text-muted">Ingresa tu email por favor Ej: xxxx@gmail.com</small>
				    <?php echo form_error("email_usuario","<div style='margin-top:10px;' class='alert alert-danger'>","</div>")?>

				  </div>



				  <div class="form-group">
				    <label for="contrasena">Contrase&ntilde;a</label>
				    <input value="<?php echo set_value('contrasena');?>" type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Ingresa Contrase&ntilde;a" required>
				    <?php echo form_error("contrasena","<div style='margin-top:10px;' class='alert alert-danger'>","</div>")?>

				  </div>

			  <button type="submit" class="btn listado_compra_usuario btn-primary">Registrarme</button>
    <?php echo form_close();?><!--FORMULARIO CIERRE Y APERTURA-->
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

	