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
		<table width=100%>
		<tr>
			<td colspan='2'><center><h1>Seleccione una accion</h1></center></td>
		</tr>
		<tr>
			<td>
				<form action='opcionescable.php'>
				<center><button type='submit' name='cable'>CABLE</button></center>
				</form>
			</td>
			<td>
				<form action='opcionesinternet.php'>
				<center><button type='submit' name='intenet'>INTERNET</center></button>
				</form>
			</td>
		</tr>	
		</table>
	</body>

</html>
";


?>