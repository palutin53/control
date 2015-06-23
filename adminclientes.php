<?php
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
	<center><h1>Seleccione Accion</center></h1>
	<br>
	<br>
	<center>
	<table width=50%>
			<tr><td>
				<form action='formularioclientes.php' method='POST'>
					<center><button type='submit' name='nuevocliente' id='registrarclientes'>Registrar Nuevo Cliente</buttson></center>
				</form>
			</td></tr>
			<tr><td>
				<form action='eliminarcliente.php' method='POST'>
					<center><button type='submit' name='eliminarcliente' id='eliminarclientes'>Eliminar Clientes</button></center>
				</form>
			</td></tr>
			<tr><td>
				<form action='editarclientes.php' method='POST'>
					<center><button type='submit' name='editarcliente' id='editarclientes'>Editar Clientes</button></center>
				</form>
			</td></tr>
			<tr></tr>
			<tr><td>
				<form action='opcionescable.php' method='POST'>
					<center><button type='submit' name='regresar' id='regresar'>Regresar</button></center>
				</form>
			</td></tr>
	</table>
	</center>
	</body>

</html>
";



?>