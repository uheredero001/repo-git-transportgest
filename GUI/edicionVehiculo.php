<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Editar Vehiculo</title>
  </head>

  <body>
    <div w3-include-html="menuampliado.html"></div>
    <script>
      includeHTML();
    </script>


    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <p><a href="editarMatriculaVehiculo.php"><button type="button" class="btn btn-success btn-lg"> Cambiar Matricula</button></a></p>
          <p><a href="editarTipoVehiculo.php"><button type="button" class="btn btn-warning btn-lg"> Cambiar Tipo </button></a></p>
          <p><a href="editarRemolqueVehiculo.php"><button type="button" class="btn btn-danger btn-lg"> Cambiar Remolque </button></a></p>
          <p><a href="editarMatriculacionVehiculo.php"><button type="button" class="btn btn-primary btn-lg"> Cambiar Año Matriculacion </button></a></p>
          <p><a href="editarProximaItvVehiculo.php"><button type="button" class="btn btn-info btn-lg"> Cambiar Proxima Itv </button></a></p>
          <p><a href="editarProximaItvRemolqueVehiculo.php"><button type="button" class="btn btn-success btn-lg"> Cambiar Proxima Itv Remolque</button></a></p>
          <p><a href="editarCapacidadVehiculo.php"><button type="button" class="btn btn-warning btn-lg"> Cambiar Capacidad </button></a></p>
          <p><a href="editarEmailVehiculo.php"><button type="button" class="btn btn-danger btn-lg"> Cambiar Email </button></a></p>
          <p><a href="editarTelefonoVehiculo.php"><button type="button" class="btn btn-primary btn-lg"> Cambiar Telefono </button></a></p>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>

<?php
?>
