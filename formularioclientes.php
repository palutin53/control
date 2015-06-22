<?php

include 'style.css';

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

echo "<html>
		<head>
		<font size='28'>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<body>
		<center>Ingrese Los Datos Del Cliente</center>
		<br>
		</body>
		</font>
		</head>
	</html>";


echo "
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<table width=100%>
	<tr>
		<form action='crearcliente.php' method='POST'>
		<td>Nombre: </td>
		<td><input type='Text' placeholder='nombre' name='nombre'></td>
		<tr>
		<td>Sector: </td>
		<td><Select placeholder='sector' name='sector'>
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
		</td></tr>
		<tr>
		<td>Direccion: </td>
		<td><input type='Text' placeholder='direccion' name='direccion'></td>
		</tr>
		<tr>
		<td>Ultima Factura</td>
		<td><input type='Text' placeholder='ultima factura' name='ultima_fac'></td>
		</tr>
		<tr>
		<td>Mes: </td>
		<td><Select placeholder='ultimo_mes' name='ultimo_mes'>
			<option selected='selected' value=0>Selecciona Mes</option>
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
			</tr>
		<tr>
		<td>Año: </td>
		<td><Select placeholder='anio' name='anio'>
			<option Selected='2015' value=0>Selecciona año</option>
			<option  value='2014'>2014</option>
			<option  value='2015'>2015</option>
			<option  value='2016'>2016</option>
			<option  value='2017'>2017</option>
			<option  value='2018'>2018</option>
			<option  value='2019'>2019</option>
			<option  value='2020'>2020</option>
			</td></tr>
		<tr>
		<td>
		Comentario:
		</td>
		<td width=100%>
		<input type='text' name='comentario' placeholder='Comentario'>
		</td>
		</tr>
		<td colspan=2><input type='submit'></td>
	</tr></form>
	<tr>
	<td><br><br><br>
				<form action='adminclientes.php' method='POST'>
					<center><button type='submit' name='regresar' id='regresar'>Regresar</button></center>
				</form>
			</td></tr>
	</form>
";



?>