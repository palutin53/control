<?php

session_start();

$contador = 0;

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
//····························································································································
$addnombre = $_POST['nombre'];
$addsector = $_POST['sector'];	
$adddireccion = $_POST['direccion'];
$addultima_fac = $_POST['ultima_fac'];
$addultimo_mes = $_POST['ultimo_mes'];
$addanio = $_POST['anio'];
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

$conexion = mysql_connect("localhost","root","");
if(!$conexion){
	die ("ERROR: ".mysql_error());
}
mysql_select_db("controlcable",$conexion);

if( $contador == 0 ){
if(!mysql_query("INSERT INTO clientes(codigo,nombre,sector,direccion,ultima_fac,ultimo_mes,anio,comentario)
	VALUES('','$addnombre','$addsector','$adddireccion','$addultima_fac','$addultimo_mes','$addanio','$addcomentario')")){
	die ("
	ERROR: <br><br>
	<form action='adminclientes.php'>
	<input type='submit' name='Regresar' value='regresar'>
	</form>
".mysql_error());
}
	else{

echo "
	se ha creado el usuario <br><br>
	<form action='adminclientes.php'>
	<input type='submit' name='Regresar' value='regresar'>
	</form>
";
}

mysql_close($conexion);
}
else{
	echo "Este Cliente ya existe";
	echo "
	 <br><br>
	<form action='adminclientes.php'>
	<input type='submit' name='Regresar' value='regresar'>
	</form>
";
}
?>