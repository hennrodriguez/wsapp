
<?php
	header("Access-Control-Allow-Origin:*");
	//mysqli("servidor","usuario","contraseña","basededatos")
	$conn=new mysqli("localhost","dxxsmxei_hrouser","kDoz4n&JwNb9","dxxsmxei_hromibase");
	// $conn=new mysqli("localhost","root","","mibase");

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT id, nombre, correo, comentario FROM persona";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<div class='asd id-" . $row["id"]. "'>
					<h2>" . $row["nombre"]. "</h2>
					<a href='mailto:" . $row["correo"]. "'>" . $row["correo"]. "</a><br>
					Comentario:<br>
					" . $row["comentario"]. "
				</div>";
    	}
	} else {
		echo "No hay actualizaciones";
	}
	$conn->close();


 ?>