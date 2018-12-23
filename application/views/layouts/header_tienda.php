 <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                          <a class="navbar-brand" href="<?php echo base_url(); ?>">Navbar</a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
<!--FOR EACH DE LOS RESULTADOS MAS IMPORTANTES-->

                                   <?php
                                    $tipo_ropas = $this->db->query("SELECT * FROM tipo_ropa WHERE estado = 1 AND id_tipo_ropa IN (SELECT tipo_ropa FROM ropa_tienda WHERE estado_ropa = 1) LIMIT 4;");
                                   ?>
                                   <?php foreach ($tipo_ropas->result() as $tipo_ropa): ?>
                                           <li class="nav-item dropdown">
                                             <a class="nav-link dropdown-toggle" href="#" id="ropa" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <?php echo $tipo_ropa->nombre_tipo_ropa ?>
                                             </a>
                                             <div class="dropdown-menu" aria-labelledby="ropa">
                                    <?php
                                    $sub_tipo_ropas = $this->db->query("SELECT * FROM sub_tipo_ropa WHERE estado = 1 AND id_sub_tipo_ropa IN (SELECT sub_tipo_ropa FROM ropa_tienda WHERE estado_ropa = 1 AND $tipo_ropa->id_tipo_ropa = tipo_ropa);");

                                     ?>
                                       <?php foreach ($sub_tipo_ropas->result() as $sub_tipo_ropa): ?>
                                               <a class="dropdown-item" href="<?php echo base_url();?>tienda/tienda"> <?php echo $sub_tipo_ropa->nombre_sub_tipo_ropa ?></a>
                                      <?php endforeach; ?>
                                             </div>
                                           </li>
                                   <?php endforeach; ?>
                                   
<!--FOR EACH DE LOS RESULTADOS MAS IMPORTANTES-->

<!--CUARTO DROPDOWN-->
                             <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>tienda/tienda" role="button">
                                  Y m&aacute;s...
                                </a>
                              </li>

<!--CUARTO DROPDOWN-->
                        </ul>


                        <?php if ($this->session->userdata("login_tienda")): ?>
                            <ul class="navbar-nav mr-5">
                                <li class="nav-item dropdown">

                                    <a class="nav-link btn btn btn-verde my-2 my-sm-0" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                      Opciones
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="opciones">
                                      <a class="dropdown-item" href="<?php echo base_url();?>tienda/tienda">Ver Carrito</a>
                                      <a class="dropdown-item" href="<?php echo base_url();?>tienda/logout">Cerrar Sesi&oacute;n</a>
                                    </div>
                                  </li>
                            </ul>
                        <?php else: ?>

                           <a class="nav-link btn btn-verde mr-5" href="<?php echo base_url();?>tienda/inicio">Iniciar Sesi&oacute;n</a>

                         <?php endif ?>



                          </div>
                    </nav>
            </div>
      </div>
