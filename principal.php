<?php
session_start();
$_SESSION['usuario'];
$_SESSION['contrasena'];
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
		<form action='buscarsector.php' method='POST'>
		<table width=30%>
		<tr><td>Busqueda por sector:</td><td>
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
		</td>
		<td><input type='submit' name='buscar' id='buscar' name='buscar' class='btn btn-primary'></td>
		</table></form>
";
echo "<table width=100%>
<td>
				<form action='opcionescable.php' method='POST'>
					<center><button type='submit' name='regresar' id='regresar'class='btn btn-primary top-buffer'>Regresar</button></center>
				</form>
			</td></tr>
			";
echo "</table>";
mysql_close($conexion);
?>