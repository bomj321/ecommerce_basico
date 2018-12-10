<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Listado de Prendas
									<a  type="button" href="<?php echo base_url();?>ropa/add_view" style="margin-left: 5px;" class="btn btn-primary"><span class="fa fa-plus"></span>Agregar</a>

								</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
<!--CONTENIDO-->

                  <div class="x_content">
                    <table id="ropa" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Titulo de la Ropa</th>
                                 <th>Explicacion del Color</th>
                                 <th>Descripci&oacute;n</th>
																 <th>Cantidad Disponible</th>
																 <th>Precio</th>
                                 <th>Imagen</th>
                                 <th>Menu</th>
                                 <th>Submenu</th>
                                 <th>Acciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($ropa_subida)):?>
                                 <?php foreach($ropa_subida as $ropa_subida):?>
                                     <tr >
                                         <td><?php echo $ropa_subida->titulo_ropa;?></td>
                                         <td><?php echo $ropa_subida->color_ropa;?></td>
                                         <td><?php echo $ropa_subida->descripcion_ropa;?></td>
																				 <td>
																					<center><button type="button" class="btn btn-<?php echo $ropa_subida->cantidad_ropa < 10 ? 'warning' : 'success' ?> btn-block"> <?php echo $ropa_subida->cantidad_ropa;?></button></center>
																				 </td>
																				 <td><?php echo $ropa_subida->precio_ropa;?> E</td>
                                         <td>
                                           <?php if (!empty($ropa_subida->imagen_ropa)): ?>
                                            <center><img src="<?php echo base_url().'public/images_ropa/'.$ropa_subida->imagen_ropa?>" style='width: 50px; height: 50px;' /></center>
                                              <?php else: ?>
                                                  <center><h4>Sin imagen</h4></center>
                                           <?php endif; ?>
                                         </td>
                                         <td><?php echo $ropa_subida->nombre_tipo_ropa;?></td>
                                         <td><?php echo $ropa_subida->nombre_subtipo_ropa;?></td>
                                         <td>
																					 <a title="Editar Ropa" href="<?php echo base_url();?>ropa/edit_view/<?php echo $ropa_subida->id_ropa_tienda;?>" class="btn btn-success btn-check"><span class="fa fa-pencil"></span></a>
																		      <a title="Eliminar Ropa" onclick="return confirm('Estas seguro de querer eliminar esta prenda?')" href="<?php echo base_url();?>ropa/delete/<?php echo $ropa_subida->id_ropa_tienda;?>" class="btn btn-danger "><span class="fa fa-trash-o"></span></a>

                                         </td>
                                     </tr>
                                 <?php endforeach;?>
                             <?php endif;?>
                         </tbody>
                     </table>



                </div>
<!--CONTENIDO-->

              </div>
             </div>
            </div>
          </div>
</div>
