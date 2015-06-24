<?php
 
session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

echo "
<html>
	<head>
		<tittle></tittle>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	</head>
	<body>
		<h1 class='text-center'>Seleccione una Opcion</h1>
		
			<div class='cableinternet'>
				<div class='menucable'>
				<img src='images/television.jpg' class='img-rounded' alt='television' height='140px'width='180px'></img>
					<form action='opcionescable.php'>
						<button type='submit' class='btn btn-primary' name='cable'id='botoncable'>CABLE</button>
					</form>
				</div>
				<div class='menuinternet'>
					<img src='images/internet.jpg' class='img-rounded' alt='internet' height='140px'width='180px'></img>
					<form action='opcionesinternet.php'>
						<button type='submit' class='btn btn-primary' name='intenet'id='botoninternet'>INTERNET</button>
					</form>
				</div
			</div>	
		
	</body>

</html>
";


?>