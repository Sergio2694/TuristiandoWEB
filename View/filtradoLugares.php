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
  include("navbar_usuario.php");
?>
  <div class="wrapper row1">
    <br>
  <div class="container border border-success" style="width: 1100px;">    
  <form class="form-horizontal">
    <div class="form-group " >
      <h3 style="text-align: center;"" class="text-success">Criterios de busquedad</h3>
      <br>
  <div class="form-group">
    <label for="ubicacion" class="control-label col-md-4 ">Precios: </label>
    <div class="dropdown col-md-4">
      <select class="form-control" id="sel1" name="sellist1">
        <option value="1"> 0 a 25000 </option>
        <option value="2"> 26000 a 50000 </option>
        <option value="3"> 51000 a 100000 </option>
        <option value="4"> Mas de 100000 </option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="ubicacion" class="control-label col-md-4 ">Tipo de turista: </label>
    <div class="dropdown col-md-4">
      <select class="form-control" id="sel1" name="sellist1">
        <option value="1"> Aventurero </option>
         <option value="2"> Cultural </option>
         <option value="3"> Gastronomico </option>
         <option value="4"> Convencional </option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="ubicacion" class="control-label col-md-4 ">Tipo de actividad: </label>
    <div class="dropdown col-md-4">
      <select class="form-control" id="sel1" name="sellist1">
        <option value="1"> Alojamiento </option>
         <option value="2"> Aire libre </option>
         <option value="3"> Volcanes </option>
         <option value="4"> Senderismo </option>
         <option value="5"> Kayak </option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="ubicacion" class="control-label col-md-4 ">Tipo de atractivo: </label>
    <div class="dropdown col-md-4">
      <select class="form-control" id="sel1" name="sellist1">
        <option value="1"> Bibliotecas </option>
         <option value="2"> Galería de artes </option>
         <option value="3"> Museos </option>
         <option value="4"> Jardines </option>
         <option value="5"> Hoteles 
      </select>
    </div>
  </div>
  <div class="form-group ">
      <div class="col-md-6 col-md-offset-4">
        <input type="button" class="btn btn-success col-md-8" onclick="location='maps.php'"  value="Guardar" id="BtnGuardar" > 
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