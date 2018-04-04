<?php
	include("config.php");
	session_start();
	$error= "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$myusername = mysqli_real_escape_string($db, $_POST['username']);
		$mypassword = md5(mysqli_real_escape_string($db, $_POST['password']));

		$sql = "SELECT usuario FROM usuarios WHERE usuario = '$myusername' and clave = '$mypassword'";
      	$result = mysqli_query($db,$sql);
      	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      	//$active = $row['active'];
      	$count = mysqli_num_rows($result);
      	
		if($count == 1) {
	        //session_register("myusername");
	        $_SESSION['login_user'] = $myusername;	         
	        header("location: index.php");	        
	    }
	    else {
	    	$error = "Tu usuario o contraseña son inválidos";
      	}
   }
?>

<!DOCTYPE html>
<html>
   	<head>
      	<title>Activa Research - Login</title>
      	<link rel="shortcut icon" href="img/icono.ico">
      	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      	<link rel="stylesheet" type="text/css" href="css/miCss.css">
   	</head>
   
   	<body class="text-center">
		<form action="" method="post">
			<img class="mb-4" src="img/logo.png" alt="" width="25%" height="25%">
			<h1 class="h3 mb-3 font-weight-normal">Por favor ingrese sus datos</h1>
			<label for="inputUsername" class="sr-only">Nombre Usuario</label>
			<input type="text" id="inputUsername" class="form-control" placeholder="Nombre Usuario" name="username" required autofocus>

			<label for="inputPassword" class="sr-only">Contraseña</label>
      		<input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="password" required>
      		<br>
      		<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>			
		</form>
		<?php
			if($error==""){

			}
			else{?>
		<div class="alert alert-danger" role="alert">
				<?php echo $error;

		}?>
		</div>
	</body>
</html>