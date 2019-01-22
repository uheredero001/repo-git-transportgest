<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Añadir Vehiculo</title>
  </head>

  <body>
    <div w3-include-html="menuampliado.html"></div>
    <script>
      includeHTML();
    </script>


    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <h3 align="center">Introduzca los datos</h3>
          <form id="nuevoVehiculo" method="post">
              <div class="form-group">
                  <input type="text"  class="form-control" placeholder="Matricula *" value="" name="matricula" id="matricula" />
              </div>
              <div class="form-group">
                Tipo de vehiculo:
                <select id="tipo" name="tipo" class="form-control">
                    <option value="tren">tren</option>
                    <option value="rigido">rigido</option>
                    <option value="trailer">trailer</option>
                </select>
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" placeholder="Remolque (dejar en blanco si no tiene) *" value="" name="remolque" id="remolque"/>
              </div>
              <div class="form-group">
                  <input type="number" min="1980" max="2100" class="form-control" placeholder="Año Matriculacion Vehiculo*" value="" name="matriculacion" id="matriculacion"/>
              </div>
              <div class="form-group">
                  Proxima itv del vehiculo:
                  <input type="date" class="form-control" placeholder="Proxima Itv *" value="" name="proximaItv" id="proximaItv"/>
              </div>
              <div class="form-group">
                  Proxima itv del remolque:
                  <input type="date" class="form-control" placeholder="Proxima Itv Remolque *" value="" name="proximaItvRemolque" id="proximaItvRemolque"/>
              </div>
              <div class="form-group">
                  <input type="number" min="1" max="60" class="form-control" placeholder="Capacidad en palets *" value="" name="capacidad" id="capacidad"/>
              </div>
              <div class="form-group">
                <input type="tel" id="phone" class="form-control" placeholder="Telefono 6XX-XXX-XXX / 7XX-XXX-XXX*"name="telefono" id="telefono" pattern="[6-7]{1}[0-9]{2}-[0-9]{3}-[0-9]{3}" required>
              </div>
              <div class="form-group">
                  <input type="email"  class="form-control" placeholder="Email *" value="" name="email" id="email" />
              </div>
              <div class="form-group">
                  <input type="submit" align="center" class="btn-lg btn-success" value="Añadir Vehiculo" />
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
