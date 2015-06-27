<?php
session_start();
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
mysql_select_db("controlcable", $conexion);
$consulta = mysql_query("SELECT * FROM clientes;");

echo "
	<head>
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
			<div class='form-inline col-md-6 col-md-offset-3'>
			<form action='buscarsector.php' method='POST'>
				<h3>Busqueda por sector:</h3>
				<Select placeholder='sector' name='sector' value='sector' id='sector' class='form-control'>
					<option selected='selected' value=0 >Selecciona sector</option>
					<option  value='Barberos'>Barberos</option>
					<option  value='Encinos'>Encinos</option>
					<option  value='Venezuela'>Venezuela</option>
					<option  value='Mercado'>Mercado</option>
					<option  value='Guajitos'>Guajitos</option>
					<option  value='Justo_Rufino_Barrios'>Justo Rufino Barrios</option>
					<option  value='Covi-Hode'>Covi-Hode</option>
					<option  value='San_Rafael'>San Rafael</option>
					<option  value='Escuela'>Escuela</option>
				</select>
				<input type='submit' name='buscar' id='buscar' name='buscar' class='btn btn-primary'>
				<a class='btn btn-primary' href='opcionescable.php' role='button'>Regresar</a>
			</form>
			</div>
		</div>

	</body>

";

mysql_close($conexion);

?>
