<?php
    include "/Applications/MAMP/htdocs/transportgest/DATAACCESS/accesobdUsuario.php";

    if (isset($_POST['nick'])&&isset($_POST['password'])&&isset($_POST['confirm-password'])&&isset($_POST['nombre'])&&
        isset($_POST['apellidos'])&&isset($_POST['privilegios']))
    {
      $nick=$_POST['nick'];
      $password=$_POST['password'];
      $confirmpswd=$_POST['confirm-password'];
      $nombre=$_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $privilegios=$_POST['privilegios'];

      if(strcmp($password,$confirmpswd)!==0){
        echo "Las contraseñas no coinciden.";
      }
      else {
        if(existUser($nick)>0)
        {
            echo "Usuario no disponible.";
        }
        else{
            if(insertUser($nick,md5($password),$privilegios,$nombre,$apellidos)!==0)
            {
              echo "Ha ocurrido algun error con la base de datos.";
            }
            else {
              echo "Usuario: ". $nick ." añadido correctamente.";
            }
        }
      }
    }

?>
