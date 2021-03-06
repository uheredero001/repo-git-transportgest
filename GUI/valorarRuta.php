<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Valorar Ruta</title>
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
        <div class="col-sm-4"></div>
        <div class="col-sm-4" align="center">
          <h3>Introduzca los datos</h3>
          <form method="post">
              <div class="form-group">
                  Seleccione la valoracion de la ruta:
                    <select id="valoracion" class="form-control" name="valoracion">
                        <option value="defectuosa">Defectuosa</option>
                        <option value="desastre">Desastre</option>
                        <option value="correcta">Correcta</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-success" value="Enviar Valoracion"></input>
                </div>
          </form>
          <?php
            include "/Applications/MAMP/htdocs/transportgest/LOGICA/valorarRuta.php";
           ?>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>
