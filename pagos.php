<?php

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

echo "
<html>
	<head>
		<tittle></tittle>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	</head>
	<body>
		<div class='cajaacciones'>
		<h1>Seleccione una Opcion</h1>
			<div class='listabotones'>
				<form action='formulariorecibo.php'>
					<button type='submit' name='recibo' class='btn-primario'>Registrar Recibo</button>
				</form>
			</div>
			<div class='listabotones'>
				<form action='formulariofacturas.php'>
					<button type='submit' name='factura' class='btn-primario'>Registrar Factura</button>
				</form>
			</div>
			<div class='listabotones'>
				<form action='opcionescable.php' method='POST'>
					<button type='submit' name='regresar' id='regresar' class='btn-primario'>Regresar</button>
				</form>
			</div>
		</div>
	</body>

</html>
";


?>