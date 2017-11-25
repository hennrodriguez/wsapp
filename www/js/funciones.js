$("#miformulario").submit(function(evento){
	evento.preventDefault();
	// console.info("Activando formulario...");
	var cadena=$(this).serializeArray();
	// console.info(cadena);
	$.ajax({
		url:"http://especialistasenlaweb.com/hrodatos.php",
		tyoe: "post",
		data: cadena
	}).done(function(respuesta){
		$(".mensaje").html(respuesta);
	});
});