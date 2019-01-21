
<div class="row boton_comprar" style="margin-top: 120px;">

			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
		<?php if (!empty($cantidad_articulos)): ?>
						<?php
							 $formulario = array('class' => 'form-horizontal');
							 echo form_open('tienda/pagar_paypal',$formulario);
						 ?>
						        <input required type="hidden" name="nombre_articulo" value="Prendas de Moda, en la Tienda LondonEye">
								<input required type="hidden" name="id_persona" value="<?php echo $this->session->userdata("id_usuario_tienda") ?>">
								<input required type="hidden" name="costo_total" value="<?php echo $suma_compra->suma_compra ?>">
								<input required type="hidden" name="cantidad_articulos" value="<?php echo $numero_articulos ?>">
								<button type="submit" class="btn btn-primary btn-block listado_compra_usuario" name="button">COMPRAR POR PAYPAL</button>
						<?php echo form_close(); ?>
		<?php endif; ?>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
		<?php if (!empty($cantidad_articulos)): ?>

				<a  href="" class="btn btn-block btn-warning listado_compra_usuario">COMPRAR POR REDYS</a>

		<?php endif; ?>			
			</div>

			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
				<a  href="" class="btn btn-block btn-success listado_compra_usuario">TOTAL: <?php echo number_format($suma_compra->suma_compra,4) ?> EUROS</a>
			</div>

</div>
<div class="row carrito_compra">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table id="carrito" class="display" style="width:100%">
				        <thead>
				            <tr>
				                <th>Articulo</th>
								<th>Cantidad Existente</th>
				                <th>Cantidad a Comprar</th>
				                <th>Precio Unitario</th>
				                <th>Costo Total</th>
				                <th>Acciones</th>

				            </tr>
				        </thead>
				        <tbody>
									<?php foreach ($cantidad_articulos as $cantidad_articulo): ?>
										<tr>
												<td><?php echo $cantidad_articulo->titulo_ropa ?></td>
												<td><?php echo $cantidad_articulo->cantidad_ropa ?></td>
												<td>
													<input type="hidden" id="carrito_cantidad_existente_<?php echo $cantidad_articulo->id_carrito_compra  ?>" value="<?php echo $cantidad_articulo->cantidad_ropa ?>">
													<input type="text" id="carrito_cantidad_<?php echo $cantidad_articulo->id_carrito_compra  ?>" value="<?php echo $cantidad_articulo->cantidad_articulo ?>">
												</td>
												<td><?php echo number_format($cantidad_articulo->precio_articulo,4) ?></td>
												<td><?php echo number_format($cantidad_articulo->cantidad_articulo * $cantidad_articulo->precio_articulo,4)  ?></td>
												<td>
													<a class="btn btn-sm btn-success listado_compra_usuario" onclick="actualizar_carrito(<?php echo $cantidad_articulo->id_carrito_compra; ?>)">Actualizar</a>
													<a class="btn btn-sm btn-primary listado_compra_usuario" onclick="eliminar_carrito(<?php echo $cantidad_articulo->id_carrito_compra; ?>)">Eliminar</a>
												</td>

										</tr>
									<?php endforeach; ?>
				        </tbody>
   				 </table>
			</div>
</div>
