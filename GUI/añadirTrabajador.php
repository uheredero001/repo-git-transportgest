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
                  <input type="text"  class="form-control" placeholder="Dni *" pattern="[0-9]{3}[A-Z]"value="" required name="dni" id="dni" />
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" minlength="3" placeholder="Nombre *" value="" name="nombre" required id="nombre"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" minlength="3" placeholder="Apellidos *" value="" required name="apellidos" id="apellidos"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" minlength="3" placeholder="Puesto de trabajo *" required value="" name="puesto" id="puesto"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Telefono *" required value="" pattern="[6-7]{1}[0-9]{2}-[0-9]{3}-[0-9]{3}" name="telefono" id="telefono"/>
              </div>
              <div class="form-group">
                <select id="estado" name="estado" class="form-control">
                    <option value="Baja Laboral">Baja Laboral</option>
                    <option value="Alta Laboral">Alta Laboral</option>
                    <option value="Baja Medica">Baja Medica</option>
                </select>
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
