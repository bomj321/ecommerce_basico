<?php  $paymentId = $_GET['paymentId']; ?>

<!--CODIGO PARA INSERTAR EN LAS COMPRAS-->
<?php 

foreach ($articulos_comprar as $articulo_comprar) {
				$data = array(
			        'id_usuario'        => $this->session->userdata("id_usuario_tienda"),
			        'id_articulo'       => $articulo_comprar->id_articulo,
			        'cantidad_articulo' => $articulo_comprar->cantidad_articulo,
			        'total_compra'      => $articulo_comprar->precio_articulo * $articulo_comprar->cantidad_articulo,
			        'metodo_de_pago'    => 'Paypal',
			        'estado_compra'     => '1',
			        'fecha_pago'        => date('Y-m-d'),
			        'numero_referencia' => $paymentId,
			);

				$this->db->insert('compras', $data);
	}
 ?>

<!--CODIGO PARA INSERTAR EN LAS COMPRAS-->


<?php if ($estado_pago == true): ?>
	<div class="row">
		<div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12 col-xs-12 seccion_pago_realizado" id="captura_pantalla">
			<div class="jumbotron">
				  <p><strong>Pago Realizado ID: <?php echo $paymentId ?></strong></p>
				  <h6>Articulos Comprados:</h6>
				 <?php foreach ($articulos_comprar as $articulo_comprar): ?>
					<p><?php echo $articulo_comprar->titulo_ropa?>(<?php echo $articulo_comprar->precio_articulo . ' Euros'?>)  <strong>x<?php echo $articulo_comprar->cantidad_articulo ?></strong> : <?php echo $articulo_comprar->precio_articulo * $articulo_comprar->cantidad_articulo . ' Euros'?></p>
				<?php endforeach ?>
				 <p><strong>TOTAL DE LA COMPRA: <?php echo $suma_compra->suma_compra . ' Euros' ?></strong></p>
			</div>	
		</div>
	</div>
    <?php else: ?>
      <center><h4>SU PAGO NO HA SIDO REALIZADO</h4></center>


<?php endif; ?>

<!--CODIGO PARA BORRAR EL CARRITO Y ACTUALIZAR EL STOCK DE LA TIENDA-->
<!--<?php 
 	//$this->db->where('id_usuario', $this->session->userdata("id_usuario_tienda"));
   // $this->db->delete('carrito_compra');

 ?>-->

<!--CODIGO PARA BORRAR EL CARRITO Y ACTUALIZAR EL STOCK DE LA TIENDA-->




