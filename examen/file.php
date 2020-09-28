<?php 

$mysqli = new mysqli("localhost", "root", "", "examen");

$email = $_POST['email'];
$password = $_POST['password'];
$year = $_POST['year'];

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{
	
	if ( isset($email) && $email!="" && filter_var($email, FILTER_VALIDATE_EMAIL) && isset($password) && $password!="" && strlen($password)>4 && isset($year) && $year!="" &&  strlen($year)==4 && intval($year)<=2015 && intval($year)>=1920) {

		$insertar = "INSERT INTO usuario (`id`, `email`, `password`, `year`) VALUES ('','$email','$password','$year')";

		$respuesta = mysqli_query($mysqli, $insertar);

		if ($respuesta) {
			echo 1;
		} else {
			echo 2;
		}
	
	} else{
		if (strlen($password)<4) {
			echo 4;
		}else{
			echo 3;
		}
		
	}
}

$mysqli->close();

?>