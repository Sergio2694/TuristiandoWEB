<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("head.php");?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php
	include("navbar.php");
?>
	<div class="wrapper row1">
		<div class="container border border-success" style="width: 1100px;">    
		<form class="form-horizontal">
			<div class="form-group " >
				<h3 style="text-align: center;"" class="text-success">Actualizar Administrador</h3>
				</div>
				<br>
				<form name="crearAdmin" action="" method="post">
					<div class="form-group " >
					<label for="name" class="control-label col-md-4">Nombre:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" placeholder="name" id="name">
					</div> 
					</div>
					<div class="form-group " >
					<label for="user" class="control-label col-md-4">Usuario:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" placeholder="user" id="user">
					</div>
					</div>
					<div class="form-group " >
					<label for="password" class="control-label col-md-4">Contraseña:</label>
					<div class="col-md-4">
						<input class="form-control" type="password" placeholder="password" id="password">
					</div> 
					</div>
					<div class="form-group ">
						<div class="col-md-6 col-md-offset-4">
							<input type="submit" class="btn btn-success col-md-8" value="Actualizar" id="btnActualizar">
						</div>
					</div>
  
				</form>
			</div>
  
		</form>
		</div>>
	</div>
	
	<?php
	include("footer.php");
	?>
	</body>
</html>
