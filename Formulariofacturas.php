<?php
//include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='style.css' />";
echo "
<html>
		<head>
		<tittle class='titulopagina'>Ingreso Facturas</tittle>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css' />
		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<script src='js/bootstrap.js'></script>
		<script src='js/jquery-1.11.3.min.js'></script>
		<script src='js/custom.js'></script>
		</head>
	<body onload='nobackbutton();'>
		<div class='container'>
			<div class='row'>
				<form action='crearcliente.php' method='POST' class='col-md-6 col-md-offset-3 table-bordered top-buffer'>
			<h1 class='text-center'>Ingrese los datos de la Factura</h1>
				<div class='col-md-6'>
					<label for='codigo_cliente'>Codigo de Cliente:</label>
					<input type='int' placeholder='Ingrese el codigo(Opcional)' name='codigo_cliente' class='form-control'>
				</div>
				<div class='col-md-6'>
					<label for='numeronit'>Numero de Nit:</label>
					<input type='text' placeholder='Ingrese Nit' name='numeronit' class='form-control'>
				</div>
				<div class='col-md-6'> 
					<label for='date'>Fecha:</label>
					<input type='date'class='form-control'>
				</div>
				<div class='col-md-6 '>
					<label for='numero'>Numero de recibo:</label>
					<input type='int' placeholder='' name='numero' class='form-control' disabled='disabled'>
				</div>
				<div class='col-md-6'>
					<label for='ultimo_mes'>Mes:</label>
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
				<div class='col-md-6'> 
					<label for='sector'>Sector:</label>
						<select  name ='sector' class='form-control'>
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
				<div class='col-md-12'>
					<label for='nombre'>Nombre:</label>
					<input type='Text' placeholder='nombre' name='nombre' class='form-control'>
				</div>
				<div class='col-md-12'>
					<label for='direccion'>Direccion:</label>
					<input type='Text' placeholder='direccion' name='direccion' class='form-control'>
				</div>
				<div class='col-md-12'>
					<label for='comentario'>Comentario:</label>
					<input type='Text' placeholder='comentario' name='comentario' class='form-control'>
				</div>
				<div class='col-md-6 top-buffer bottom-buffer'>
					<input type='reset' class='btn btn-primary'>
					<a class='btn btn-primary' href='pagos.php' role='button'>Regresar</a>
				</div>
				<div class='col-md-6 top-buffer bottom-buffer'>
					<input type='submit' class='btn btn-primary'>
				</div>
			</form>
			</div>
		</div>
	</body>
<html>
";
?>
