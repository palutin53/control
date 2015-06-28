<?php
session_start();
$contador = 0;
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
//····························································································································
$addcodigo = $_SESSION['codigo'];
$addcomentario = $_POST['comentario'];
$addcorrelativo = $_POST['correlativo'];
$addfecha_pago = $_POST['fecha_pago'];
$addmes = $_POST['mes'];
$addcantidad = $_POST['cantidad'];
// comprobar si el usuario existe en la bd
$conexion = mysql_connect("localhost","root","");
if(!$conexion){
	die ("ERROR: ".mysql_error());
} 
mysql_select_db("controlcable",$conexion);
$consulta = mysql_query("SELECT * FROM pagos",$conexion);
while ($fila = mysql_fetch_array($consulta)){
	if($fila['codigo'] == $addcodigo & $fila['mes_pago'] == $addmes){
			$contador++;
	} else {}
}
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
if( $contador == 0 ){
if(!mysql_query("INSERT INTO pagos(codigo,fecha_pago,mes_pago,correlativo,cantidad,comentario,usuario)
	VALUES('".$addcodigo."','$addfecha_pago','$addmes','$addcorrelativo','$addcantidad','$addcomentario','".$usuario."')")){
	die ("
	ERROR: <br><br>
	<div class='container'>
		<div class='form-inline col-md-10'>
			<div class='form-inline col-md-10 col-md-offset-3'>
					<div class='form-group'>
						<a class='btn btn-primary' href='pagos.php' role='button'>Regresar</a>
					</div>
			</div>	
		</div>
	</div>
".mysql_error());
}
	else{
echo "
	¡Felicidades! Pago Realizado Satisfactoriamente.<br><br>
	<div class='container'>
		<div class='form-inline col-md-10'>
			<div class='form-inline col-md-10 col-md-offset-3'>
					<div class='form-group'>
						<a class='btn btn-primary' href='pagos.php' role='button'>Regresar</a>
					</div>
			</div>	
		</div>
	</div>
";
}
}
else{
	echo "Pago Duplicado, Intente de nuevo.";
	echo "
	 <div class='container'>
		<div class='form-inline col-md-10'>
			<div class='form-inline col-md-10 col-md-offset-3'>
						<div class='form-group'>
						<a class='btn btn-primary' href='pagos.php' role='button'>Regresar</a>
					</div>
			</div>	
		</div>
	</div>
";
}
echo "
</body>
";
mysql_close($conexion);
?>