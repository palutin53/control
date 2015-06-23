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
				<form action='pagos.php'>
					<center><button type='submit' name='Pago' class='boton'>Registrar Pago</buttson></center>
				</form>
			</td></tr>
			<tr><td>
				<form action='adminclientes.php'>
					<center><button type='submit' name='Admin. Clientes' class='boton'>Admin. Clientes</button></center>
				</form>
			</td></tr>
			<tr><td>
				<form action='formulariobuscador.php'>
					<center><button type='submit' name='gen_listados' class='boton'>Generar Listados</button></center>
				</form>
			</td></tr>
			<tr><td>
				<form action='principal.php'>
					<center><button type='submit' name='Imprimir Listados' class='boton'>Imprimir Listados</button></center>
				</form>
			</td></tr>
			<td colspan=2>
				<form action='menu.php' method='POST'>
					<center><button type='submit' name='regresar' id='regresar'>Regresar</button></center>
				</form>
			</td></tr>
	</table>
	</center>
	</body>

</html>
";



?>