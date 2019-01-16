<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap-4.1.3-dist/js/bootstrap.min.js" ></script>

    <script src="../SCRIPTS/includehtml.js"></script>

    <title> Transportgest</title>
  </head>
  <body>

    <div w3-include-html="menusinlogin.html"></div>
    <script>
      includeHTML();
    </script>

    <div class="container">
      <div class="row justify-content-md-center" align="center">
        <div clas="col-4"></div>

        <div class="col-4 login-form-1" text-align="center">
            <h3>Introduzca sus credenciales</h3>
          <form action="login.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Tu Usuario *" value="" name="usuario" id="usuario" />
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Tu Contraseña *" value="" name="password" id="password"/>
            </div>
            <div class="form-group">
              <input type="submit" class="btn-lg" value="Entrar en la aplicacion" />
            </div>
          </form>
        </div>

        <div class="col-4"></div>
      </div>
    </div>

  </body>
</html>

<?php
  include "/Applications/MAMP/htdocs/transportgest/LOGICA/login.php";
?>
