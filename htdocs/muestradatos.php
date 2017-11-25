<?php

	//mysqli("servidor","usuario","contraseña","basededatos")
	// $conectar=new mysqli("localhost","dxxsmxei_hrouser","kDoz4n&JwNb9","dxxsmxei_hromibase");
	$conn=new mysqli("localhost","root","","mibase");

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT id, nombre, correo, comentario FROM persona";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. "- Correo:  " . $row["correo"]. "- Comentario:" . $row["comentario"]. "<br>";
    	}
	} else {
		echo "0 results";
	}
	$conn->close();


 ?>