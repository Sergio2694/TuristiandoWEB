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
      <h3 style="text-align: center;"" class="text-success">Actualizar Lugares Turisticos</h3>
      <br>
      <label for="Nombre" class="control-label col-md-4">Nombre:</label>
      <div class="col-md-4">
        <input class="form-control" type="text" placeholder="Nombre" id="Nombre">
      </div>
    </div>

  <div class="form-group">
    <label for="descripcion" class="control-label col-md-4 ">Descripción: </label>
    <div class="col-md-4">
      <input class="form-control" type="textarea" placeholder="Descripción" id="descripcion">
    </div>
  </div>
  <div class="form-group">
    <label for="ubicacion" class="control-label col-md-4 ">Ubicación: </label>
    <div class="col-md-2">
      <input class="form-control" type="url" placeholder="Latitud" id="lat">
    </div>
    <div class="col-md-2">
      <input class="form-control" type="url" placeholder="Longitud" id="long">
    </div>
  </div>
  <div class="form-group">
    <label for="ubicacion" class="control-label col-md-4 ">Sitios Vecinos: </label>
    <div class="dropdown col-md-4">
      <button class="btn btn-secundary dropdown-toggle col-md-12" type="button" data-toggle="dropdown">Seleccione
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Barcelo</a></li>
        <li><a href="#">Wagelia</a></li>
        <li><a href="#">Turire</a></li>
      </ul>
    </div>
  </div>
  
  <div class="form-group ">
      <label for="file" class="control-label col-md-4 ">Seleccione una imagen</label>
      <div class="col-md-4">
        <input type="file" class="form-control-file btn btn-secundary dropdown-toggle col-md-12" id="File">
      </div>
  </div>

  <div class="form-group ">
      <label for="file" class="control-label col-md-4 ">Seleccione un video</label>
      <div class="col-md-4">
        <input type="file" class="form-control-file btn btn-secundary dropdown-toggle col-md-12" id="File">
      </div>
  </div>

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