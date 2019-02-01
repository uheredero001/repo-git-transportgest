<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Cambiar Carga1 de Viaje Predeterminado</title>
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
                  Seleccione el viaje al que quiere cambiar la carga1:
                  <select id="viaje" class="form-control" name="viaje">
                    <?php
                    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdViajePredeterminado.php";
                    $vehiculos=getViajes();
                    for ($i=0;$i<mysqli_num_rows($vehiculos);$i++)
                    {
                      $matricula=mysqli_fetch_row($vehiculos);
                      $info=getViajePredeterminadoInfo($matricula[0]);
                      echo '<option value="'.$info[0].'">'.$info[1].' - '.$info[2].' - '.$info[3].' - '.$info[4].' - '.$info[5].' - '.
                                                $info[6].' - '.$info[7].' - '.$info[8].'</option>';
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  Indique la nueva carga 1:
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
                    <input type="submit" class="btn btn-lg btn-success" value="Cambiar Carga1"></input>
                </div>
          </form>
          <?php
            include "/Applications/MAMP/htdocs/transportgest/LOGICA/editarCarga1ViajePredeterminado.php";
           ?>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>
