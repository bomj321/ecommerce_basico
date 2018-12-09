<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Listado de Prendas<!--<small>Todos los clientes</small>--></h3>
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
                                 <th>Descripci&oacute;</th>
                                 <th>Imagen</th>
                                 <th>Tipo de la Ropa</th>
                                 <th>Sub tipo de la Ropa</th>
                                 <th>Acciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($ropa_subida)):?>
                                 <?php foreach($ropa_subida as $ropa_subida):?>
                                     <tr>
                                         <td><?php echo $ropa_subida->titulo_ropa;?></td>
                                         <td><?php echo $ropa_subida->color_ropa;?></td>
                                         <td><?php echo $ropa_subida->descripcion_ropa;?></td>
                                         <td>
                                           <?php if (!empty($ropa_subida->imagen_ropa)): ?>
                                              <img src="<?php echo base_url().'public/images_ropa/'.$ropa_subida->imagen_ropa?>" style='width: 50px; height: 50px;' />
                                              <?php else: ?>
                                                  <center><h4>Sin imagen</h4></center>
                                           <?php endif; ?>
                                         </td>
                                         <td><?php echo $ropa_subida->tipo_ropa;?></td>
                                         <td><?php echo $ropa_subida->sub_tipo_ropa;?></td>
                                         <td>Acciones</td>
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
