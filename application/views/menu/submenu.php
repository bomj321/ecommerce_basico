<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Listado de Submenus de Ropa
                    <a  type="button" href="<?php echo base_url();?>menu/view_add_submenu" style="margin-left: 5px;" class="btn btn-primary"><span class="fa fa-plus"></span>Agregar</a>
                </h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
<!--CONTENIDO-->

                  <div class="x_content">
                    <table id="subtipo" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Id Submenu</th>
                                 <th>Nombre del Submenu</th>
                                 <th>Acciones</th>

                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($submenus)):?>
                                 <?php foreach($submenus as $submenu):?>
                                     <tr>
                                         <td><?php echo $submenu->id_sub_tipo_ropa;?></td>
                                         <td><?php echo $submenu->nombre_sub_tipo_ropa;?></td>
                                         <td>
                                             <a title="Editar SubMenu" href="<?php echo base_url();?>menu/edit_view_submenu/<?php echo $submenu->id_sub_tipo_ropa;?>" class="btn btn-success btn-check"><span class="fa fa-pencil"></span></a>

                                      <!--       <a title="Deshabilitar Menu" href="<?php echo base_url();?>attrmoneda/delete/<?php echo $submenu->id_sub_tipo_ropa;?>" class="btn btn-danger "><span class="fa fa-trash-o"></span></a>-->



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
