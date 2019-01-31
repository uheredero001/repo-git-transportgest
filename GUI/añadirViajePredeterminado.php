<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Añadir Viaje Predeterminado</title>
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
          <form method="post">
              <div class="form-group">
                Seleccione vehiculo:
                <select id="vehiculo" name="vehiculo" class="form-control">
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
                Seleccione la carga 1:
                <select id="carga1" name="carga1" class="form-control">
                  <?php
                    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdLugarDescarga.php";
                    $puntos=getLugaresDescarga();
                    for ($i=0;$i<mysqli_num_rows($puntos);$i++)
                    {
                      $nombre=mysqli_fetch_row($puntos);
                      $info=getLugarDescargaInfo($nombre[0]);
                      echo '<option value="'.$info[1].'">'.$info[1].' - '.$info[2].'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                Seleccione la carga 2 (o deje en blanco):
                <select id="carga2" name="carga2" class="form-control">
                  <option value=""></option>
                  <?php
                    $puntos=getLugaresDescarga();
                    for ($i=0;$i<mysqli_num_rows($puntos);$i++)
                    {
                      $nombre=mysqli_fetch_row($puntos);
                      $info=getLugarDescargaInfo($nombre[0]);
                      echo '<option value="'.$info[1].'">'.$info[1].' - '.$info[2].'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                Seleccione la carga 3 (o deje en blanco):
                <select id="carga3" name="carga3" class="form-control">
                  <option value=""></option>
                  <?php
                    $puntos=getLugaresDescarga();
                    for ($i=0;$i<mysqli_num_rows($puntos);$i++)
                    {
                      $nombre=mysqli_fetch_row($puntos);
                      $info=getLugarDescargaInfo($nombre[0]);
                      echo '<option value="'.$info[1].'">'.$info[1].' - '.$info[2].'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                Seleccione la carga 4 (o deje en blanco):
                <select id="carga4" name="carga4" class="form-control">
                  <option value=""></option>
                  <?php
                    $puntos=getLugaresDescarga();
                    for ($i=0;$i<mysqli_num_rows($puntos);$i++)
                    {
                      $nombre=mysqli_fetch_row($puntos);
                      $info=getLugarDescargaInfo($nombre[0]);
                      echo '<option value="'.$info[1].'">'.$info[1].' - '.$info[2].'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                Seleccione la carga 5 (o deje en blanco):
                <select id="carga5" name="carga5" class="form-control">
                  <option value=""></option>
                  <?php
                    $puntos=getLugaresDescarga();
                    for ($i=0;$i<mysqli_num_rows($puntos);$i++)
                    {
                      $nombre=mysqli_fetch_row($puntos);
                      $info=getLugarDescargaInfo($nombre[0]);
                      echo '<option value="'.$info[1].'">'.$info[1].' - '.$info[2].'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                Seleccione la carga 6 (o deje en blanco):
                <select id="carga6" name="carga6" class="form-control">
                  <option value=""></option>
                  <?php
                    $puntos=getLugaresDescarga();
                    for ($i=0;$i<mysqli_num_rows($puntos);$i++)
                    {
                      $nombre=mysqli_fetch_row($puntos);
                      $info=getLugarDescargaInfo($nombre[0]);
                      echo '<option value="'.$info[1].'">'.$info[1].' - '.$info[2].'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                Seleccione la carga 7 (o deje en blanco):
                <select id="carga7" name="carga7" class="form-control">
                  <option value=""></option>
                  <?php
                    $puntos=getLugaresDescarga();
                    for ($i=0;$i<mysqli_num_rows($puntos);$i++)
                    {
                      $nombre=mysqli_fetch_row($puntos);
                      $info=getLugarDescargaInfo($nombre[0]);
                      echo '<option value="'.$info[1].'">'.$info[1].' - '.$info[2].'</option>';
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                  <input type="submit" align="center" class="btn-lg btn-success" value="Añadir Viaje Predeterminado" />
              </div>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>

<?php
?>
