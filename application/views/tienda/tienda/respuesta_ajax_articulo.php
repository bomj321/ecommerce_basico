<div id="carrusel_indicaciones" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#carrusel_indicaciones" data-slide-to="0" class="active"></li>
      <li data-target="#carrusel_indicaciones" data-slide-to="1"></li>
      <li data-target="#carrusel_indicaciones" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
          <img class="d-block" src="<?php echo base_url().'public/images/prod-1.jpg'?>" alt="No hay Imagen">			  <div class="carousel-caption d-none d-md-block">
          <h5>...</h5>
          <p>...</p>
        </div>
    </div>

    <div class="carousel-item">
        <img class="d-block" src="<?php echo base_url().'public/images/prod-1.jpg'?>" alt="No hay Imagen">
          <div class="carousel-caption">
              <h5>Ropa de 3th generacion</h5>
              <p>Color negro mate</p>
              <p>
                    <a href="<?php echo base_url();?>tienda/carrito" data-toggle="tooltip" data-placement="bottom" title="Agregar al Carrito" style="font-size: 1.5em; color: white;" type="button" class="btn btn-info">
                    <i class="fas fa-shopping-cart"></i>
                  </a>

                    <a href="<?php echo base_url();?>tienda/carrito" data-toggle="tooltip" data-placement="bottom" title="Comprar" style="font-size: 1.5em; color: white;" type="button" class="btn btn-primary">
                      <i class="fas fa-money-bill-alt"></i>
                    </a>

                    <a data-toggle="tooltip" data-placement="bottom" title="Existencia" style="font-size: 1.5em; color: white;" type="button" class="btn btn-dark">x3</a>
               </p>
      </div>
    </div>


    <div class="carousel-item">
      <img class="d-block" src="<?php echo base_url().'public/images/prod-1.jpg'?>" alt="No hay Imagen">				 <div class="carousel-caption d-none d-md-block">
       <h5>...</h5>
       <p>...</p>
     </div>
    </div>


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
