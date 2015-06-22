<?php

$conexion = mysql_connect("localhost","root","");
if(!$conexion){
	die ("ERROR: ".mysql_error());
} else{
mysql_select_db("controlinternet.php",$conexion);
}
?>