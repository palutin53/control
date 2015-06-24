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
					<form action='formularioclientes.php' method='POST'>
						<button type='submit' name='nuevocliente' class='btn-primario' id='registrarclientes'>Registrar Nuevo Cliente</button>
					</form>
				</div>
				<div class='listabotones'>
					<form action='eliminarcliente.php' method='POST'>
						<button type='submit' name='eliminarcliente' class='btn-primario' id='eliminarclientes'>Eliminar Clientes</button>
					</form>
				</div>
				<div class='listabotones'>
					<form action='editarclientes.php' method='POST'>
						<button type='submit' name='editarcliente'  class='btn-primario'id='editarclientes'>Editar Clientes</button>
					</form>
				</div>
				<div class='listabotones'>
					<form action='opcionescable.php' method='POST'>
						<button type='submit' name='regresar' class='btn-primario' id='regresar'>Regresar</button>
					</form>
				</div>
		</div>
	</body>
</html>
";



?>