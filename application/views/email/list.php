<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Listado de Emails Guardados
                  <a  type="button" href="<?php echo base_url();?>email/add_view" style="margin-left: 5px;" class="btn btn-primary"><span class="fa fa-plus"></span>Agregar</a>

                </h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
<!--CONTENIDO-->

                  <div class="x_content">
                    <table id="email" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Id del Email</th>
                                 <th>Titulo del Email</th>
                                 <th>Cuerpo del Email</th>
                                 <th>Acciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($emails)):?>
                                 <?php foreach($emails as $email):?>
                                     <tr>
                                         <td><?php echo $email->id_email;?></td>
                                         <td><?php echo $email->titulo_email;?></td>
                                         <td><?php echo $email->cuerpo_email;?></td>
                                         <td>
																					  <a title="Editar Email" href="<?php echo base_url();?>email/edit_view/<?php echo $email->id_email;?>" class="btn btn-success btn-check"><span class="fa fa-pencil"></span></a>
																				  	<a title="Eliminar Email" onclick="return confirm('Estas seguro de querer eliminar esta email?')" href="<?php echo base_url();?>email/delete/<?php echo $email->id_email;?>" class="btn btn-danger "><span class="fa fa-trash-o"></span></a>
																						<?php if ($email->estado_email==0): ?>
																									<a title="Activar Email" href="<?php echo base_url();?>email/update/<?php echo $email->id_email;?>/1" class="btn btn-success btn-check"><span class="fa fa-check"></span></a>
																									<?php else: ?>
																									<a title="Desactivar Email" href="<?php echo base_url();?>email/update/<?php echo $email->id_email;?>/0" class="btn btn-danger btn-check"><span class="fa fa-remove"></span></a>
																						<?php endif; ?>
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
