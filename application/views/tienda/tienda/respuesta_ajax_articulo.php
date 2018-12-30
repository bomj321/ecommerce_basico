<div class="row">
    <?php foreach ($articulos as $articulo): ?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 card_body_articulos">
            <div class="card" style="width: 18rem;">
                <img style="height: 200px; padding: 20px 20px 20px 20px;" src="<?php echo base_url() . 'public/images_ropa/' . $articulo->imagen_ropa ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $articulo->titulo_ropa ?></h5>
                    <p class="card-text"><?php echo $articulo->color_ropa ?></p>
                    <hr>
                    <?php if ($this->session->userdata("login_tienda")): ?>
                        <a onclick="agregar_carrito(<?php echo $this->session->userdata("id_usuario_tienda") ?>,<?php echo $articulos[0]->id_ropa_tienda ?>,<?php echo $articulos[0]->precio_ropa ?>)" data-toggle="tooltip" data-placement="bottom" title="Agregar al Carrito" style="font-size: 1.5em; color: white;" type="button" class="btn btn-dark">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                                          <!--    <a href="<?php echo base_url(); ?>tienda/carrito_agregar/<?php echo $articulos[0]->id_ropa_tienda ?>" data-toggle="tooltip" data-placement="bottom" title="Comprar" style="font-size: 1.5em; color: white;" type="button" class="btn btn-primary">
                                              <i class="fas fa-money-bill-alt"></i>
                                            </a>-->
                    <?php endif ?>
                    <a data-toggle="tooltip" data-placement="bottom" title="Existencia" style="font-size: 1.5em; color: white;" type="button" class="btn btn-dark">x<?php echo $articulos[0]->cantidad_ropa ?></a>
                </div>
            </div>
        </div> 
    <?php endforeach; ?>
</div>

