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
                                 <th>Id del Usuario</th>
                                 <th>Nombre del Usuario</th>
                                 <th>DNI del Usuario</th>
                                 <th>Email del Usuario</th>
																 <th>Acciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($usuarios)):?>
                                 <?php foreach($usuarios as $usuario):?>
                                     <tr>
                                         <td><?php echo $usuario->id_usuario;?></td>
                                         <td><?php echo $usuario->nombre_usuario;?></td>
                                         <td><?php echo $usuario->dni_usuario;?></td>
                                         <td><?php echo $usuario->email_usuario;?></td>
                                         <td>
                                             <a title="Enviar Correo" href="<?php echo base_url();?>menu/edit_view/<?php echo $usuario->id_usuario;?>" class="btn btn-primary btn-check"><span class="fa fa-envelope"></span></a>




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
