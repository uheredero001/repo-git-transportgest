<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdUsuario.php";
    if(isset($_POST['usuario'])&&isset($_POST['password']))
    {
      $usuario=$_POST['usuario'];
      $password=$_POST['password'];
      if(existUser($usuario) &&
          strcasecmp(md5($password),getPassword($usuario))==0
        )
      {
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
          $_SESSION['user']=$usuario;
          $_SESSION['password']=$password;
        }
        header("Location:home.php");
        exit;
      }

      else {
        echo '<h1 align="center" style="color:red;">Credenciales incorrectas.</h1>';
      }
    }

?>
