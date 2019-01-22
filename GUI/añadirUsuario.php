<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Añadir Usuario</title>
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
          <form id="nuevoUsuario" method="post">
              <div class="form-group">
                  <input type="text"  class="form-control" placeholder="Nick * (Debe ser único)" value="" name="nick" id="nick" />
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" placeholder="Contraseña *" value="" name="password" id="password"/>
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirme Contraseña *" value="" name="confirm-password" id="confirm-password"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nombre *" value="" name="nombre" id="nombre"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Apellidos *" value="" name="Apellidos" id="Apellidos"/>
              </div>
              <div class="form-group">
                <select id="privilegios" name="privilegios" class="form-control">
                    <option value="normal">normal</option>
                    <option value="admin">admin</option>
                </select>
              </div>
              <div class="form-group">
                  <input type="submit" align="center" class="btn-lg btn-success" value="Añadir Usuario" />
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
