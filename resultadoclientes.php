<?php

include 'style.css';

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$nombre = $_POST['nombre'];
$sector = $_POST['sector'];
$direccion = $_POST['direccion'];
$ultima_fac = $_POST['ultima_fac'];
$ultimo_mes = $_POST['ultimo_mes'];
$anio = $_POST['anio'];
$comentario = $_POST['comentario'];

echo "
	<center>Confirmar Informacion</center>
";

echo "
<form action='crearcliente.php' method='GET'>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<table border=1 width=100%>
		<tr>
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Sector</td>
			<td>Direccion</td>
			<td>Ultima Factura</td>
			<td>Ultimo Mes</td>
			<td>año</td>
			<td colspan=2>Comentario</td>
			</tr>
			<tr><td></td><td><input type='text' value=".$nombre." name='addnombre'></td><td><input type='text' value=".$sector." name='addsector'>
			</td><td><input type='text' value=".$direccion." name='adddireccion'></td><td><input type='text' value=".$ultima_fac." name='addultima_fac'>
			</td><td><input type='text' value=".$ultimo_mes." name='addultimo_mes'></td><td><input type='text' value=".$anio." name='addanio'></td><td>
			<input type='text' value=".$comentario." name='addcomentario'></td>
	</tr> </table>;	
";

echo "
	<table width=100%>
	<tr>
	<td>
	
		<center><button type='submit' name='Confirmar'>confirmar</button></center>
	</form>

	</td>
	<td>
	<form action='formularioclientes.php' method='GET'>

		<center><button type='submit' name='editar'>Editar</button></center>
	</form>
	</td></tr>
";

	
	echo "<br />";

?>