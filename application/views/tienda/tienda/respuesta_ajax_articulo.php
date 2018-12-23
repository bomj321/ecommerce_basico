<div id="carrusel_indicaciones" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php $i=0; foreach ($articulos as $articulo): ?>
      <li data-target="#carrusel_indicaciones" data-slide-to="<?php echo $i ?>"></li>

    <?php $i++; endforeach; ?>

  </ol>



  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block" src="<?php echo base_url().'public/images_ropa/'.$articulos[0]->imagen_ropa?>" alt="No hay Imagen">
          <div class="carousel-caption">
              <h5 class="letras_slider_articulo"><?php echo $articulos[0]->titulo_ropa ?></h5>
              <p class="letras_slider_articulo"><?php echo $articulos[0]->color_ropa ?></p>
              <p>          
              <?php if ($this->session->userdata("login_tienda")): ?>
                    <a onclick="agregar_carrito(<?php echo $this->session->userdata("id_usuario_tienda") ?>,<?php echo $articulos[0]->id_ropa_tienda ?>,<?php echo $articulos[0]->precio_ropa ?>)" data-toggle="tooltip" data-placement="bottom" title="Agregar al Carrito" style="font-size: 1.5em; color: white;" type="button" class="btn btn-info">
                    <i class="fas fa-shopping-cart"></i>
                  </a>

                    <a href="<?php echo base_url();?>tienda/carrito_agregar/<?php echo $articulos[0]->id_ropa_tienda ?>" data-toggle="tooltip" data-placement="bottom" title="Comprar" style="font-size: 1.5em; color: white;" type="button" class="btn btn-primary">
                      <i class="fas fa-money-bill-alt"></i>
                    </a>
              <?php endif ?>

                    <a data-toggle="tooltip" data-placement="bottom" title="Existencia" style="font-size: 1.5em; color: white;" type="button" class="btn btn-dark">x<?php echo $articulos[0]->cantidad_ropa ?></a>


               </p>
      </div>
    </div>

        <?php  $o=0; foreach ($articulos as $articulo): ?>
      <?php if ($o != 0): ?>

          <div class="carousel-item">
              <img class="d-block" src="<?php echo base_url().'public/images_ropa/'.$articulo->imagen_ropa?>" alt="No hay Imagen">
                <div class="carousel-caption">
                    <h5 class="letras_slider_articulo"><?php echo $articulo->titulo_ropa ?></h5>
                    <p class="letras_slider_articulo"><?php echo $articulo->color_ropa ?></p>
                    <p>

                      <?php if ($this->session->userdata("login_tienda")): ?>
                        <a onclick="agregar_carrito(<?php echo $this->session->userdata("id_usuario_tienda") ?>,<?php echo $articulo->id_ropa_tienda ?>,<?php echo $articulo->precio_ropa ?>)" data-toggle="tooltip" data-placement="bottom" title="Agregar al Carrito" style="font-size: 1.5em; color: white;" type="button" class="btn btn-info">
                        <i class="fas fa-shopping-cart"></i>
                      </a>

                        <a href="<?php echo base_url();?>tienda/carrito_agregar_tienda/<?php echo $articulo->id_ropa_tienda ?>" data-toggle="tooltip" data-placement="bottom" title="Comprar" style="font-size: 1.5em; color: white;" type="button" class="btn btn-primary">
                          <i class="fas fa-money-bill-alt"></i>
                        </a>
                    <?php endif ?>

                          <a data-toggle="tooltip" data-placement="bottom" title="Existencia" style="font-size: 1.5em; color: white;" type="button" class="btn btn-dark">x<?php echo $articulo->cantidad_ropa ?></a>
                     </p>
            </div>
          </div>
        <?php endif; ?>

        <?php  $o++; endforeach; ?>
  </div>
  <a class="carousel-control-prev carrusel_controles_tienda" href="#carrusel_indicaciones" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next carrusel_controles_tienda" href="#carrusel_indicaciones" role="button" data-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
