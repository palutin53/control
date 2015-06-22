<?php

include 'style.css';

echo "
<html>
	<head>
		<tittle></tittle>
	</head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<body>
		<br>
			<h1><center>Ingresar</center></h1>
			<br>
			<br>
			<form action='login.php' method='POST'>
			<table width=50%>
			<tr>
			<td>
			<center><input type='text' placeholder='Nombre' name='usuario' width=50%></center>
			</tr></td>
			<tr><td>
			<center><input type='password' placeholder='Contraseña' name='contrasena' width=50%><center>
			</tr></td>
			<tr><td>
			</tr></td>
			<tr><td>
			<center><button type='submit' name='ingresar'>Ingresar</button></center>
			</tr></td>
			</Table>
			</form>
		</body>
</html>
	
";

?>