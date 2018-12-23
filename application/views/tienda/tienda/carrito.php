
<div class="row boton_comprar">

			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
							<a  href="" class="btn btn-primary btn-block">COMPRAR POR PAYPAL</a>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
				<a  href="" class="btn btn-verde btn-block">COMPRAR POR REDYS</a>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
				<a  href="" class="btn btn-warning btn-block">TOTAL: <?php echo $suma_compra->suma_compra ?> EUROS</a>
			</div>

</div>
<div class="row carrito_compra">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table id="carrito" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Costo Total</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
					<?php foreach ($cantidad_articulos as $cantidad_articulo): ?>
						<tr>
								<td><?php echo $cantidad_articulo->titulo_ropa ?></td>
								<td><input type="text" id="carrito_cantidad_<?php echo $cantidad_articulo->id_carrito_compra  ?>" value="<?php echo $cantidad_articulo->cantidad_articulo ?>"></td>
								<td><?php echo $cantidad_articulo->precio_articulo ?></td>
								<td><?php echo number_format($cantidad_articulo->cantidad_articulo * $cantidad_articulo->precio_articulo,4)  ?></td>
								<td>
									<a class="btn btn-block btn-success">Actualizar</a>
									<a class="btn btn-block btn-warning">Eliminar</a>
								</td>

						</tr>
					<?php endforeach; ?>
        </tbody>
    </table>
		</div>
</div>
