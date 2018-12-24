<div class="row" style="margin-bottom: 20px;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<center><h1>Productos más Importantes</h1></center>

	</div>
</div>

<div class="row pr-5 pl-5">

	<?php
 	$tipo_ropas = $this->db->query("SELECT * FROM tipo_ropa WHERE estado = 1 AND id_tipo_ropa IN (SELECT tipo_ropa FROM ropa_tienda WHERE estado_ropa = 1) AND estado_importante = 1 LIMIT 4;");
  ?>
  <?php foreach ($tipo_ropas->result() as $tipo_ropa): ?>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card_div">
			<div class="card" style="width: 18rem;">
					<center><img class="card-img-top" src="<?php echo base_url().'public/images_ropa/'.$tipo_ropa->imagen_tipo_ropa?>" alt="No hay Imagen"></center>
					<div class="card-body">
											<center><a href='<?php echo base_url();?>tienda/tienda/<?php echo $tipo_ropa->id_tipo_ropa ?>' class="btn btn-verde"><?php echo $tipo_ropa->nombre_tipo_ropa ?></a></center>
					</div>
			</div>
		</div>

	<?php endforeach; ?>

</div>
