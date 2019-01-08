<?php if(!empty($pagos)):?>
	<h5 style="margin-bottom: 10px;"><strong>Numero de Referencia: <?php echo $pagos[0]->numero_referencia ?> </strong></h5>
	<h5 style="margin-bottom: 10px;"><strong>Fecha de Pago: <?php echo $pagos[0]->fecha_pago ?> </strong></h5>
	<h5 style="margin-bottom: 10px;"><strong>Metodo de Pago: <?php echo $pagos[0]->metodo_de_pago ?> </strong></h5>
	<h5 style="margin-bottom: 10px;"><strong>Total: <?php echo $pagos[0]->total_compra ?> Euros </strong></h5>
	<h4 style="margin-top: 50px;"><strong>Articulos</strong></h4>
	<?php foreach ($pagos as $pago): ?>
		<h5>Nombre del Articulo: <?php echo $pago->titulo_ropa ?> / Cantidad: <?php echo $pago->cantidad_articulo ?> / Costo: <?php echo $pago->total_compra ?> Euros</h5>		
	<?php endforeach ?>
<?php endif ?>