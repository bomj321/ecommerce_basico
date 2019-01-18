<?php if(!empty($pagos)):?>
	<h6 style="margin-bottom: 10px;"><strong>Numero de Referencia: <?php echo $pagos[0]->numero_referencia ?> </strong></h6>
	<h6 style="margin-bottom: 10px;"><strong>Fecha de Pago: <?php echo $pagos[0]->fecha_pago ?> </strong></h6>
	<h6 style="margin-bottom: 10px;"><strong>Metodo de Pago: <?php echo $pagos[0]->metodo_de_pago ?> </strong></h6>
	<?php 
	 $total           = 0; 
	 $cantidad_total  = 0;

	?>
	<?php foreach ($pagos as $pago): ?>
		<?php		 
		  $total           = $pago->total_compra;
		  $cantidad_total +=$total;
		  ?>
	<?php endforeach ?>
	<h6 style="margin-bottom: 10px;"><strong>Total: <?php echo number_format($cantidad_total, 3, ',', '') ?> Euros </strong></h6>
	<h4 style="margin-top: 50px;"><strong>Articulos</strong></h4>
	<?php foreach ($pagos as $pago): ?>
		<p>Nombre del Articulo: <?php echo $pago->titulo_ropa ?> / Cantidad: <?php echo $pago->cantidad_articulo ?> / Costo: <?php echo number_format($pago->total_compra, 2, ',', '')  ?> Euros</p>		
	<?php endforeach ?>
<?php endif ?>