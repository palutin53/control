<?php
session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
include "conexioncable.php";

$codigo = $_GET['codigo'];
$nombre = $_GET['nombre'];
$sector = $_GET['sector'];
$direccion = $_GET['direccion'];
$ultima_fac = $_GET['ultima_fac'];
$ultimo_mes = $_GET['ultimo_mes'];
$comentario = $_GET['comentario'];

$consulta = mysql_query("SELECT * FROM clientes WHERE nombre = '$nombre' 
	AND  sector = '$sector' ORDER BY sector",$conexion);


		
while ($fila = mysql_fetch_array($consulta))
{

echo "
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<form action='scripteditar.php' method='POST'>
	<table  width=40%>
		
			<tr><td>Codigo</td><td> <input type='text' name='codigo' value='".$fila['codigo']."'>  </td></tr>
			<tr><td>Nombre</td><td>  <input type='text' name='nombre' value='".$fila['nombre']."'> </td</tr>
			<tr><td>Sector</td><td>  
					<Select placeholder='sector' name='sector' value='sector' id='sector'>
		<option selected='".$fila['sector']."' value='".$fila['sector']."'>".$fila['sector']."</option>
			<option  value='Barberos'>Barberos</option>
			<option  value='Encinos'>Encinos</option>
			<option  value='Venezuela'>Venezuela</option>
			<option  value='Mercado'>Mercado</option>
			<option  value='Guajitos'>Guajitos</option>
			<option  value='Justo_Rufino_Barrios'>Justo Rufino Barrios</option>
			<option  value='Covi-Hode'>Covi-Hode</option>
			<option  value='San_Rafael'>San Rafael</option>
			<option  value='Escuela'>Escuela</option>
			 </td</tr>
			<tr><td>Direccion</td><td>  <input type='text' name='direccion' value='".$fila['direccion']."'> </td</tr>
			<tr><td>Ultima Factura</td><td>  <input type='text' name='ultima_fac' value='".$fila['ultima_fac']."'> </td</tr>
			<tr><td>Ultimo Mes</td><td> 
				<Select placeholder='ultimo_mes' name='ultimo_mes' value='ultimo_mes' id='ultimo_mes'>
		<option selected='".$fila['ultimo_mes']."' value='".$fila['ultimo_mes']."'>".$fila['ultimo_mes']."</option>
			<option  value='Enero'>Enero</option>
			<option  value='Febrero'>Febrero</option>
			<option  value='Marzo'>Marzo</option>
			<option  value='Abril'>Abril</option>
			<option  value='Mayo'>Mayo</option>
			<option  value='Junio'>Junio</option>
			<option  value='Julio'>Julio</option>
			<option  value='Agosto'>Agosto</option>
			<option  value='Septiembre'>Septiembre</option>
			<option  value='Octubre'>Octubre</option>
			<option  value='Noviembre'>Noviembre</option>
			<option  value='Diciembre'>Diciembre</option>
			 </td</tr><tr>
			 <td>Año: </td><td>
			 <Select placeholder='anio' name='anio' value='anio' id='anio'>
		<option selected='".$fila['anio']."' value='".$fila['anio']."'>".$fila['anio']."</option>
			<option  value='2014'>2014</option>
			<option  value='2015'>2015</option>
			<option  value='2016'>2016</option>
			<option  value='2017'>2017</option>
			<option  value='2018'>2018</option>
			<option  value='2019'>2019</option>
			<option  value='2020'>2020</option>
			</td></tr>
			<tr><td>Comentario</td><td>  <input type='text' name='comentario' value='".$fila['comentario']."'> </td</tr>
			<tr><td colspan=2><input type='submit' name='actualizar' value='actualizar'></td></tr>
			</table></form>";
}


$_SESSION['codigo'] = $codigo;



mysql_close($conexion);



?>