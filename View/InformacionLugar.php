<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("head.php");?>
  <link href="../css/verLugar.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<?php
	include("navbar_usuario.php");
?>

	<div class="wrapper row1">
		<br>
		<h1 style="text-align: center;"><b>Nombre de Lugar</b></h1>
		<br>
		<div class="pricing">
				<div class="w3l-pricing-grids">
					<div class="agileits-pricing-grid first">
						<div class="pricing_grid">
							<div class="wthree-pricing-info pricing-top green-top" width="300" height="500">
								<img src="../images/lugar.jpg" width="200" height="200">
							</div>
							<br><br>
							<div class="wthree-pricing-info pricing-top green-top">
								<center><video width=400  height=320 controls poster="vistaprevia.jpg">
									<source src="../videos/linux hilos en c   clase 7.mp4" type="video/mp4">
								</video></center>
							</div>
							
							<div class="pricing-bottom">
								<div class="pricing-bottom-bottom">
									<p>Una descripción se define como un texto en el que están relatados los rasgos o características más importantes de un objeto, lugar o también animal.
									Una descripción se define como un texto en el que están relatados los rasgos o características más importantes de un objeto, lugar o también animal.	
									<p>
								</div>
								
								
								 <div class="form-group " style="text-align: center;">
							     	<div class="col-md-6 col-md-offset-4">
							        	<input type="button" class="btn btn-success col-md-8" onclick="location='maps.php'"  value="Regresar" id="BtnGuardar" > 
							      	</div>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>

	</div>
	<?php
	include("footer.php");
	?>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
		});
																						
	});
	</script>
	<!-- //Pop-up for pricing tables -->
	</body>
</html>
