<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Listado de Usuarios Registrados</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
<!--CONTENIDO-->

                  <div class="x_content">
                    <table id="listado_usuario" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
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
                                              <button type="button" class="btn btn-success">Compra Aprobada</button>
                                              <?php else: ?>
                                                <button type="button" class="btn btn-warning">Compra Rechazada</button>
                                           <?php endif; ?>
                                         </td>

                                         <td>
                                           <?php if ($pago->estado_entrega == 1): ?>
                                                 <a class="btn btn-success btn-block">Compra Entregada</a>
                                                 <?php else: ?>
                                                 <a onclick="return confirm('Estas seguro?')" href="<?php echo base_url();?>pago/update/<?php echo $pago->id_compra;?>" class="btn btn-danger btn-block">Compra No Entregada</a>
                                           <?php endif; ?>
                                         </td>
                                         <td><?php echo $pago->fecha_pago;?></td>
                                         <td><?php echo $pago->numero_referencia;?></td>
                                         <td>
                                           <button title="Información de la Compra" type="button" class="btn btn-info btn-view-usuario" data-toggle="modal" data-target="#modal-default" class="btn btn-info btn-view" onclick="datoscompra('<?php echo $pago->numero_referencia;?>')">
                                                        <span class="fa fa-search"></span>
                                        </button>
                                           
                                        </td>

                                     </tr>
                                 <?php endforeach;?>
                             <?php endif;?>
                         </tbody>
                     </table>



                </div>
<!--CONTENIDO-->

<?php require_once('modal_compra.php') ?>



              </div>
             </div>
            </div>
          </div>
</div>
