<?php

//include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='style.css' />";
echo "
<html>
	<head>
		<tittle></tittle>
	</head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<body>
		<table width=100%>
		<tr>
			<td colspan='2'><center><h1>Usuario o contraseña incorrecta <br> Intentalo de Nuevo</h1></center></td>
		</tr>
		<tr>
			<td>
				<form action='formulariologin.php'>
				<center><button type='submit' name='ingresar'>Ingresar</button></center>
				</form>
			</td>
			
		</tr>	
		</table>
	</body>

</html>
";


?>