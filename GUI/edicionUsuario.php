<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Editar Usuario</title>
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
          <p><a href="editarPasswordUsuario.php"><button type="button" class="btn btn-success btn-lg"> Cambiar Password</button></a></p>
          <p><a href="editarNombreUsuario.php"><button type="button" class="btn btn-warning btn-lg"> Cambiar Nombre </button></a></p>
          <p><a href="editarApellidosUsuario.php"><button type="button" class="btn btn-danger btn-lg"> Cambiar Apellidos </button></a></p>
          <p><a href="editarPrivilegiosUsuario.php"><button type="button" class="btn btn-primary btn-lg"> Cambiar Privilegios </button></a></p>

        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>

<?php
?>
