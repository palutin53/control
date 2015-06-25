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
		<script src='js/custom.js'></script>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	</head>
	<body onload='nobackbutton();'>
		<div class='cajaacciones'>
			<h1>Seleccione una opcion</h1>
				<div class='listabotones'>
					<form action='pagos.php'>
						<button type='submit' name='Pago' class='btn btn-primario'>Registrar Pago</button>
					</form>
				</div>
				<div class='listabotones'>
					<form action='adminclientes.php'>
						<button type='submit' name='Admin. Clientes' class='btn btn-primario'>Admin. Clientes</button>
					</form>
				</div>
				<div class='listabotones'>
					<form action='formulariobuscador.php'>
						<button type='submit' name='gen_listados' class='btn btn-primario'>Consulta Clientes</button>
					</form>
				</div>
				<div class='listabotones'>
					<form action='principal.php'>
						<button type='submit' name='Imprimir Listados' class='btn btn-primario'>Imprimir Listados</button>
					</form>
				</div>
				<div class='listabotones'>
					<form action='menu.php'  method='POST'>
						<button type='submit' name='regresar' id='regresar' class='btn btn-primario'>Regresar</button>
					</form>
				</div>
		</div>
		
	</body>

</html>
";



?>