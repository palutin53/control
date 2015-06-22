<?php

include 'style.css';

session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

echo "
<html>
	<head>
		<tittle></tittle>
	</head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<body>
	Seleccione Accion
	<br>
	<br>
	<center>
	<table width=50% >
			<tr><td>
				<form action='formularioclientes.php' method='POST'>
					<center><button type='submit' name='nuevocliente' id='registrarclientes' class='boton'>Registrar Nuevo Cliente</buttson></center>
				</form>
			</td></tr>
			<tr><td>
				<form action='eliminarcliente.php' method='POST'>
					<center><button type='submit' name='eliminarcliente' id='eliminarclientes' class='boton'>Eliminar Clientes</button></center>
				</form>
			</td></tr>
			<tr><td>
				<form action='editarclientes.php' method='POST'>
					<center><button type='submit' name='editarcliente' id='editarclientes' class='boton'>Editar Clientes</button></center>
				</form>
			</td></tr>
			<tr></tr>
			<tr><td>
				<form action='opcionescable.php' method='POST'>
					<center><button type='submit' name='regresar' id='regresar' class='boton'>Regresar</button></center>
				</form>
			</td></tr>
	</table>
	</center>
	</body>

</html>
";



?>