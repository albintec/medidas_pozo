
<!DOCTYPE html>
<html>
<head>
	<title>Graficos con plotly</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="estilos.css">
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="librerias/plotly-latest.min.js"></script>
</head>
<body>
	<h1>Registro Manometro de Pozos Petroleros</h1>

    <div class="formulario">
		<form action="insertar.php" method="POST">
		<input class="form-control" type="date" value="2020-03-01" name="fecha">
		<br>
		<input class="form-control" type="text" placeholder="Ingrese medida" aria-label="Medida" name="medida">
		<br>
		<button class="btn btn-primary" type="submit">Agregar</button>
		</form>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						Graficas de Medidas
					</div>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-sm-12">
								<div id="cargaLineal"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<footer><h3>Elaborado por Albin Ramirez</h3></footer>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php');
		
	});
</script>