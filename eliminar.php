<?php

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
mysql_select_db("controlcable");

$nombre = $_GET['nombre'];
$sector = $_GET['sector'];
$codigo = $_GET['codigo'];


		echo "	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
		echo "Resultados para: '".$codigo."' '".$nombre."' ' ".$sector."'";
	$consulta = mysql_query("SELECT * FROM clientes WHERE codigo LIKE '%$codigo%' OR nombre LIKE '%".$nombre."%' OR  sector LIKE '%$sector%' ORDER BY sector",$conexion);

	echo "
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<table border=1 width=100%>
		<tr>
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Sector</td>
			<td>Direccion</td>
			<td>Ultima Factura</td>
			<td>Ultimo Mes</td>
			<td>Comentario</td>
			<td></td>
		</tr>	
";

while ($fila = mysql_fetch_array($consulta))
 {
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<tr><td>".$fila['codigo']."</td><td>".$fila['nombre']."</td><td>".$fila['sector']."</td><td>".$fila['direccion']."</td>
	<td>".$fila['ultima_fac']."	</td><td>".$fila['ultimo_mes']."</td><td>".$fila['comentario']."</td><td>
	<a href='scripteliminar.php?codigo=".$fila['codigo']."&nombre=".$fila['nombre']."&sector=".$fila['sector']."&direccion=".$fila['direccion']."
	&ultima_fac=".$fila['ultima_fac']."&ultimo_mes=".$fila['ultimo_mes']."&comentario=".$fila['comentario']."'>Eliminar</a></td>
	</tr>";
}

	echo "<table width=100%><tr><td>
	<form action='eliminarcliente.php'>
	<center>
	<input type='submit' name='regresar' value='regresar'>
	<center>
	</form></tr>
	</table>";

	$totalrows=mysql_num_rows($consulta);
if (empty($totalrows))
 {
 	echo "<br><br>";
  echo "No se han encontrado resultados al buscar <strong>$nombre</strong>.<br> <br>Comprueba si está bién escrito e inténtalo de nuevo.";
  echo "<form action='eliminarcliente.php'>
	<input type='submit' name='regresar' value='regresar'>
	</form>
	";
  }

mysql_close($conexion);

?>