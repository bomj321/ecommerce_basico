<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Productos m&aacute;s vendidos</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
<!--CONTENIDO-->
                  <div class="x_content"> 
                  	<table id="listado_productos_vendidos" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Id del Producto</th>
                                 <th>Nombre del Producto</th>
                                 <th>Cantidad Compradas</th>
                                 <th>Dinero Generado</th>                                 
                                 <th>Ver Informaci&oacute;n</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($productos_vendidos)):?>
                                 <?php foreach($productos_vendidos as $producto_vendido):?>
                                 		<?php if ($producto_vendido->cantidad_vendidos >= 1): ?>                                 			
                                 		
			                                     <tr>
			                                         <td><?php echo $producto_vendido->id_articulo;?></td>
			                                         <td><?php echo $producto_vendido->titulo_ropa;?></td>
			                                         <td><?php echo $producto_vendido->cantidad_vendidos;?></td>
			                                         <td>
			                                         	<?php echo $numero_formateado = number_format($producto_vendido->total_compra, 2, '.', '');?> Euros                                        	
			                                         </td>                                        
			                                         <td>
			                                         	<center>
			                                         		  <button title="Información de las Ventas" type="button" class="btn btn-info btn-view-usuario" data-toggle="modal" data-target="#modal_ventas" onclick="datosventas('<?php echo $producto_vendido->id_articulo;?>','<?php echo date("Y") ?>')">
			                                                        <span class="fa fa-search"></span>
			                                       			 </button>
														</center>
			                                           
			                                        </td>

			                                     </tr>
			                            <?php endif ?>         
                                 <?php endforeach;?>
                             <?php endif;?>
                         </tbody>
                     </table>
                 </div>
<!--CONTENIDO-->

		<?php require_once('modal_vendidos.php') ?>


              </div>
             </div>
            </div>
          </div>
</div>
