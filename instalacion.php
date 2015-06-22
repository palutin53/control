<?php

// ································CABLE····································································

//TABLA DE CLIENTES·············································································································································
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
	nombre char(25) NOT NULL,
	sector char(25) NOT NULL,
	direccion char(50) NOT NULL,
	ultima_fac char(20),
	ultimo_rec char(20),
	ultimo_mes char(10),
	anio int,
	comentario char(200)
)";
if(!mysql_query($clientes,$conexion)){
	die ("no he podido crear clientes: ". mysql_error());
	echo "<br />";
} else {
	echo "Clientes ha sido creado";
	echo "<br />";
}
///cerrar conexion=================================================================================================================================
mysql_close($conexion);
//Contenido de prueba=============================================================================================================================
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlcable",$conexion);
if(!mysql_query("INSERT INTO clientes (codigo, nombre, sector, direccion, ultima_fac, ultimo_rec, ultimo_mes,anio,comentario)
	VALUES (10001,'Pablo Lutin','Barberos','20 calle A  9-07','F20192','R23423','Abril',2015,'Cliente quedo pendiente de pagar en 10 dias')
	")){
		echo "No se ha podido crear contenido de prueba para clientes: ".mysql_error();
echo "<br />";
} else {
	echo "Contenido de prueba para Logs Creado con Exito";
	echo "<br />";
}
mysql_close($conexion);
//TABLA DE USUARIOS·············································································································································
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
//Contenido de prueba=============================================================================================================================
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlcable",$conexion);
mysql_query("INSERT INTO usuarios (codigo, nombre, usuario, contrasena, permisos)
	VALUES (102,'Ivan Lutin', 'ivnlt', 'Guatemala2015','1')");

if(!mysql_query("INSERT INTO usuarios (codigo, nombre, usuario, contrasena, permisos)
	VALUES (101,'Pablo Lutin', 'palutin', 'soylacomadreja1','1')
	")){
		echo "No se ha podido crear contenido de prueba para usuarios: ".mysql_error();
echo "<br />";
} else {
	echo "Contenido de prueba para usuarios Creado con Exito";
	echo "<br />";
}
mysql_close($conexion);
//TABLA DE LOGS·············································································································································
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
//Contenido de prueba=============================================================================================================================
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
mysql_select_db("controlcable",$conexion);
if(!mysql_query("INSERT INTO logs (utc, anio, mes, dia, hora, minuto, segundo, ip, navegador, usuario, contrasena)
	VALUES (0000000,2015,06,25,18,24,02,'127.0.0.1','chrome','palutin','soylacomadreja1')
	")){
	echo "No se ha podido crear contenido de prueba para Logs: ".mysql_error();
echo "<br />";
} else {
	echo "Contenido de prueba para Logs Creado con Exito";
	echo "<br />";
}
mysql_close($conexion);
// ································INTERNET·································································································

//TABLA DE CLIENTES·············································································································································
//conexion=================================================================================================================================
echo "INTERNET";
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
	nombre char(25) NOT NULL,
	sector char(25) NOT NULL,
	direccion char(50) NOT NULL,
	ultima_fac char(20),
	ultimo_rec char(20),
	ultimo_mes char(10),
	anio int,
	comentario char(200)
)";
if(!mysql_query($clientes,$conexion)){
	die ("no he podido crear clientes: ". mysql_error());
	echo "<br />";
} else {
	echo "Clientes ha sido creado";
	echo "<br />";
}
///cerrar conexion=================================================================================================================================
mysql_close($conexion);
//Contenido de prueba=============================================================================================================================
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlinternet",$conexion);
if(!mysql_query("INSERT INTO clientes (codigo, nombre, sector, direccion, ultima_fac, ultimo_rec, ultimo_mes,anio,comentario)
	VALUES (10001,'Pablo Lutin','Barberos','20 calle A  9-07','F20192','R23423','Abril',2015,'Cliente quedo pendiente de pagar en 10 dias')
	")){
		echo "No se ha podido crear contenido de prueba para clientes: ".mysql_error();
echo "<br />";
} else {
	echo "Contenido de prueba para clientes Creado con Exito";
	echo "<br />";
}
mysql_close($conexion);

//TABLA DE USUARIOS·············································································································································
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
//Contenido de prueba=============================================================================================================================
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
	echo "<br />";
} 
mysql_select_db("controlinternet",$conexion);

mysql_query("INSERT INTO usuarios (codigo, nombre, usuario, contrasena, permisos)
	VALUES (101,'Pablo Lutin', 'palutin', 'soylacomadreja1','1')");

if(!mysql_query("INSERT INTO usuarios (codigo, nombre, usuario, contrasena, permisos)
	VALUES (102,'Ivan Lutin', 'ivnlt', 'Guatemala2015','1')
	")){
		echo "No se ha podido crear contenido de prueba para usuarios: ".mysql_error();
echo "<br />";
} else {
	echo "Contenido de prueba para usuarios Creado con Exito";
	echo "<br />";
}
mysql_close($conexion);

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
//Contenido de prueba=============================================================================================================================
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
mysql_select_db("controlinternet",$conexion);
if(!mysql_query("INSERT INTO logs (utc, anio, mes, dia, hora, minuto, segundo, ip, navegador, usuario, contrasena)
	VALUES (0000000,2015,06,25,18,24,02,'127.0.0.1','chrome','palutin','soylacomadreja1')
	")){
	echo "No se ha podido crear contenido de prueba para Logs: ".mysql_error();
echo "<br />";
} else {
	echo "Contenido de prueba para Logs Creado con Exito";
	echo "<br />";
}


?>