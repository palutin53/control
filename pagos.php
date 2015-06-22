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
	<center><h1>Seleccione Accion</center></h1>
	<br>
	<br>
	<center>
	<table width=50%>
			<tr><td>
				<form action='formulariorecibo.php'>
					<center><button type='submit' name='recibo' class='boton'>Registrar Recibo</button></center>
				</form>
			</td>
			<td>
				<form action='formulariofacturas.php'>
					<center><button type='submit' name='factura' class='boton'>Registrar Factura</button></center>
				</form>
			</td></tr>
			<tr><td colspan=2>
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