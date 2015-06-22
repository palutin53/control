<?php

include "conexioncable.php";

$codigo = $_GET['codigo'];
$nombre = $_GET['nombre'];
$sector = $_GET['sector'];
$direccion = $_GET['direccion'];
$ultima_fac = $_GET['ultima_fac'];
$ultimo_mes = $_GET['ultimo_mes'];
$comentario = $_GET['comentario'];


$consulta = "DELETE FROM clientes WHERE codigo='".$codigo."' AND nombre='".$nombre."' AND sector='".$sector."' AND 
direccion='".$direccion."' AND ultima_fac='".$ultima_fac."' AND ultimo_mes='".$ultimo_mes."' AND comentario='".$comentario."'";

if(!mysql_query($consulta,$conexion)){
	die ("ERROR: ".mysql_error()); 
} else {
		echo '
<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=eliminarcliente.php">
	</head>
</html>
';
}



mysql_close($conexion);

?>