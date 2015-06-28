<?php
session_start();
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
mysql_select_db("controlcable");
$codigo = $_GET['codigo'];
$nombre = $_GET['nombre'];
$sector = $_GET['sector'];
$direccion = $_GET['direccion'];
$comentario = $_GET['comentario'];
$consulta = "DELETE FROM clientes WHERE codigo='".$codigo."' AND nombre='".$nombre."' AND sector='".$sector."'
 AND direccion='".$direccion."' AND comentario='".$comentario."'";

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