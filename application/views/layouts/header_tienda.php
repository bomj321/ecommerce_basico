 <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                          <a class="navbar-brand" href="<?php echo base_url(); ?>">Navbar</a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
<!--PRIMER DROPDOWN-->
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="ropa" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Ropas
                                </a>
                                <div class="dropdown-menu" aria-labelledby="ropa">
                                  <a class="dropdown-item" href="<?php echo base_url();?>tienda/tienda">Action</a>
                                  <a class="dropdown-item" href="<?php echo base_url();?>tienda/tienda">Another action</a>                                 
                                </div>
                              </li>
<!--PRIMER DROPDOWN-->

<!--SEGUNDO DROPDOWN-->
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="zapatos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Zapatos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="zapatos">
                                  <a class="dropdown-item" href="<?php echo base_url();?>tienda/tienda">Action</a>
                                  <a class="dropdown-item" href="<?php echo base_url();?>tienda/tienda">Another action</a>                                 
                                </div>
                              </li>

<!--SEGUNDO DROPDOWN-->


<!--TERCERO DROPDOWN-->



                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="zandalias" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Zandalias
                                </a>
                                <div class="dropdown-menu" aria-labelledby="zandalias">
                                  <a class="dropdown-item" href="<?php echo base_url();?>tienda/tienda">Action</a>
                                  <a class="dropdown-item" href="<?php echo base_url();?>tienda/tienda">Another action</a>                                 
                                </div>
                              </li>

<!--TERCERO DROPDOWN-->

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