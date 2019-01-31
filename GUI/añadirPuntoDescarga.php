<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Añadir Punto Descarga</title>
  </head>

  <body>
    <div w3-include-html="menuampliado.html"></div>
    <script>
      includeHTML();
    </script>


    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" align="center" >
            <h3>Introduzca los datos</h3>
            <form id="nuevoPunto" method="post">
                <div class="form-group">
                    <input type="text"  class="form-control" placeholder="Nombre (Debe ser único) *" value="" name="nombrePunto" id="nombrePunto" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Direccion *" value="" name="direccion" id="direccion"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Población *" value="" name="poblacion" id="poblacion"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Provincia *" value="" name="provincia" id="provincia"/>
                </div>
                <div class="form-group">
                  <input type="time" id="hinicio" class=" form-control" name="hinicio" value="00:00" required>
                </div>
                <div class="form-group">
                  <input type="time" id="hfin" class=" form-control" name="hfin" value="00:00" required>
                </div>
                <div class="form-group">
                    <input type="submit" align="center" class="btn-lg btn-success" value="Añadir Punto" />
                </div>
            </form>
            <?php
              include "/Applications/MAMP/htdocs/transportgest/LOGICA/añadirPuntoDescarga.php";  
            ?>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>

<?php
?>
