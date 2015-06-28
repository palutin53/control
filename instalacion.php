<?php
// ································CABLE····································································
//·····························································TABLA DE CLIENTES················································································
//conexion=================================================================================================================================
echo "CABLE";
echo "<br><br>";
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
//base de datos==================================================================================================================================
if(mysql_query("CREATE DATABASE controlcable", $conexion)){
	echo "se ha creado la base de datos";
	echo "<br />";
} else{
	echo "no se ha podido crear la base de datos: ". mysql_error();
	echo "<br />";
} 
//Tabla==========================================================================================================================================
mysql_select_db("controlcable",$conexion);
$clientes = "CREATE TABLE clientes(
	codigo int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(codigo),
	nombre char(50) NOT NULL,
	sector char(50) NOT NULL,
	direccion char(80) NOT NULL,
	comentario char(200),
	nit int NOT NULL,
	usuario char(25)
)AUTO_INCREMENT = 10001";
if(!mysql_query($clientes,$conexion)){
	die ("no he podido crear clientes: ". mysql_error());
	echo "<br />";
} else {
	echo "Clientes ha sido creado";
	echo "<br />";
}
///cerrar conexion=================================================================================================================================
mysql_close($conexion);
//····································································TABLA DE PAGOS ·········································································
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlcable",$conexion);
$pagos = "CREATE TABLE pagos(
	confirmacionpago int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(confirmacionpago),
	codigo int NOT NULL,
	FOREIGN KEY(codigo) REFERENCES clientes(codigo),
	fecha_pago char(90) NOT NULL,
	mes_pago char(15) NOT NULL,
	correlativo char(30) NOT NULL,
	cantidad int,
	comentario char(30),
	usuario char(25) NOT NULL
)AUTO_INCREMENT = 53000";
if(!mysql_query($pagos,$conexion)){
	die ("no he podido crear pagos: ". mysql_error());
	echo "<br />";
} else {
	echo "pagos ha sido creado";
	echo "<br />";
}
mysql_close($conexion);
//····································································TABLA DE USUARIOS·········································································
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlcable",$conexion);
$usuarios = "CREATE TABLE usuarios(
	codigo int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(codigo),
	nombre char(25) NOT NULL,
	usuario char(40) NOT NULL,
	contrasena char(20) NOT  NULL,
	permisos int NOT NULL
)";
if(!mysql_query($usuarios,$conexion)){
	die ("no he podido crear usuarios: ". mysql_error());
	echo "<br />";
} else {
	echo "Usuarios ha sido creado";
	echo "<br />";
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlcable",$conexion);
if(!mysql_query("INSERT INTO usuarios (codigo, nombre, usuario, contrasena, permisos)
	VALUES (101,'Pablo Lutin', 'palutin', 'soylacomadreja1','1')
	")){
		echo "No se ha podido crear contenido de prueba para Logs: ".mysql_error();
echo "<br />";
} else {
	echo "Contenido de prueba para usuarios Creado con Exito";
	echo "<br />";
}
mysql_close($conexion);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//···································································TABLA DE LOGS··········································································
//conexion=================================================================================================================================
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
//Tabla==========================================================================================================================================
mysql_select_db("controlcable",$conexion);
$logs = "CREATE TABLE logs(
	utc int,
	anio int,
	mes int,
	dia int,
	hora int,
	minuto int,
	segundo int,
	ip char(50),
	navegador char(100),
	usuario char(40),
	contrasena char(40)
)";
if(!mysql_query($logs,$conexion)){
	die ("no he podido crear logs: ". mysql_error());
	echo "<br />";
} else {
	echo "Logs ha sido creado";
	echo "<br />";
}
///cerrar conexion=================================================================================================================================
mysql_close($conexion);
// ································INTERNET·································································································
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//···················································TABLA DE CLIENTES··························································································
//conexion=================================================================================================================================
echo "<CENTER>INTERNET</CENTER>";
echo "<br><br>";
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
//base de datos==================================================================================================================================
if(mysql_query("CREATE DATABASE controlinternet", $conexion)){
	echo "se ha creado la base de datos";
	echo "<br />";
} else{
	echo "no se ha podido crear la base de datos: ". mysql_error();
	echo "<br />";
} 
//Tabla==========================================================================================================================================
mysql_select_db("controlinternet",$conexion);
$clientes = "CREATE TABLE clientes(
	codigo int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(codigo),
	nombre char(50) NOT NULL,
	sector char(50) NOT NULL,
	direccion char(80) NOT NULL,
	comentario char(200),
	nit int NOT NULL,
	usuario char(25) NOT NULL
)AUTO_INCREMENT = 10001";
if(!mysql_query($clientes,$conexion)){
	die ("no he podido crear clientes: ". mysql_error());
	echo "<br />";
} else {
	echo "Clientes ha sido creado";
	echo "<br />";
}
///cerrar conexion=================================================================================================================================
mysql_close($conexion);
//····································································TABLA DE PAGOS ·········································································
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlinternet",$conexion);
$pagos = "CREATE TABLE pagos(
	confirmacionpago int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(confirmacionpago),
	codigo int NOT NULL,
	FOREIGN KEY(codigo) REFERENCES clientes(codigo),
	nombre char(25) NOT NULL,
	direccion char(80) NOT NULL,
	sector char(25) NOT NULL,
	fecha_pago char(90) NOT NULL,
	mes_pago char(15) NOT NULL,
	correlativo char(30) NOT NULL,
	NIT int,
	cantidad int,
	comentario char(120) NOT  NULL,
	usuario char(25) NOT NULL
)AUTO_INCREMENT = 18000";
if(!mysql_query($pagos,$conexion)){
	die ("no he podido crear usuarios: ". mysql_error());
	echo "<br />";
} else {
	echo "Usuarios ha sido creado";
	echo "<br />";
}
mysql_close($conexion);
//····································································TABLA DE USUARIOS·········································································
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlinternet",$conexion);
$usuarios = "CREATE TABLE usuarios(
	codigo int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(codigo),
	nombre char(25) NOT NULL,
	usuario char(40) NOT NULL,
	contrasena char(20) NOT  NULL,
	permisos int NOT NULL
)";
if(!mysql_query($usuarios,$conexion)){
	die ("no he podido crear usuarios: ". mysql_error());
	echo "<br />";
} else {
	echo "Usuarios ha sido creado";
	echo "<br />";
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlinternet",$conexion);
if(!mysql_query("INSERT INTO usuarios (codigo, nombre, usuario, contrasena, permisos)
	VALUES (101,'Pablo Lutin', 'palutin', 'soylacomadreja1','1')
	")){
		echo "No se ha podido crear contenido de prueba para Logs: ".mysql_error();
echo "<br />";
} else {
	echo "Contenido de prueba para usuarios Creado con Exito";
	echo "<br />";
}
mysql_close($conexion);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//TABLA DE LOGS·············································································································································
//conexion=================================================================================================================================
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
//Tabla==========================================================================================================================================
mysql_select_db("controlinternet",$conexion);
$logs = "CREATE TABLE logs(
	utc int,
	anio int,
	mes int,
	dia int,
	hora int,
	minuto int,
	segundo int,
	ip char(50),
	navegador char(100),
	usuario char(40),
	contrasena char(40)
)";
if(!mysql_query($logs,$conexion)){
	die ("no he podido crear logs: ". mysql_error());
	echo "<br />";
} else {
	echo "Logs ha sido creado";
	echo "<br />";
}
///cerrar conexion=================================================================================================================================
mysql_close($conexion);
?>