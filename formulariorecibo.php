<?php
echo "
<html>
		<head>
		<tittle></tittle>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<script src='js/bootstrap.js'></script>
		<script src='js/jquery-1.11.3.min.js'></script>
		</head>
	<body>
		<div class='container'>
		<div class='row'>
			<form action='crearcliente.php' method='POST' class='col-md-6 col-md-offset-3'>
			<h1>Ingrese los datos del recibo</h1>
				<div class=''> 
					<label for='date'>     Fecha:</label>
					<input type='date'class='form-control'>
				</div>
				<div class=''>
					<label for='nombre'>Nombre:</label>
					<input type='Text' placeholder='nombre' name='nombre' class='form-control'>
				</div>
				<div class=''>
					<label for='direccion'>Direccion:</label>
					<input type='Text' placeholder='direccion' name='direccion' class='form-control'>
				</div>
				<div class=''> 
					<label for='sector'>Sector:</label>
						<select  nam ='sector' class='form-control'>
							<option  value='seleccione'>seleccione</option>
							<option  value='Barberos'>Barberos</option>
							<option  value='Encinos'>Encinos</option>
							<option  value='Venezuela'>Venezuela</option>
							<option  value='Mercado'>Mercado</option>
							<option  value='Guajitos'>Guajitos</option>
							<option  value='Justo Rufino Barrios'>Justo Rufino Barrios</option>
							<option  value='Covi-Hode'>Covi-Hode</option>
							<option  value='San Rafael'>San Rafael</option>
							<option  value='Escuela'>Escuela</option>
						</select>
				</div>
				<div class=''>
					<label for='ultima_fac'>Ultima Factura:</label>
					<input type='text' placeholder='Ultima Factura' name='ultima_fac' class='form-control'>
				</div>
				<div class=''>
					<label for='ultimo_mes'>Ultimo Mes:</label>
					<Select placeholder='ultimo_mes' name='ultimo_mes' class='form-control'>
						<option  value='seleccione'>seleccione</option>
						<option  value='Enero'>Enero</option>
						<option  value='Febrero'>Febrero</option>
						<option  value='Marzo'>Marzo</option>
						<option  value='Abril'>Abril</option>
						<option  value='Mayo'>Mayo</option>
						<option  value='Junio'>Junio</option>
						<option  value='Julio'>Julio</option>
						<option  value='Agosto'>Agosto</option>
						<option  value='Septiembre'>Septiembre</option>
						<option  value='Octubre'>Octubre</option>
						<option  value='Noviembre'>Noviembre</option>
						<option  value='Diciembre'>Diciembre</option>
					<Select placeholder='anio' class='date'>
				</div>
				<div class=''>
					<label for='anio'>Ultimo año:</label>
					<select type='date' class='date form-control'>
						<option  value='seleccione'>seleccione</option>
						<option  value='2014'>2014</option>
						<option  value='2015'>2015</option>
						<option  value='2016'>2016</option>
						<option  value='2017'>2017</option>
						<option  value='2018'>2018</option>
						<option  value='2019'>2019</option>
						<option  value='2020'>2020</option>
					</select>
				</div>
				<div class='form-group top-buffer'>

					<input type='submit' class='btn btn-primary'>
					
					<input type='reset' class='btn btn-primary'>
					
						<form action='pagos.php' method='POST'>
						 	<button type='submit' name='regresar' id='regresar'class='btn btn-primary'>Regresar</button>
						</form>
					
				</div>
			</form>    
			</div>
		</div>
	<body>
<html>
";
?>