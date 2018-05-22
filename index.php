<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laboratorio Electrónica, Telecominicaciones e informática</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Humedad', 0],
          ['Temperatura', 0]
         
        ]);
        var options = {
          width: 400, height: 400,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };
        var chart = new google.visualization.Gauge(document.getElementById('Medidores'));
        chart.draw(data, options);
        setInterval(function() {
            var JSON=$.ajax({
                url:"http://localhost/ETI/DatoSensores.php?q=1",
                dataType: 'json',
                async: false}).responseText;
            var Respuesta=jQuery.parseJSON(JSON);
            
          data.setValue(0, 1,Respuesta[0].chipid);
          data.setValue(1, 1,Respuesta[0].temperatura);
          chart.draw(data, options);
        }, 1300);
        
      }
    </script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Este botón despliega la barra de navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Zabala</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">Entradas</a>
					</li>
					<li>
						<a href="#">Favoritos</a>
					</li>
					<li>
						<a href="#">Autores</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#">Iniciar sesión</a>
					</li>
					<li>
						<a href="#">Registro</a>
					</li>					
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
			<div class="jumbotron">
				<h1>Laboratorio ETI</h1>
				<p>
					Gestion microred laboratorio de electrónica, telecomunicaciones e informática
				</p>
			</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
							</div>
							<div class="panel-body">
								<div class="form-group">
									<input type="search" class="form-control" placeholder="¿Que buscas?">
								</div>	
								<button class="form-control">
									Buscar
								</button>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span> Últimas entradas
					</div>
					<div class="panel-body">
						<div id="Medidores"></div>
						
						<p>Todavía no hay entradas</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>