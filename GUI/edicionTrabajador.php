<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Editar Trabajadores</title>
  </head>

  <body>
    <div w3-include-html="menuampliado.html"></div>
    <script>
      includeHTML();
    </script>


    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" align="center">
          <p><a href="editarNombreTrabajador.php"><button type="button" class="btn btn-success btn-lg"> Cambiar Nombre</button></a></p>
          <p><a href="editarApellidosTrabajador.php"><button type="button" class="btn btn-warning btn-lg"> Cambiar Apellidos </button></a></p>
          <p><a href="editarDniTrabajador.php"><button type="button" class="btn btn-danger btn-lg"> Cambiar Dni </button></a></p>
          <p><a href="editarTelefonoTrabajador.php"><button type="button" class="btn btn-primary btn-lg"> Cambiar Telefono </button></a></p>
          <p><a href="editarPuestoTrabajador.php"><button type="button" class="btn btn-info btn-lg"> Cambiar Puesto </button></a></p>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>

<?php
?>
