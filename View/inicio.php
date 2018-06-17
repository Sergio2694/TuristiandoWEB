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
  <h3 style="text-align: center;"" class="text-success">Bienvenido a Turisteando</h3>
  <br>    
  <div class="wrapper bgded" <a href="#"><img src="../images/6.jpg" alt=""></a>>
  <div class="hoc split clear">
    <section> 
      <!-- ################################################################################################ -->
      <h2 class="heading">Turisteando</h2>
      <p class="btmspace-50">En la parte administrador el usuario tendra la posibilidad de:</p>
      <ul class="nospace group elements">
        <li>
          <article><a><i class="fa fa-wpexplorer"></i></a>
            <h6 class="heading">Lugares turisticos</h6>
            <p>Crear, actualizar y borrar los sitios o lugares turisticos</p>
          </article>
        </li>
        <li>
          <article><a><i class="fa fa-eye-slash"></i></a>
            <h6 class="heading">Administradores</h6>
            <p>Crear, actualizar y borrar los administradores que le dan manteniento al sistema</p>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
</div>

  </div>
</div>
<br>
<?php
  include("footer.php");
  ?>
  </body>
</html>