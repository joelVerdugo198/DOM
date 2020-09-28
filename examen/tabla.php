<?php 

$mysqli = new mysqli("localhost", "root", "", "examen");

 
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{
	
	$consulta = "SELECT * FROM usuario";
	$resultado = $mysqli->query($consulta);
	
	if ( $filas = mysqli_num_rows($resultado) < 1 ){
		echo "<tr><td>No hay registros</td></tr>";
	}

	while ( $tablaUsuario= $resultado->fetch_array(MYSQLI_BOTH)) {

		echo '<tr>
		<td>' .$tablaUsuario['email'].'</td>
		<td>' .$tablaUsuario['password'].'</td>
		<td>' .$tablaUsuario['year'].'</td>
		</tr>';

	}
}

$mysqli->close();

?>