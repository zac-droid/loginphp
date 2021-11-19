<?php session_start();

// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda volver a registrar un usuario.
if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
	die();
}

// Comprobamos si ya han sido enviado los datos
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validamos que los datos hayan sido rellenados
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];


    include ("conexion.php");
    $camaroncin= "INSERT INTO login (Usuario, Contraseña) VALUES ('$usuario', '$password')";
    $resultado= mysqli_query($conexion, $camaroncin);
    
    
	$errores = '';

	// Comprobamos que ninguno de los campos este vacio.
	if (empty($usuario) or empty($password) or empty($password2)) {
		$errores = '<li>Por favor rellena todos los datos correctamente</li>';
	} else {

	
	
		// Comprobamos que las contraseñas sean iguales.
		if ($password != $password2) {
			$errores.= '<li>Las contraseñas no son iguales</li>';
		}
	}



		// Despues de registrar al usuario redirigimos para que inicie sesion.
		header('Location: login.php');
	


}

require 'views/registrate.view.php';
?>