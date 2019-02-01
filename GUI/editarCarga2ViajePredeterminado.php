<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Cambiar Carga2 de Viaje Predeterminado</title>
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
                      $viajes=getViajes();
                      for ($i=0;$i<mysqli_num_rows($viajes);$i++)
                      {
                        $id=mysqli_fetch_row($viajes);
                        $info=getViajePredeterminadoInfo($id[0]);
                        echo '<option value="'.$info[0].'">'.$info[1].' - '.$info[2].' - '.$info[3].' - '.$info[4].' - '.$info[5].' - '.
                                                  $info[6].' - '.$info[7].' - '.$info[8].'</option>';
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  Indique la nueva carga 2:
                  <select id="carga2" name="carga2" class="form-control">
                    <option value=""></option>
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
                    <input type="submit" class="btn btn-lg btn-success" value="Cambiar Carga2"></input>
                </div>
          </form>
          <?php
            include "/Applications/MAMP/htdocs/transportgest/LOGICA/editarCarga2ViajePredeterminado.php";
           ?>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>
