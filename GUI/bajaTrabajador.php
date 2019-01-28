<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Dar de baja Trabajador</title>
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
                  Seleccione el trabajador al que quiere dar de baja:
                    <select id="trabajador" class="form-control" name="trabajador">
                      <?php
                        include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdTrabajador.php";
                        $trabajadores=getWorkersDni();
                        for ($i=0;$i<mysqli_num_rows($trabajadores);$i++)
                        {
                          $dni=mysqli_fetch_row($trabajadores);
                          $info=getWorkerInfo($dni[0]);
                          echo '<option value="'.$info[1].'">'.$info[1].' - '.$info[2].' '.$info[3].'</option>';
                        }
                      ?>
                    </select>
                </div>
                <div class="form-group">
                    Seleccione el tipo de baja:
                    <select class="form-control" id="tipo-baja" name="tipo-baja">
                      <option value="Baja Laboral">Baja Laboral</option>
                      <option value="Baja Medica">Baja Medica</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-success" value="Dar de baja"></input>
                </div>
          </form>
          <?php
          include "/Applications/MAMP/htdocs/transportgest/LOGICA/bajaTrabajador.php";

           ?>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </body>

</html>
