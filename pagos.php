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
		<div class='container '>
			<div class='form-inline col-md-10 col-md-offset-2'>
				<h1 class='col-md-offset-2'>Seleccione una Opcion</h1>
					<div class='form-group'>
<<<<<<< HEAD
					<a href='menu.php' class='btn btn-primary btn-default' role='button'><span class='glyphicon glyphicon-home' aria-hidden='true'></span>  Inicio</a>				
					<a class='btn btn-primary' href='formulariorecibo.php' role='button'>Registrar Recibo</a>
					<a class='btn btn-primary' href='formulariofacturas.php' role='button'>Registrar Factura</a>
					<a class='btn btn-primary' href='opcionescable.php' role='button'>Regresar</a>
					<a href='index.php' class='btn btn-primary btn-default' role='button'><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span>  Cerrar Sesion</a>	
=======
						<form action='buscadorrecibo.php'>
							<button type='submit' name='recibo' class='form-control btn btn-primary'>Registrar Recibo</button>
						</form>
					</div>
					<div class='form-group'>
						<form action='buscadorfactura.php'>
							<button type='submit' name='factura' class='form-control btn btn-primary'>Registrar Factura</button>
							<a class='btn btn-primary' href='opcionescable.php' role='button'>Regresar</a>
						</form>
>>>>>>> origin/master
					</div>
			</div>
			</div>
		</div>
	</body>

</html>
";


?>