var base_url = 'http://localhost/ecommerce/';
/*JS PARA LAS TABLAS DE LA TIENDA*/
$( document ).ready(function() {
			     $("#carrito").DataTable({
			     	responsive: true,
			         language: {
			            "sProcessing":     "Procesando...",
			            "sLengthMenu":     "Mostrar _MENU_ registros",
			            "sZeroRecords":    "No se encontraron resultados",
			            "sEmptyTable":     "Ningún dato disponible en esta tabla",
			            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			            "sInfoPostFix":    "",
			            "sSearch":         "Buscador General:",
			            "sUrl":            "",
			            "sInfoThousands":  ",",
			            "sLoadingRecords": "Cargando...",
			            "oPaginate": {
			                "sFirst":    "Primero",
			                "sLast":     "Último",
			                "sNext":     "Siguiente",
			                "sPrevious": "Anterior"
			        },
			        "oAria": {
			            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			        }
			    }
			});

 });
 /*JS PARA LAS TABLAS DE LA TIENDA*/


/********JS PARA LA SECCION DE ARTICULOS*****/

function articulos_tienda($id_ropa,$id_subtipo){
		var id_ropa    = $id_ropa;
		var id_subtipo = $id_subtipo;
					$.ajax({
							url: base_url + "tienda/tienda_articulo/" + id_ropa + "/" + id_subtipo,
							type:"POST",
							 beforeSend: function() {
											 $('#respuesta_ajax_articulo').html("<center><img style='width:250px; height:250px; margin-top:200px;' src='"+base_url+"/public/images/loader.gif' /></center>");
										},
							success:function(resp){
									$("#respuesta_ajax_articulo").html(resp);
									//alert(resp);
							},
							error:function(){
								$('#respuesta_ajax_articulo').html("");
								$('#respuesta_ajax_articulo').html("<center><h4 style='color:red;'>ERROR EN EL SERVIDOR.POR FAVOR ENVIE UN MENSAJE AL ADMINISTRADOR</h4></center>");
							}

					});
}

function agregar_carrito($id_usuario,$id_ropa_tienda,$precio_ropa){

	var id_usuario     = $id_usuario;
	var id_ropa_tienda = $id_ropa_tienda;
	var precio_ropa    = $precio_ropa;
				$.ajax({
						url: base_url + "tienda/add_carrito/" + id_usuario + "/" + id_ropa_tienda + "/" + precio_ropa,
						type:"POST",
						 beforeSend: function() {
										 toastr.warning('Agregando al Carrito');
										 toastr.clear()
									},
						success:function(resp){							
										toastr.success('El producto ha sido agregado al Carrito', 'Producto Agregado');
										toastr.clear()

						},
						error:function(){
										toastr.error('Ha ocurrido un error, intente más tarde.', 'Disculpenos!')

						}

				});

}

/********JS PARA LA SECCION DE ARTICULOS*****/

/**********JS PARA LA SECCIO DEL CARRITO***********/
function actualizar_carrito($id_ropa_tienda)
{

	var id_ropa_tienda           = $id_ropa_tienda;
	var id_elemento              = 'carrito_cantidad_'+id_ropa_tienda;
	var cantidad_existente_input = 'carrito_cantidad_existente_'+id_ropa_tienda;
	var cantidad_articulo        = document.getElementById(id_elemento).value;
	var cantidad_existente       = document.getElementById(cantidad_existente_input).value;

	if (parseInt(cantidad_articulo) > parseInt(cantidad_existente) ) {
		toastr.error('No tenemos tantos productos en existencia', 'Disculpenos!');
		return false;
	}

				$.ajax({
						url: base_url + "tienda/update_carrito_prenda/" + id_ropa_tienda + "/" + cantidad_articulo,
						type:"POST",
						 beforeSend: function() {
										 toastr.warning('Actualizando');
										 toastr.clear()
									},
						success:function(resp){
										toastr.success('El producto ha sido Actualizado', 'Producto Actualizado');
										setTimeout(function(){
												location.reload();
										  }, 1000);
						},
						error:function(){
										toastr.error('Ha ocurrido un error, intente más tarde.', 'Disculpenos!')

						}

				});
}

function eliminar_carrito($id_ropa_tienda)
{
  var id_ropa_tienda           = $id_ropa_tienda;
				$.ajax({
						url: base_url + "tienda/delete_carrito_prenda/" + id_ropa_tienda,
						type:"POST",
						 beforeSend: function() {
										 toastr.warning('Borrando...');
										 toastr.clear()
									},
						success:function(resp){
										toastr.success('El producto ha sido Eliminado', 'Producto Eliminado');
										setTimeout(function(){
												location.reload();
										  }, 1000);
						},
						error:function(){
										toastr.error('Ha ocurrido un error, intente más tarde.', 'Disculpenos!')

						}

				});
}


/**********JS PARA LA SECCIO DEL CARRITO***********/


/*SECCION PAGO REALIZADO*/
function captura_pantalla()
{
		html2canvas(document.getElementById("captura_pantalla")).then(canvas => {
    document.body.appendChild(canvas)
});
}
/*SECCION PAGO REALIZADO*/

/******CODIGO PARA EL MODAL DE LAS COMPRAS*********/
function datoscompra($compra){
  var compra = $compra;
        $.ajax({
            url: base_url + "tienda/list_detalle/" + compra,
            type:"POST",
            beforeSend: function() {
                     $('#modal-default .modal-body').html("<center><img src='"+base_url+"/public/images/loader.gif' /></center>");                    
            },
            success:function(resp){
                $("#modal-default .modal-body").html(resp);
                $("#modal-default .modal-title").html('Información de la Compra');
                //alert(resp);
            }

        });
}

/******CODIGO PARA EL MODAL DE LAS COMPRAS*********/

/*CARRUSEL*/
$('.carousel').carousel({
  interval: 2000
})
/*CARRUSEL*/

var titulo= document.getElementById('titulo_productos_importantes');
setInterval(()=>{

	$(titulo).fadeTo( 600 , 1,()=>{
	    if (titulo.style.color == 'red') {

			 titulo.style.color ='black';
			 titulo.style.fontSize = '40.5px';

		}else{
			 titulo.style.color ='red';
			 titulo.style.fontSize = '50px';

		}
  });

	
}, 1000);


