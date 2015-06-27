<?php

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
mysql_select_db("controlcable");


$sector = $_GET['sector'];

		echo "	<head>
		<tittle></tittle>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<script src='js/bootstrap.js'></script>
		<script src='js/jquery-1.11.3.min.js'></script>
		<script src='js/custom.js'></script>
		</head>
		<body onload='nobackbutton();'>
		<div class='container'>
			<div class='row'>
		";
		echo "<h1 class='text-center'>Resultados para: ' ".$sector."'</h1>";
	$consulta = mysql_query("SELECT * FROM clientes WHERE sector LIKE '%".$sector."%' ORDER BY sector",$conexion);

	echo "
	<table class='col-md-12 table-condensed table-bordered'>
		<tr>
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Direccion</td>
			<td>Sector</td>
			<td>Comentario</td>
			<td>NIT</td>
		</tr>	
";

	while ($fila = mysql_fetch_array($consulta))
 	{
		echo "
		<tr><td>".$fila['codigo']."</td><td>".$fila['nombre']."</td><td>".$fila['sector']."</td><td>".$fila['direccion']."</td>
		<td>".$fila['comentario']."</td><td>".$fila['nit']."</td>
		</tr><tr>";
	}
	echo "</table>";
	echo "<div class='col-md-12 top-buffer'>
			<a class='btn btn-primary' href='formulariobuscador.php' role='button'>Regresar</a>
		</div>";

	$totalrows=mysql_num_rows($consulta);
if (empty($totalrows))
 {
 	echo "";
  echo "<h3 class=text-center>No se han encontrado resultados al buscar <strong>$sector</strong>.<br> <br>Comprueba si está bién escrito e inténtalo de nuevo.</h3>";
  echo "
  	<div class='col-md-12 top-buffer'>
	<a class='btn btn-primary' href='formulariobuscador.php' role='button'>Regresar</a>
	</div>
	</div>
	</div>
	</body>
	";
  }

mysql_close($conexion);

?>