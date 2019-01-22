<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Añadir Trabajador</title>
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
          <form id="nuevoTrabajador" method="post">
              <div class="form-group">
                  <input type="text"  class="form-control" placeholder="Dni *" value="" name="dni" id="dni" />
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nombre *" value="" name="nombre" id="nombre"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Apellidos *" value="" name="apellidos" id="apellidos"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Puesto de trabajo *" value="" name="puesto" id="puesto"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Telefono *" value="" name="telefono" id="telefono"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Estado (Alta Laboral / Baja Medica / Baja Laboral) *" value="" name="estado" id="estado"/>
              </div>
              <div class="form-group" >
                  <input type="submit"  class="btn-lg btn-success" value="Añadir Trabajador" />
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
