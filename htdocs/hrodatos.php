<?php 

	header("Access-Control-Allow-Origin:http://especialistasenlaweb.com");
	$n=$_POST['nombre'];
	$c=$_POST['correo'];
	$com=$_POST['coment'];

	//mysqli("servidor","usuario","contraseña","basededatos")
	$conectar=new mysqli("localhost","dxxsmxei_hrouser","kDoz4n&JwNb9","dxxsmxei_hromibase");
	$consulta="INSERT into persona(nombre,correo,comentario) values('$n','$c','$com')";
	$conectar->query($consulta)or die(mysqli_error());
	echo "<hr><h2>Dato insertado</h2>";

 ?>