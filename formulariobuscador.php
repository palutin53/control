<?php
session_start();
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
echo  "
<html>
	<head>
		<tittle></tittle>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	</head>
	<body>
		<h1>Generar listados por sector</h1>
		<div>
			<form action='buscador.php' method='GET' class='form-inline'>
				<div class='col-xs-3'>
					<label for='sector'>Sector:</label>
					<select placeholder='sector' name='sector' value='sector' id='sector' class='form-control input-sm'>
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
					</select>
				</div>
				<div class='col-xs-2'>
					<input type='submit' name='Busqueda' value='Generar listado' class='btn btn-primary'></form>
					<form action='opcionescable.php' method='POST'>
				</div>
				<div class='col-xs-2'>
					<button type='submit' name='regresar' id='regresar'class='btn btn-primary'>Regresar</button>
				</div>
				
			</form>
		</div>
	</body>
<html>
	";


?>