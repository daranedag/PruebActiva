<?php
	//variables de sesion
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
	            	<li class="nav-item active">
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
   		<div class="container" style="margin-top: 4%">
   			<div class="alert alert-secondary">
   				<h4 class="alert-heading">Nota importante</h4>
   				A continuación se muestra el resultado de la encuesta realizada. <br>Se puede filtrar escribiendo el texto
   				que se desee para buscar la o las tiendas que coincidan con el criterio de búsqueda.
   			</div>
   			
   			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Ingrese sucursal" class="form-control">
	   		<?php
	   			//Query e instrucciones para llenar la tabla que se muestra
	   			$sql = "SELECT tiendas.nom_tienda, P1, P2, P3, P4 FROM datos LEFT JOIN tiendas ON datos.id_tienda=tiendas.id_tienda";
	   			$result = mysqli_query($db,$sql);
	   			echo "
	   			<table class='table table-striped table-responsive' id='myTable'>
	   				<tr>
	   					<th align='center'>Tienda</th>
			   			<th align='center'>Amabilidad</th>
			   			<th align='center'>Calidad</th>
			   			<th align='center'>Eficiencia</th>
			   			<th align='center'>Seguridad</th>";
	   			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
   				echo "<tr>";
	   				echo "<td align='left'>". $row['nom_tienda']."</td>";
	   				echo "<td align='center'>". $row['P1']."</td>";
	   				echo "<td align='center'>". $row['P2']."</td>";
	   				echo "<td align='center'>". $row['P3']."</td>";
	   				echo "<td align='center'>". $row['P4']."</td>";
   				echo "</tr>";
	   			}
   			echo "</table>";	      	
	   		?>
   		</div>   		
		<script type="text/javascript">
			function myFunction() {
				// Funcion para filtrar la tabla segun el texto a escribir
				var input, filter, table, tr, td, i;
				input = document.getElementById("myInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("myTable");
				tr = table.getElementsByTagName("tr");
				
				for (i = 0; i < tr.length; i++) {
					td = tr[i].getElementsByTagName("td")[0];
					if (td) {
						if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
							tr[i].style.display = "";
						} 
						else {
							tr[i].style.display = "none";
						}
					} 
				}
			}
		</script>
   	</body>
</html>