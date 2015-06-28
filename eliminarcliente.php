<?php
//include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='style.css' />";
session_start();
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
echo  "
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
	<div class='container'>
		<div class='row'>
			<form action='eliminar.php' method='GET' class='col-md-6 col-md-offset-3 table-bordered top-buffer'>
			<h1 class='text-center'>Eliminar Cliente</h1>
			<h2 class='text-center'>Buscador</h2>
				<div class='col-md-12'>
					<label for='nombre'>Nombre:</label>
					<input type='Text' placeholder='nombre' name='nombre' class='form-control'>
				</div>
				<div class='col-md-12'> 
					<label for='sector'>Sector:</label>
						<select  name ='sector' class='form-control'>
							<option  value='seleccione'>seleccione</option>
							<option  value='Barberos'>Barberos</option>
							<option  value='Encinos'>Encinos</option>
							<option  value='Venezuela'>Venezuela</option>
							<option  value='Mercado'>Mercado</option>
							<option  value='Guajitos'>Guajitos</option>
							<option  value='Justo Rufino Barrios'>Justo Rufino Barrios</option>
							<option  value='Covi-Hode'>Covi-Hode</option>
							<option  value='San Rafael'>San Rafael</option>
							<option  value='Escuela'>Escuela</option>
						</select>
				</div>
				<div class='col-md-6 top-buffer bottom-buffer'>
					<input type='reset' class='btn btn-primary'>
					<a class='btn btn-primary' href='adminclientes.php' role='button'>Regresar</a>
				</div>
				<div class='col-md-6 top-buffer bottom-buffer'>
					<input type='submit' name='Busqueda' Value='Buscar' class='btn btn-primary'>
				</div>
			</form>    
			</div>
		</div>
</body>
";
?>