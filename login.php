<?php

session_start();

//obtener variables

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//obtener conexion

if(!$conexion = mysql_connect("localhost","root","")){
	die ("ERROR: ".mysql_error);
}
mysql_select_db("controlcable",$conexion);
//preparar consulta

$consulta = "SELECT * FROM usuarios";

//lanzar consulta

$resultado = mysql_query($consulta, $conexion);
//repasar resultados

while($fila = mysql_fetch_array($resultado)){
	$usuariodb = $fila['usuario'];
	$contrasenadb = $fila['contrasena'];	
	$permisosdb = $_fila['permisos'];
}
//si es positivo entonces asignar
if($usuario == $usuariodb & $contrasena == $contrasenadb){
	$_SESSION['usuario'] = $usuario;
	$_SESSION['contrasena'] = $contrasena; 
	$_SESSION['permisos'] = $permisosdb;

	echo '
<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=menu.php">
	</head>
</html>
';

}

//si es negativo entonces nada
else{
		echo '
<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=error_login.php">
	</head>
</html>
';
	}
//cerrar bade de datos
mysql_close($conexion);

?>