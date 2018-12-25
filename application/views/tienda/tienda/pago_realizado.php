<?php  $paymentId = $_GET['paymentId']; ?>

<!--CODIGO PARA INSERTAR EN LAS COMPRAS-->

<!--CODIGO PARA CREAR UNA VARIABLE DE SESION Y EVITAR REENVIO DE FORMULARIO-->

<?php if (!$this->session->userdata("pago")): ?>
			 <?php 
					$data_pagado  = array(
							'pago'         => 'Ya_fue_pagada',							
						);
				$this->session->set_userdata($data_pagado);
			  ?>			  

   <?php else: ?>
		   	<?php 
		   			$this->session->unset_userdata('pago');
		   			redirect(base_url());
				 		
		   	 ?>
 <?php endif?>

 <?php 
		    $this->db->select('numero_referencia');
		    $this->db->from('compras');
		    $this->db->where('numero_referencia',$paymentId);
		    $resultado = $this->db->get();
		    $resultado_compra_mismoid = $resultado->result();

		    if (!empty($resultado_compra_mismoid)) {
		    	redirect(base_url().'tienda/pago_existente');
		    }
  ?>


<!--CODIGO PARA CREAR UNA VARIABLE DE SESION Y EVITAR REENVIO DE FORMULARIO-->	



<?php 
foreach ($articulos_comprar as $articulo_comprar) {
		$this->db->select('cantidad_ropa,titulo_ropa');
		$this->db->from('ropa_tienda');
		$this->db->where('id_ropa_tienda',$articulo_comprar->id_articulo);
		$resultado = $this->db->get();
		$cantidad_tienda = $resultado->row();

		$actualizar_cantidad = [
		    'cantidad_ropa' => $cantidad_tienda->cantidad_ropa - $articulo_comprar->cantidad_articulo,
		];

		$this->db->where("id_ropa_tienda",$articulo_comprar->id_articulo);
		$this->db->update("ropa_tienda",$actualizar_cantidad);



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
				 <p><span class="badge badge-danger">Se Recomienda tomar captura de esta Pantalla o guardar el ID.</span></p>
			</div>	
		</div>
	</div>
    <?php else: ?>
      <center><h4>SU PAGO NO HA SIDO REALIZADO</h4></center>


<?php endif; ?>

<!--CODIGO PARA BORRAR EL CARRITO Y ACTUALIZAR EL STOCK DE LA TIENDA-->



<?php 
 	$this->db->where('id_usuario', $this->session->userdata("id_usuario_tienda"));
   $this->db->delete('carrito_compra');

 ?>









<!--CODIGO PARA BORRAR EL CARRITO Y ACTUALIZAR EL STOCK DE LA TIENDA-->




