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


function articulos_tienda($id_ropa,$id_subtipo){
		var id_ropa    = $id_ropa;
		var id_subtipo = $id_subtipo;
					$.ajax({
							url: base_url + "tienda/tienda_articulo/" + id_ropa + "/" + id_subtipo,
							type:"POST",
							 beforeSend: function() {
											 $('#respuesta_ajax_articulo').html("<center><img src='"+base_url+"/public/images/loader.gif' /></center>");
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
						},
						error:function(){
										toastr.error('Ha ocurrido un error, intente más tarde.', 'Disculpenos!')

						}

				});

}


/*JS PARA LAS TABLAS DE LA TIENDA*/
