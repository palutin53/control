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
		<div class='form-inline col-md-10'>
			<div class='form-inline col-md-10 col-md-offset-3'>
				<h1 class='col-md-offset-2'>Seleccione una opcion</h1>
					<div class='form-group'>
							<a class='btn btn-primary' href='formularioclientes.php' role='button'>Registrar Nuevo Cliente</a>
							<a class='btn btn-primary' href='eliminarcliente.php' role='button'>Eliminar Clientes</a>
							<a class='btn btn-primary' href='editarclientes.php' role='button'>Editar Clientes</a>
							<a class='btn btn-primary' href='opcionescable.php' role='button'>Regresar</a>
						
					</div>
			</div>	
		</div>
	</div>
</body>
</html>
";



?>