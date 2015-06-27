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
		<script src='js/custom.js'></script>
	</head>
	<body onload='nobackbutton();'>
		<div class=container>
		<div class=row >	
			<form action='buscador.php' method='GET' class='col-md-6 col-md-offset-3'>
			<h1 class='col-md-offset-2'>Consulta de Clientes</h1>
					<div class form-group>
						<label for='nombre'>Nombre:</label>
						<input type='text' name='Nombre' placeholder='nombre' class='form-control'>
					</div>
					<div class='form-group'>
						<label for='sector'>Sector:</label>
						<select placeholder='sector' name='sector' value='sector' id='sector' class='form-control input-sm'>
							<option selected='selected' value=0>Selecciona sector</option>
								<option  value='Barberos'>Barberos</option>
								<option  value='Encinos'>Encinos</option>
								<option  value='Venezuela'>Venezuela</option> 
								<option  value='Mercado'>Mercado</option>
								<option  value='Guajitos'>Guajitos</option>form-group
								<option  value='Justo_Rufino_Barrios'>Justo Rufino Barrios</option>
								<option  value='Covi-Hode'>Covi-Hode</option>
								<option  value='San_Rafael'>San Rafael</option>
								<option  value='Escuela'>Escuela</option>
						</select>
					</div>
					<div class='form-group text-center'>
						<input type='submit' name='Busqueda' value='Generar Consulta' class='btn btn-primary'>
						<a class='btn btn-primary' href='opcionescable.php' role='button'>Regresar</a>
					</div>
				</form>
			</div>
		</div>
	</body>
<html>
	";


?>