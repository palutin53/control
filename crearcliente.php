<?php

session_start();

$contador = 0;

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
//····························································································································
$addnombre = $_POST['nombre'];
$addsector = $_POST['sector'];	
$adddireccion = $_POST['direccion'];
$addultimo_mes = $_POST['ultimo_mes'];
$addcomentario = $_POST['comentario'];

// comprobar si el usuario existe en la bd

$conexion = mysql_connect("localhost","root","");
if(!$conexion){
	die ("ERROR: ".mysql_error());
} 
mysql_select_db("controlcable",$conexion);


$consulta = mysql_query("SELECT * FROM clientes",$conexion);

while ($fila = mysql_fetch_array($consulta)){
	if($fila['nombre'] == $addnombre & $fila['direccion'] == $adddireccion){
			$contador++;
	} else {}
}


mysql_close($conexion);

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

";





$conexion = mysql_connect("localhost","root","");
if(!$conexion){
	die ("ERROR: ".mysql_error());
}

if( $contador == 0 ){
if(!mysql_query("INSERT INTO clientes(codigo,nombre,sector,direccion,ultima_fac,ultimo_mes,anio,comentario)
	VALUES('','$addnombre','$addsector','$adddireccion','$addultimo_mes','$addcomentario')")){
	die ("
	ERROR: <br><br>
	<div class='container'>
		<div class='form-inline col-md-10'>
			<div class='form-inline col-md-10 col-md-offset-3'>
					<div class='form-group'>
						<a class='btn btn-primary' href='adminclientes.php' role='button'>Regresar</a>
					</div>
			</div>	
		</div>
	</div>
".mysql_error());
}
	else{

echo "
	se ha creado el usuario <br><br>
	<div class='container'>
		<div class='form-inline col-md-10'>
			<div class='form-inline col-md-10 col-md-offset-3'>
				<h1 class='col-md-offset-2'>Seleccione una opcion</h1>
					<div class='form-group'>
						<a class='btn btn-primary' href='adminclientes.php' role='button'>Regresar</a>
					</div>
			</div>	
		</div>
	</div>
";
}

mysql_close($conexion);
}
else{
	echo "Este Cliente ya existe";
	echo "
	 <div class='container'>
		<div class='form-inline col-md-10'>
			<div class='form-inline col-md-10 col-md-offset-3'>
				<h1 class='col-md-offset-2'>Seleccione una opcion</h1>
					<div class='form-group'>
						<a class='btn btn-primary' href='adminclientes.php' role='button'>Regresar</a>
					</div>
			</div>	
		</div>
	</div>
";
}
echo "
</body>

";
?>


