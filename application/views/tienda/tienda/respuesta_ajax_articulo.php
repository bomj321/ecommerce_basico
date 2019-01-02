<div class="row">
    <?php foreach ($articulos as $articulo): ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 card_body_articulos" style="display:inline-block; text-align: center;">
            <div class="card" style="width: 18rem;">
                <img style="width:100%;height: 200px; padding: 20px 20px 20px 20px; overflow:hidden;" src="<?php echo base_url() . 'public/images_ropa/' . $articulo->imagen_ropa ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $articulo->titulo_ropa ?></h5>
                    <p class="card-text"><?php echo $articulo->color_ropa ?></p>
                    <hr>

                    <?php if ($this->session->userdata("login_tienda")): ?>

                    <p style="margin-bottom: 0px;">
                        <a onclick="agregar_carrito(<?php echo $this->session->userdata("id_usuario_tienda") ?>,<?php echo $articulo->id_ropa_tienda ?>,<?php echo $articulo->precio_ropa ?>)" data-toggle="tooltip" data-placement="bottom" title="Agregar al Carrito" style="color: black; cursor: pointer">
                            Agregar al carrito <i class="fas fa-shopping-cart"></i>
                        </a>
                    </p>
                    <?php endif ?>


                    <p style="margin-bottom: 0px;"> 
                           <a data-toggle="tooltip" data-placement="bottom" title="Existencia" style="color: black;">Cantidad Existente: <?php echo $articulo->cantidad_ropa ?></a>
                    </p>

                    <p> 
                           <a data-toggle="tooltip" data-placement="bottom" title="Precio" style="color: black;">Precio: <?php echo number_format($articulo->precio_ropa,4) ?>€</a>
                    </p>
                  
                </div>
            </div>
        </div> 
    <?php endforeach; ?>

</div>

