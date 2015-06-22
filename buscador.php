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

		echo "	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
		echo "Resultados para: '".$nombre."' ' ".$sector."'";
	$consulta = mysql_query("SELECT * FROM clientes WHERE nombre LIKE '%".$nombre."%' OR  sector LIKE '$sector' ORDER BY sector",$conexion);

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
			<td>Año</td>
			<td colspan=2>Comentario</td>
		</tr>	
";

	while ($fila = mysql_fetch_array($consulta))
 	{
		echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<tr><td>".$fila['codigo']."</td><td>".$fila['nombre']."</td><td>".$fila['sector']."</td><td>".$fila['direccion']."</td><td>".$fila['ultima_fac']."
		</td><td>".$fila['ultimo_mes']."</td><td>".$fila['anio']."</td><td>".$fila['comentario']."</td>
		</tr><tr>";
	}
	echo "</table>";
	echo "<table width=100%><tr><td>
	<form action='formulariobuscador.php'>
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
  echo "<form action='formulariobuscador.php'>
	<input type='submit' name='regresar' value='regresar'>
	</form>
	";
  }

mysql_close($conexion);

?>