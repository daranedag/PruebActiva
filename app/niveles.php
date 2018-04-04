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
      	<script src="js/jquery-3.3.1.js"></script>
   	</head>
   	<header>
   		<nav class="navbar navbar-expand-sm navbar-light fixed-top bg-light">	        
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarCollapse">
	          	<ul class="navbar-nav mr-auto">
	            	<li class="nav-item">
	              		<a class="nav-link" href="index.php">
	              			<img class="mb-4" src="img/logo.png" alt="" width="100" height="40">
	              			<span class="sr-only">(current)</span></a>
	            	</li>
	            	<li class="nav-item">
	              		<a class="nav-link" href="niveles.php">Gráficos</a>
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
   	<body><br><br><br><br><br>
   		<?php
   			$sql = "SELECT * FROM tiendas";
   			$result = mysqli_query($db,$sql);
   			$option='<option value="0"> Todos </option>';
   			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
   				$option .= '<option value = "'.$row['id_tienda'].'">'.$row['nom_tienda'].'</option>';
   			}
		?>		
		<select id="selectTiendas">
		<?php echo $option; ?>
		</select>
		<button type="button" id="botonBuscar">
			<span class="oi oi-magnifying-glass"></span>
		</button>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#botonBuscar').click(function(){
					var opt = $('#selectTiendas').val();
					var ajaxurl = 'graficos.php'
					data ={'tienda': opt};
					$.post(ajaxurl, data, function (response){
						alert("respuesta")
					});
				});
			});
		</script>   		
   		- Calcular niveles de satisfacción, insatisfacción y neta por pregunta
		- Filtrar resultados por tienda
		- Visualizar resultados en tabla y grafico
   	</body>
</html>