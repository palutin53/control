<?php

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

echo "
<html>
	<head>
		<tittle class='titulopagina'>Telesat</tittle>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<script src='js/bootstrap.js'></script>
		<script src='js/jquery-1.11.3.min.js'></script>
		<script src='js/custom.js'></script>
		</head>
<body onload='nobackbutton();'>
	<div class='container'>
		
			<div class='form-inline col-md-10 col-md-offset-1'>
				<h1 class='col-md-offset-3'>Seleccione una opcion</h1>
					<div class='form-group'>
							<a href='menu.php' class='btn btn-primary btn-default' role='button'><span class='glyphicon glyphicon-home' aria-hidden='true'></span>  Inicio</a>
							<a class='btn btn-primary' href='formularioclientes.php' role='button'>Registrar Nuevo Cliente</a>
							<a class='btn btn-primary' href='eliminarcliente.php' role='button'>Eliminar Clientes</a>
							<a class='btn btn-primary' href='editarclientes.php' role='button'>Actualizar Clientes</a>
							<a class='btn btn-primary' href='opcionescable.php' role='button'>Regresar</a>
							<a href='index.php' class='btn btn-primary btn-default' role='button'><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span>  Cerrar Sesion</a>
					</div>
			</div>	
		
	</div>
</body>
</html>
";



?>