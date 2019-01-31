<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Cambiar Password Usuario</title>
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
                  Seleccione el usuario al que quiere cambiar el password:
                    <select id="usuario" class="form-control" name="usuario">
                      <?php
                        include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdUsuario.php";
                        $usuarios=getUsers();
                        for ($i=0;$i<mysqli_num_rows($usuarios);$i++)
                        {
                          $nick=mysqli_fetch_row($usuarios);
                          $info=getUserinfo($nick[0]);
                          echo '<option value="'.$info[1].'">'.$info[1].'</option>';
                        }
                      ?>
                    </select>
                </div>
                <div class="form-group">
                    Indique el nuevo password del ususario:
                    <input type="password" id="password" class=" form-control" name="password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-success" value="Cambiar Password"></input>
                </div>
          </form>
          <?php
            include "/Applications/MAMP/htdocs/transportgest/LOGICA/editarPasswordUsuario.php";
           ?>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>
