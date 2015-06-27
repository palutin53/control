<?php
echo "
<html>
	<head>
		<tittle class='titulopagina'>Telesat</tittle>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<script src='js/bootstrap.js'></script>
		<script src='js/jquery-1.11.3.min.js'></script>
		<script src='js/custom.js'></script>
		</head>
	</head>
	<body onload='nobackbutton();'>
		<div class='container '>
			<div class='row'>
				<center><img src='images/img1.png' class='imageninicio' alt='Telesat Guatemala'></img></center>
				<h1 class='logintitle text-center'>LOGIN</h1>
				<form action='login.php' method='POST' class='col-md-6 col-md-offset-3' >
					<div class='col-md-6'>	
						<label for='usuario'>Usuario</label>
						<input type='text' class='form-control' placeholder='Nombre' name='usuario' width=50%>
				    </div>
					<div class='col-md-6'>
						<label for='contrasena'>Password</label>
						<input type='password' class='form-control' placeholder='Contraseña' name='contrasena' width=50%>
					</div>
					<div class='col-md-offset-5 '>
						<button  type='submit' class='btn btn-primary top-buffer' name='ingresar'>Ingresar</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
";
?>