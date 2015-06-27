<?php
session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
mysql_select_db("controlcable");

$sector = $_POST['sector'];

		echo "	
		<head>
		<tittle></tittle>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' media='screen,print' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<script src='js/bootstrap.js'></script>
		<script src='js/jquery-1.11.3.min.js'></script>
		<script src='js/custom.js'></script>
		</head>
		<body>
		<div class='container'>
		
		";
		echo "<h1 class='text-center'>Resultados para: '".$sector."'</h1>";
		$consulta = mysql_query("SELECT * FROM clientes WHERE sector LIKE '%".$sector."%' ORDER BY sector",$conexion);
		echo "<div id='muestra'>
			<table class=' col-md-12 table-condensed table-bordered'>
				<tr>
					<td>Codigo</td>
					<td>Nombre</td>
					<td>Direccion</td>
					<td>Sector</td>
					<td>Ultima Factura</td>
					<td>Ultimo Mes</td>
					<td>Comentario</td>
				</tr>
						</div>	
		";
		$totalrows=mysql_num_rows($consulta);
		if (empty($totalrows))
		 {
 		echo "<h3 class='text-center'>No se han encontrado resultados al buscar <strong>$sector</strong>.<br> <br>Comprueba si está bién escrito e inténtalo de nuevo.</h3>";
  		echo "<div class='col-md-12 top-buffer bottom-buffer'>
				<a class='btn btn-primary' href='principal.php' role='button'>Regresar</a>
			  </div>
		";
 		 } else{
			while ($fila = mysql_fetch_array($consulta))
 				{
		echo "
		<tr><td>".$fila['codigo']."</td><td>".$fila['nombre']."</td><td>".$fila['sector']."</td><td>".$fila['direccion']."</td><td>".$fila['ultima_fac']."
		</td><td>".$fila['ultimo_mes']."</td><td>".$fila['anio']."</td>
		</tr><tr>";
		}
		echo "</table>";
		echo "
		<div class='col-md-6 top-buffer'>
			<a class='btn btn-primary' href='principal.php' role='button'>Regresar</a>
			<input type='button' id='btnExport' value=' Export Table data into Excel ' />
		</div>
		
		</div>
		</div>
		<script>
    $('#btnExport').click(function(e) {
        window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
        e.preventDefault();
    });
    </script>
		</body>
		";
		}

mysql_close($conexion);

?>
