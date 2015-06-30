<?php
$conexion = mysql_connect("localhost","root","");
if (!$conexion){
	die ("no he podido conectar: ". mysql_error());
} 
mysql_select_db("controlcable");
session_start();
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
$nombre = $_POST['nombre'];
$sector = $_POST['sector'];
$direccion = $_POST['direccion'];
$comentario = $_POST['comentario'];
$nit = $_POST['nit'];
$nombreantiguo = $_SESSION['nombre'];
$consulta = "UPDATE clientes SET nombre='".$nombre."', sector='".$sector."', direccion='".$direccion."', 
comentario='".$comentario."', comentario='".$comentario."' AND nit = '".$nit."' WHERE nombre = '".$nombreantiguo."' ";
if(!mysql_query($consulta,$conexion)){
	die ("ERROR: ".mysql_error()); 
} else{
	echo "el usuario se ha actualizado con exito";
	echo "<br>";
	echo "<form action='editarclientes.php' method='POST'>
					<center><button type='submit' name='regresar' id='regresar'>Regresar</button></center>
				</form>";
}
mysql_close($conexion);
?>