<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Ver Viajes Predeterminados</title>
  </head>

  <body>
    <?php
      session_start();
      include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdUsuario.php";

      if(esAdmin($_SESSION['user']))
      {
        $_SESSION['privilegios']="admin";
        echo '<div w3-include-html="menuampliado.html"></div>';
      }
      else {
        $_SESSION['privilegios']="normal";
        echo '<div w3-include-html="menulimitado.html"></div>';
      }
     ?>
    <script>
      includeHTML();
    </script>


    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" align="center">
          <h3>VIAJES PREDETERMINADOS</h3>
          <?php
              include "/Applications/MAMP/htdocs/transportgest/LOGICA/verViajesPredeterminados.php";
          ?>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>

  </body>

</html>

<?php
?>
