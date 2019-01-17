
<center style='margin-top: 100px;'><h1>Compras Realizadas</h1></center>


<div class="row carrito_compra" id="listado_compra_usuario">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table id="carrito" class="display">
				        <thead>
				            <tr>
				                 <th>Id de la Compra</th>
                                 <th>Nombre del Usuario</th>
                                 <th>Metodo de Pago</th>
                                 <th>Estado de la Compra</th>
                                 <th>Estado de la Entrega</th>
                                 <th>Fecha de la Compra</th>
                                 <th>Numero de Referencia</th>
                                 <th>Ver Compra</th>

				            </tr>
				        </thead>
				        <tbody>
                             <?php if(!empty($pagos)):?>
                                 <?php foreach($pagos as $pago):?>
                                     <tr>
                                         <td><?php echo $pago->id_compra;?></td>
                                         <td><?php echo $pago->nombre_usuario;?></td>
                                         <td><?php echo $pago->metodo_de_pago;?></td>
                                         <td>
                                           <?php if ($pago->estado_compra == 1): ?>
                                              <button type="button" class="btn btn-success listado_compra_usuario">Compra Aprobada</button>
                                              <?php else: ?>
                                                <button type="button" class="btn-danger listado_compra_usuario">Compra Rechazada</button>
                                           <?php endif; ?>
                                         </td>

                                         <td>
                                           <?php if ($pago->estado_entrega == 1): ?>
                                                 <a class="btn btn-block btn-success listado_compra_usuario">Compra Entregada</a>
                                                 <?php else: ?>
                                                 <a  class="btn btn-block btn-danger listado_compra_usuario">Compra No Entregada</a>
                                           <?php endif; ?>
                                         </td>
                                         <td><?php echo $pago->fecha_pago;?></td>
                                         <td><?php echo $pago->numero_referencia;?></td>
                                         <td>
                                           <button title="Información de la Compra" type="button" class="btn btn-info btn-view-usuario listado_compra_usuario" data-toggle="modal" data-target="#modal-default" onclick="datoscompra('<?php echo $pago->numero_referencia;?>')">
                                                        <span class="fa fa-search"></span>
                                        </button>
                                           
                                        </td>

                                     </tr>
                                 <?php endforeach;?>
                             <?php endif;?>
                         </tbody>
   				 </table>
			</div>

<?php require_once('modal_comprar.php') ?>

</div>

