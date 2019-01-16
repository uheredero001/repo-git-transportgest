<?php
    $fichero_credenciales ="credencialesbd.php";
    include $fichero_credenciales;

    /////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE CONSULTA//////////////////////////////////////////////////////////

    function existUser ($user) //Devuelve 0 si no existe y /=0 si existe
    {
      global $conexionbd;

      $query = "SELECT Nick FROM Usuario WHERE Nick='$user'";
      $resultado=$conexionbd->query($query);
      return mysqli_num_rows($resultado);
    }


    function getPassword($user)//Devuelve el Password de un usuario de la bd
    {
      global $conexionbd;
      $query="SELECT Password FROM Usuario WHERE Nick='$user'";
      $resultado=$conexionbd->query($query);

      while($fila=mysqli_fetch_row($resultado))
      {
        return $fila[0];
      }
      return "";
    }


    function esAdmin($user)//Devuelve true si el $user es administrador
    {
      global $conexionbd;
      $query="SELECT Privilegios FROM Usuario WHERE Nick='$user'";
      $resultado=$conexionbd->query($query);
      while($fila=mysqli_fetch_row($resultado))
      {
        if (strcasecmp($fila[0],"admin")==0)
        {
          return true;
        }
        else {
          return false;
        }
      }
      return false;
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
