 <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenedor_slider">
                    <nav class="navbar navbar-expand-lg navbar-light">
                          <a class="navbar-brand" href="<?php echo base_url(); ?>"><span style="font-size: 2rem;"> <span><i class="far fa-eye"></i> </span></a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
<!--FOR EACH DE LOS RESULTADOS MAS IMPORTANTES-->

                                   <?php
                                    $tipo_ropas = $this->db->query("SELECT * FROM tipo_ropa WHERE estado = 1 AND id_tipo_ropa IN (SELECT tipo_ropa FROM ropa_tienda WHERE estado_ropa = 1) AND estado_importante = 1 LIMIT 4;");
                                   ?>
                                   <?php foreach ($tipo_ropas->result() as $tipo_ropa): ?>
                                           <li class="nav-item">
                                             <a class="nav-link" href="<?php echo base_url();?>tienda/tienda/<?php echo $tipo_ropa->id_tipo_ropa ?>" role="button">
                                               <?php echo $tipo_ropa->nombre_tipo_ropa ?>
                                             </a>

                                           </li>
                                   <?php endforeach; ?>

<!--FOR EACH DE LOS RESULTADOS MAS IMPORTANTES-->

<!--CUARTO DROPDOWN-->
                             <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url();?>tienda/tienda/all" role="button">
                                  Y m&aacute;s...
                                </a>
                              </li>

<!--CUARTO DROPDOWN-->
                        </ul>


                        <?php if ($this->session->userdata("login_tienda")): ?>
                            <ul class="navbar-nav mr-5">
                                <li class="nav-item dropdown">

                                    <a class="nav-link btn btn-primary my-2 my-sm-0 listado_compra_usuario" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                                      Bienvenido, <?php echo $this->session->userdata("nombre_persona_tienda") ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="opciones">
                                      <a class="dropdown-item" href="<?php echo base_url();?>tienda/carrito"><span><i class="fas fa-shopping-cart icono_header"></i></span>Ver Carrito</a>
                                      <a class="dropdown-item" href="<?php echo base_url();?>tienda/compras/<?php echo $this->session->userdata("login_tienda") ?>"><span><i class="fas fa-shopping-bag icono_header"></i></span>Ver mis Compras</a>
                                      <a class="dropdown-item" href="<?php echo base_url();?>tienda/logout"><i class="fas fa-sign-out-alt icono_header"></i></span>Cerrar Sesi&oacute;n</a>
                                    </div>
                                  </li>
                            </ul>
                        <?php else: ?>

                           <a class="nav-link btn btn-primary mr-5 listado_compra_usuario" href="<?php echo base_url();?>tienda/inicio"><i class="fas fa-user-tag"></i> Iniciar Sesi&oacute;n</a>

                         <?php endif ?>



                          </div>
                    </nav>
            </div>
      </div>
