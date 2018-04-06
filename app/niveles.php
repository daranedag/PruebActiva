<?php
	include('session.php');
?>
<!DOCTYPE html>
<html>
   	<head>
      	<title>Activa Research </title>
      	<link rel="shortcut icon" href="img/icono.ico">
      	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      	<link href="img/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
   	</head>
   	<header>
   		<nav class="navbar navbar-expand-sm navbar-light fixed-top bg-light" style="height: 7%;">	        
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarCollapse">
	          	<ul class="navbar-nav mr-auto">
	            	<li class="nav-item">
	              		<a class="nav-link" href="index.php">
	              			<img class="mb-4" src="img/logo.png" alt="" width="100" height="40" style="margin-top: 10%">
	              			<span class="sr-only">(current)</span></a>
	            	</li>
	            	<li class="nav-item" style="margin-top: 6%">
	              		<a class="nav-link" href="niveles.php"><b>Gráfico</b></a>
	            	</li>
	            </ul>
            	<form class="form-inline mt-2 mt-md-0" style="margin-top: -30px">
	            	<strong>Bienvenido &nbsp;</strong> <?php echo $login_session; ?>
	            	<button type="button">
          				<a href="logout.php">
            				<span class="oi oi-power-standby"></span>
            			</a>
          			</button>
	          	</form>
	        </div>
      	</nav>
   	</header>
   	<body>
   		<?php
   			//Query e instrucciones para llenar combobox con tiendas
   			$sql = "SELECT * FROM tiendas";
   			$result = mysqli_query($db,$sql);
   			$option='<option value="-1"> Seleccione una tienda </option>
   			<option value="0"> Todos </option>';
   			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
   				$option .= '<option value = "'.$row['id_tienda'].'">'.$row['nom_tienda'].'</option>';
   			}
		?>
		<div class="container" style="margin-top: 6%">
			<form class="form-inline">				
				<label class="sr-only" for="inlineFormInputName2">Name</label>
				<label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
				<div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend">
					<h4>Nivel de satisfacción&nbsp;&nbsp;</h4>
				</div>
				<select class="form-control" id="selectTiendas">
					<?php echo $option; ?>
				</select>
				</div>
				<button type="button" id="botonBuscar" class="btn btn-primary mb-2"><span class="oi oi-bar-chart"></span> Graficar</button>
			</form>			  	
			
			<div class="container" id="contenedor" width=50% height=50%>
				<canvas id="myChart" style="display: block"></canvas>
			</div>
			<div class="container" id="contenedorTabla" style="margin-top: 2%;">
				<table class='table table-striped table-responsive' id='myTable'>
					<tr>
						<th>Atributo</th>
						<th>Base</th>
						<th>Notas 6+7</th>
						<th>Notas 1 a 4</th>
						<th>Neta</th>
					</tr>
				</table>
			</div>
		</div>

		<!-- SECCION SCRIPTS -->
      	<script src="js/jquery-3.3.1.js"></script>
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
		<script src="js/llamadoGraficos.js"></script> 
		
   	</body>
</html>