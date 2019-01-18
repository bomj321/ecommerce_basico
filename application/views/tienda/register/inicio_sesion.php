<div class="row titulo_inicio">
	<div class="col-md-12">
			<center><h4>Bienvenido a Londoeye.es</h4></center>

	</div>
</div>
<!--REGISTRO CORRECTO Y ERRORES-->
<?php if($this->session->flashdata("registro_correcto")):?>
<div class="row ">
	<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-xs-12">
		<div class="alert alert-success" role="alert">
				  <center><p><?php echo $this->session->flashdata("registro_correcto"); ?>.</p></center>
		</div>
	</div>
</div>
    <?php endif;?>

 <?php if($this->session->flashdata("error_datos_incorrectos")):?>
<div class="row ">
	<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-xs-12">
		<div class="alert alert-danger" role="alert">
				  <center><p><?php echo $this->session->flashdata("error_datos_incorrectos"); ?>.</p></center>
		</div>
	</div>
</div>
    <?php endif;?>
<!--REGISTRO CORRECTO Y ERRORES-->
<div class="row formulario_inicio">
	<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-xs-12">
    <?php echo form_open('tienda/login');  ?><!--FORMULARIO CIERRE Y APERTURA-->
			  <div class="form-group">
			    <label for="email_usuario">Direcci&oacute;n de Email</label>
			    <input name="email_usuario" value="<?php echo set_value('email_usuario');?>" type="email" class="form-control" id="email_usuario" aria-describedby="emailHelp" placeholder="Ingresa Email" required>
			    <small id="email_usuario" class="form-text text-muted">Ingresa tu email por favor Ej: xxxx@gmail.com</small>
			    <?php echo form_error("email_usuario","<div style='margin-top:10px;' class='alert alert-danger'>","</div>")?>

			  </div>
			  <div class="form-group">
			    <label for="contrasena">Contrase&ntilde;a</label>
			    <input name="contrasena" value="<?php echo set_value('contrasena');?>" type="password" class="form-control" id="contrasena" placeholder="Ingresa Contrase&ntilde;a" required>
			    <?php echo form_error("contraseña","<div style='margin-top:10px;' class='alert alert-danger'>","</div>")?>

			  </div>
			  <button type="submit" class="btn listado_compra_usuario btn-primary">Iniciar Sesi&oacute;n</button>
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
			<center><p>¿Nuevo en el Sitio? <a href="<?php echo base_url();?>tienda/registrate" title="">Registrate!!!</a></p></center>
	</div>
</div>
