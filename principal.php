<?php
session_start();
echo "Usuario: ". $_SESSION['usuario']. "<br />". "Tu contraseña es: ". $_SESSION['contrasena']. "<br />";
echo "<br />";
echo "<br />";

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


echo "
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<center><table border=1 width=90%>
		<tr>
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Sector</td>
			<td>Direccion</td>
			<td>Ultima Factura</td>
			<td>Ultimo Mes</td>
			<td colspan=2>Comentario</td>
		</tr>
		</center>	
";
while ($fila = mysql_fetch_array($consulta))
 {
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<tr><td>".$fila['codigo']."</td><td>".$fila['nombre']."</td><td>".$fila['sector']."</td><td>".$fila['direccion']."</td><td>".$fila['ultima_fac']."
	</td><td>".$fila['ultimo_mes']."</td><td>".$fila['comentario']."</td>
	</tr>";
}
echo "</table>";

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