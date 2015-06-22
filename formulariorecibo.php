<?php

echo "<html>
		<head>
		<font size='28'>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<body>
		<center>Ingrese Los Datos del Recibo</center>
		<br>
		</body>
		</font>
		</head>
	</html>";


echo "
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<table width=60%>
	<tr>
		<form action='crearcliente.php' method='POST'>
		<td>Nombre: </td>
		<td><input type='Text' placeholder='nombre' name='nombre'></td>
		<tr>
		<td>Sector: </td>
		<td><Select placeholder='sector' name='sector'>
			<option  value='Barberos'>Barberos</option>
			<option  value='Encinos'>Encinos</option>
			<option  value='Venezuela'>Venezuela</option>
			<option  value='Mercado'>Mercado</option>
			<option  value='Guajitos'>Guajitos</option>
			<option  value='Justo Rufino Barrios'>Justo Rufino Barrios</option>
			<option  value='Covi-Hode'>Covi-Hode</option>
			<option  value='San Rafael'>San Rafael</option>
			<option  value='Escuela'>Escuela</option>
		</td></tr>
		<tr>
		<td>Direccion: </td>
		<td><input type='Text' placeholder='direccion' name='direccion'></td>
		</tr>
		<tr>
		<td>Ultima Factura</td>
		<td><input type='Text' placeholder='ultima_factura' name='ultima_fac'></td>
		</tr>
		<tr>
		<td>Mes: </td>
		<td><Select placeholder='ultimo_mes' name='ultimo_mes'>
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
		<Select placeholder='anio' class='date'>
		</td></tr>
		<tr>
		<td>Año: </td>
		<td><Select placeholder='anio' class='date' name='anio'></td>
		</tr>
		<td colspan=2><input type='submit'></td>
	</tr>
";
?>