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
		<br>
		<div class="form-group " >
			<h3 style="text-align: center;"" class="text-success">Lista de Administradores</h3>
		</div>
		<center>
		<table>
			<tr>
				<th>Nombre</th>
				<th>Usuario</th>
				<th></th>
				<th></th>
			</tr>
			<?php
				include_once '../Business/AdminBusiness.php';
				$adminBusines = new AdminBusiness();
				$listaAdmin = $adminBusines->listaAdmin();
				$admin = array();
				
				$size = count($listaAdmin);
				for($i=0; $i<$size; $i++) {
					$admin = $listaAdmin[$i];
				?>
					<tr>
						<td><?php echo $admin[1]; ?></td>
						<td><?php echo $admin[2]; ?></td>
						<td><input type="button" value="Actualizar" onclick="javascript:cambia_de_pagina();" /></td>
						<td><input type="button" value="Eliminar" name="btnEliminar" id="btnEliminar" /></td>
					</tr>
				<?php
				}
			?>
		</table>
		</center>
		</form>
		</div>
	</div>
	
	<?php
	include("footer.php");
	?>
	</body>
	
	<script>
		function cambia_de_pagina(){
			location.href="./ActualizarAdmin.php"
		}
	</script>
	
</html>