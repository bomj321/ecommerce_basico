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
				 <div class="collapse" id="collapse_<?php echo $tipo_ropa->nombre_tipo_ropa ?>">
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
				<div id="carrusel_indicaciones" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
							<li data-target="#carrusel_indicaciones" data-slide-to="0" class="active"></li>
							<li data-target="#carrusel_indicaciones" data-slide-to="1"></li>
							<li data-target="#carrusel_indicaciones" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
									<img class="d-block" src="<?php echo base_url().'public/images/prod-1.jpg'?>" alt="No hay Imagen">			  <div class="carousel-caption d-none d-md-block">
									<h5>...</h5>
									<p>...</p>
								</div>
						</div>

						<div class="carousel-item">
								<img class="d-block" src="<?php echo base_url().'public/images/prod-1.jpg'?>" alt="No hay Imagen">
									<div class="carousel-caption">
											<h5>Ropa de 3th generacion</h5>
											<p>Color negro mate</p>
											<p>
														<a href="<?php echo base_url();?>tienda/carrito" data-toggle="tooltip" data-placement="bottom" title="Agregar al Carrito" style="font-size: 1.5em; color: white;" type="button" class="btn btn-info">
														<i class="fas fa-shopping-cart"></i>
													</a>

														<a href="<?php echo base_url();?>tienda/carrito" data-toggle="tooltip" data-placement="bottom" title="Comprar" style="font-size: 1.5em; color: white;" type="button" class="btn btn-primary">
															<i class="fas fa-money-bill-alt"></i>
														</a>

														<a data-toggle="tooltip" data-placement="bottom" title="Existencia" style="font-size: 1.5em; color: white;" type="button" class="btn btn-dark">x3</a>
											 </p>
							</div>
						</div>


						<div class="carousel-item">
							<img class="d-block" src="<?php echo base_url().'public/images/prod-1.jpg'?>" alt="No hay Imagen">				 <div class="carousel-caption d-none d-md-block">
							 <h5>...</h5>
							 <p>...</p>
						 </div>
						</div>


					</div>
					<a class="carousel-control-prev carrusel_controles_tienda" href="#carrusel_indicaciones" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next carrusel_controles_tienda" href="#carrusel_indicaciones" role="button" data-slide="next" >
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
	</div>
<!--RESPUESTA AJAX-->

</div>
