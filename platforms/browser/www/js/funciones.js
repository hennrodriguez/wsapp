$("#miformulario").submit(function(evento){
	evento.preventDefault();
	// console.info("Activando formulario...");
	var cadena=$(this).serializeArray();
	// console.info(cadena);
	$.ajax({
		url:"http://especialistasenlaweb.com/hrodatos.php",
		type: "post",
		data: cadena
	}).done(function(respuesta){
		$(".mensaje").html(respuesta);
	});
});

//$("#mostrar").click(function(evento){
	evento.preventDefault();
	var cadena=$(this).serializeArray();
	$.ajax({
		url:"http://especialistasenlaweb.com/hromuesta.php",
	}).done(function(respuesta){
		$("#misdatos").html(respuesta);
	});
//});