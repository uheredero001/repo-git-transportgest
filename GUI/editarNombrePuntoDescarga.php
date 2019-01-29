<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Cambiar Nombre de Punto Descarga</title>
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
                  Seleccione el punto al que quiere cambiar el nombre:
                    <select id="punto" class="form-control" name="punto">
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
                    Indique el nuevo nombre del punto de descarga:
                    <input id="nombre" name="nombre" class="form-control"></input>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-success" value="Cambiar Nombre"></input>
                </div>
          </form>
          <?php
            include "/Applications/MAMP/htdocs/transportgest/LOGICA/editarNombrePuntoDescarga.php";
           ?>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>
