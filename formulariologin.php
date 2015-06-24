<?php
//include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='css/bootstrap.css' /><link rel='stylesheet' type='text/css' href='css/style.css' /> ";
echo "
<html>
	<head>
		<tittle></tittle>
	</head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<body>
		
			<center><img src='images/img1.png' class='imageninicio' alt='Telesat Guatemala'></img></center>
			<center>
			<table class='enviarlog'>
				<h1 class='logintitle'>Login</h1>
				<form action='login.php' method='POST'>
					
						<tr>
							<td>
							<div class='form-group'>	
								<label>Usuario</label>
								<input type='text' class='form-control' placeholder='Nombre' name='usuario' width=50%>
						    </div>
							</td>
						</tr>
						<tr>
							<td>
							<div class='form-group'>
							<label>Clave</label>
								<input type='password' class='form-control' placeholder='Contraseña' name='contrasena' width=50%><center>
							</div>
							</td>
						</tr>
						
						<tr>
							<td>
								<button  type='submit' class='btn btn-primary' name='ingresar'>Ingresar</button>
							</td>	
						</tr>
					
				</form>
			</table>
			</center>
		</body>
</html>
	
";

?>