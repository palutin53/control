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
		echo "	<html>
	<head>
		<tittle class='titulopagina'>Telesat</tittle>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<script src='js/bootstrap.js'></script>
		<script src='js/jquery-1.11.3.min.js'></script>
		<script src='js/custom.js'></script>
		</head>
<body onload='nobackbutton();'>
<div class='container'>
<div class='row'>";
		echo "Resultados para: '".$nombre."' '".$sector."'";
	$consulta = mysql_query("SELECT * FROM clientes WHERE nombre = '".$nombre."' AND  sector = '".$sector."' ORDER BY sector",$conexion);
	echo "
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<table border=1 width=100%>
		<tr>
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Sector</td>
			<td>Direccion</td>
			<td>Comentario</td>
			<td>NIT</td>
			<td></td>
		</tr>	
";
while ($fila = mysql_fetch_array($consulta))
 {
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<tr><td>".$fila['codigo']."</td><td>".$fila['nombre']."</td><td>".$fila['sector']."</td><td>".$fila['direccion']."</td>
	<td>".$fila['comentario']."</td><td>".$fila['nit']."</td><td>
	<a href='formulariorecibo.php?codigo=".$fila['codigo']."&nombre=".$fila['nombre']."&sector=".$fila['sector']."&direccion=".$fila['direccion']."
	&comentario=".$fila['comentario']."&nit=".$fila['nit']."'>Realizar Pago</a></td>
	</tr>";
}
	echo "</table><div class='form-inline col-md-10'>
			<div class='form-inline col-md-10 col-md-offset-3 top-buffer'>
					<div class='form-group'>
						<a class='btn btn-primary' href='buscadorfactura.php' role='button'>Regresar</a>
					</div>
			</div>	
		</div>";
	$totalrows=mysql_num_rows($consulta);
if (empty($totalrows))
 {
 	echo "<br><br>";
  echo "No se han encontrado resultados al buscar <strong>$nombre</strong>.<br> <br>Comprueba si está bién escrito e inténtalo de nuevo.";
  echo "<div class='form-inline col-md-10'>
			<div class='form-inline col-md-10 col-md-offset-3 top-buffer'>
					
			</div>	
		</div>
		</div>
	</div>
</body>
	";
  }
mysql_close($conexion);
?>