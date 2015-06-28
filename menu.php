<?php
 
session_start();
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
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
<body onload='nobackbutton();'>
	<div class='container'>
		<div class='row menucable'>
			<h1 class='text-center'>Seleccione una Opcion</h1>
				<div class='cableinternet'>
					<img src='images/television.jpg' class='img-bordered menuimagen' alt='television' height='180px'width='220px'></img>
					<div class='clearfix'></div>
					<a class='btn btn-primary top-buffer col-md-offset-3' href='opcionescable.php' role='button'>Cable</a>
				</div>
				<div class='cableinternet'>
					<img src='images/internet.jpg' class='img-bordered menuimagen' alt='internet' height='180px'width='220px'></img>
					<div class='clearfix'></div>
					<a class='btn btn-primary top-buffer col-md-offset-3' href='opcionesinternet.php' role='button'>Internet</a>
				</div>
		</div>
	</div>
	<footer class='piedepagina'>
	</footer>	
</body>
</html>
";
?>