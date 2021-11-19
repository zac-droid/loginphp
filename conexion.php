<?php

$conexion = new mysqli('localhost', 'username', 'password', 'namedb');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	// Codigo
}