<?php

include 'style.css';

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

include "conexioncable.php";

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$sector = $_POST['sector'];
$direccion = $_POST['direccion'];
$ultima_fac = $_POST['ultima_fac'];
$ultimo_mes = $_POST['ultimo_mes'];
$comentario = $_POST['comentario'];

$codigoantiguo = $_SESSION['codigo'];


$consulta = "UPDATE clientes SET codigo='".$codigo."', nombre='".$nombre."', sector='".$sector."', direccion='".$direccion."', ultima_fac='".$ultima_fac."',
 ultimo_mes='".$ultimo_mes."', comentario='".$comentario."' WHERE codigo='".$codigoantiguo."' ";

if(!mysql_query($consulta,$conexion)){
	die ("ERROR: ".mysql_error()); 
} else{

	echo "el usuario se ha actualizado con exito";
	echo "<br>";
	echo "<form action='editarclientes.php' method='POST'>
					<center><button type='submit' name='regresar' id='regresar'>Regresar</button></center>
				</form>";
}







mysql_close($conexion);




?>