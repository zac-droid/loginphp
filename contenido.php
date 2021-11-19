<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if (isset($_SESSION['usuario'])) {
	require 'views/contenido.view.php';
} else {
	header('Location: login.php');
	die();
}

?>