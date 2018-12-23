<div class="row tienda_productos">
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding-top: 50px">

<!--FOR EACH DE LOS RESULTADOS MAS IMPORTANTES-->
 <?php
  $tipo_ropas = $this->db->query("SELECT * FROM tipo_ropa WHERE estado = 1 AND id_tipo_ropa IN (SELECT tipo_ropa FROM ropa_tienda WHERE estado_ropa = 1);");
 ?>
 <?php foreach ($tipo_ropas->result() as $tipo_ropa): ?>
				 <p>
					 <button class="btn btn-block collapse_boton" type="button" data-toggle="collapse" data-target="#collapse_<?php echo $tipo_ropa->nombre_tipo_ropa ?>" aria-expanded="false" aria-controls="collapse">
								 <?php echo $tipo_ropa->nombre_tipo_ropa ?>
						</button>
				 </p>
				 <div class="collapse <?php echo $tipo_ropa->id_tipo_ropa == $id_tipo_topa_url ? 'show':'';?> " id="collapse_<?php echo $tipo_ropa->nombre_tipo_ropa ?>">
					 <div class="card-body cuerpo_tarjeta">
						 <ul class="list-group li_sin_margen">

		 <?php
	 	$sub_tipo_ropas = $this->db->query("SELECT * FROM sub_tipo_ropa WHERE estado = 1 AND id_sub_tipo_ropa IN (SELECT sub_tipo_ropa FROM ropa_tienda WHERE estado_ropa = 1 AND $tipo_ropa->id_tipo_ropa = tipo_ropa);");

	 	 ?>
			   <?php foreach ($sub_tipo_ropas->result() as $sub_tipo_ropa): ?>
								 <li class="list-group-item borderless"><a onclick="articulos_tienda(<?php echo $tipo_ropa->id_tipo_ropa ?>,<?php echo $sub_tipo_ropa->id_sub_tipo_ropa ?>)"><?php echo $sub_tipo_ropa->nombre_sub_tipo_ropa ?></a></li>
							 <?php endforeach; ?>
						 </ul>

					 </div>
				 </div>

 <?php endforeach; ?>

<!--FOR EACH DE LOS RESULTADOS MAS IMPORTANTES-->
	</div>

<!--RESPUESTA AJAX-->
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="padding-top: 50px;" id="respuesta_ajax_articulo">
				<div class="" style="height:500px;">
						<center style="margin-top:15rem;"><h2>Por favor seleccione algun articulo de la tienda</h2></center>
				</div>
	</div>
<!--RESPUESTA AJAX-->

</div>
