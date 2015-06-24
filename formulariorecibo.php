<?php
echo "
<html>
		<head>
		<tittle></tittle>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		</head>
	<body>
		<h1>Ingrese Los Datos del Recibo</h1>
		<form action='crearcliente.php' method='POST' class='form-inline'>
			<div class='form-group'>
				<label for='nombre'>Nombre:</label>
				<input type='Text' placeholder='nombre' name='nombre'>
			</div>
			<div class='form-group'>
				<label for='sector'>Sector:</label>
					<Select placeholder='sector' name='sector'>
					<option  value='Barberos'>Barberos</option>
					<option  value='Encinos'>Encinos</option>
					<option  value='Venezuela'>Venezuela</option>
					<option  value='Mercado'>Mercado</option>
					<option  value='Guajitos'>Guajitos</option>
					<option  value='Justo Rufino Barrios'>Justo Rufino Barrios</option>
					<option  value='Covi-Hode'>Covi-Hode</option>
					<option  value='San Rafael'>San Rafael</option>
					<option  value='Escuela'>Escuela</option>
			</div>
			<div class='form-group'>
				<label for='direccion'>Direccion: </label>
				<input type='Text' placeholder='direccion' name='direccion'>
			</div>
			<br>
			<div class='form-group'>
				<label for='ultima_fac'>Ultima Factura:</label>
				<input type='text' placeholder='ultima_factura' name='ultima_fac'>
			</div>
			<div class='form-group'>
				<label for='ultimo_mes'>Ultima Factura:</label>
				<Select placeholder='ultimo_mes' name='ultimo_mes'>
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
			</div>
			<div class='form-group'>
				<label for='anio'>Año:</label>
				<Select placeholder='anio' class='date' name='anio'>
			</div>
			<br>
			<div class='form-group'>
				<button><input type='submit'></button>
			</div>
		</form>
	<body>
<html>
";
?>