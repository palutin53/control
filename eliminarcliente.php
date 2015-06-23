
<?php

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];


echo  "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

Buscar por nombre<br><br>
<table width=60%>
<tr><td>
<form action='eliminar.php' method='GET'>
<tr><td>Codigo: </td><td>Nombre:</td><td>Sector: </td></tr>
<tr><td>
<input type='text' name='codigo' placeholder='ingresa codigo' id='codigo' ></td>
<td><input type='text' name='nombre' placeholder='ingresa valor de busqueda' id='nombre'></td>
		<td><Select placeholder='sector' name='sector' value='sector' id='sector'>
		<option selected='selected' value=0>Selecciona sector</option>
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
		<td>
<input type='submit' name='Busqueda' value='busqueda' align='right'></form>
</td><td colspan=2>
				<form action='adminclientes.php' method='POST'>
					<center><button type='submit' name='regresar' id='regresar'>Regresar</button></center>
				</form>
			</td></tr>
</table>
</form>";


?>