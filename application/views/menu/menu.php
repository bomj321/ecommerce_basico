<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Listado de Menus de Ropa
                    <a  type="button" href="<?php echo base_url();?>menu/view_add" style="margin-left: 5px;" class="btn btn-primary"><span class="fa fa-plus"></span>Agregar</a>
                </h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
<!--CONTENIDO-->

                  <div class="x_content">
                    <table id="tipo" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Id Menu</th>
                                 <th>Nombre del Menu</th>
																 <th>Imagen</th>
                                 <th>Acciones</th>

                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($menus)):?>
                                 <?php foreach($menus as $menu):?>
                                     <tr>
                                         <td><?php echo $menu->id_tipo_ropa;?></td>
                                         <td><?php echo $menu->nombre_tipo_ropa;?></td>
																				 <td>
																					 <?php if (!empty($menu->imagen_tipo_ropa)): ?>
                                            <center><img src="<?php echo base_url().'public/images_ropa/'.$menu->imagen_tipo_ropa?>" style='width: 50px; height: 50px;' /></center>
                                              <?php else: ?>
                                                  <center><h4>Sin imagen</h4></center>
                                           <?php endif; ?>
																				 </td>
                                         <td>
                                             <a title="Editar Menu" href="<?php echo base_url();?>menu/edit_view/<?php echo $menu->id_tipo_ropa;?>" class="btn btn-success"><span class="fa fa-pencil"></span></a>

																						 <?php if ($menu->estado_importante == 1): ?>
																							 			<a title="Quitarlo de la pagina de Inicio" href="<?php echo base_url();?>menu/update_estado/<?php echo $menu->id_tipo_ropa;?>/0" class="btn btn-danger"><span class="fa fa-times"></span></a>
																							 	<?php else: ?>
																										<a title="Agregarlo a la pagina de Inicio" href="<?php echo base_url();?>menu/update_estado/<?php echo $menu->id_tipo_ropa;?>/1" class="btn btn-primary "><span class="fa fa-check"></span></a>
																						 <?php endif; ?>

                                      <!--       <a title="Deshabilitar Menu" href="<?php echo base_url();?>attrmoneda/delete/<?php echo $menu->id_tipo_ropa;?>" class="btn btn-danger "><span class="fa fa-trash-o"></span></a>-->



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
