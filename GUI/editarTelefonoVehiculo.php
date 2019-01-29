<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Cambiar Telefono de Vehiculo</title>
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
          <h3>Introduzca los datos</h3>
          <form method="post">
              <div class="form-group">
                  Seleccione el vehiculo al que quiere cambiar el telefono:
                  <select id="vehiculo" class="form-control" name="vehiculo">
                    <?php
                      include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdVehiculo.php";
                      $vehiculos=getVehicles();
                      for ($i=0;$i<mysqli_num_rows($vehiculos);$i++)
                      {
                        $matricula=mysqli_fetch_row($vehiculos);
                        $info=getVehicleInfo($matricula[0]);
                        echo '<option value="'.$info[1].'">'.$info[1].'</option>';
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                    Indique el nuevo telefono del vehiculo:
                    <input type="tel" id="phone" class="form-control" name="telefono" id="telefono" pattern="[6-7]{1}[0-9]{8}" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-success" value="Cambiar Telefono"></input>
                </div>
          </form>
          <?php
            include "/Applications/MAMP/htdocs/transportgest/LOGICA/editarTelefonoVehiculo.php";
           ?>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>
