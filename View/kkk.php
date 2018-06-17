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
      <h3 style="text-align: center;"" class="text-success">Editar sección de nosotros</h3>
      <br>
      <label for="Nombre" class="control-label col-md-4">Teléfono:</label>
      <div class="col-md-4">
        <input class="form-control" type="tel" placeholder="Nombre" id="Nombre">
      </div>
    </div>

     <div class="form-group">
    <label for="correo" class="control-label col-md-4 ">Correo: </label>
    <div class="col-md-4">
      <input class="form-control" type="email" placeholder="Correo" id="lat">
    </div>
  </div>

  <div class="form-group">
    <label for="descripcion" class="control-label col-md-4 ">Informacion básica: </label>
    <div class="col-md-4">
      <textarea class="form-control" placeholder="Información básica" id="descripcion">
    </textarea>
  </div>
 <div class="clear"></div>
 <br>
  <div class="form-group ">
      <div class="col-md-6 col-md-offset-4">
        <input type="button" class="btn btn-success col-md-8" value="Guardar" id="BtnGuardar">
      </div>
  </div>
  
    </form>
</div>
</div>
<br>
<?php
  include("footer.php");
  ?>
  </body>
</html>