<?php
    $fichero_credenciales ="credencialesbd.php";
    include $fichero_credenciales;

    /////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////
    function insertUser($nick,$password,$privilegios,$nombre,$apellidos)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;
      $query ="INSERT INTO `Usuario`(`Nick`, `Password`, `Nombre`, `Apellidos`, `Privilegios`, `FechaUltAcceso`)
                VALUES ('$nick','$password','$nombre','$apellidos','$privilegios',NULL)";
      if($conexionbd->query($query))
      {
        return 0;
      }

        return -1;
    }


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

    function getUserinfo($nick)//Devuelve un array con todos los datos
    {
      global $conexionbd;

      $query = "SELECT Id,Nick,Nombre,Apellidos,Privilegios,FechaUltAcceso FROM Usuario WHERE Nick='$nick'";
      $resultado=$conexionbd->query($query);
      $fila=mysqli_fetch_row($resultado);
      return $fila;
    }

    function getUsers()//Devuelve el nick de todos los gestionUsuarios
    {
      global $conexionbd;

      $query = "SELECT Nick FROM Usuario";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }





    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////

    function updateAllUsuario($id,$password,$nombre,$apellidos,$privilegios,$fecha)//Devuelve 0 si va todo bien y /=0 si no
    {
      global $conexionbd;

      $query="UPDATE Usuario SET Password='$password', Nombre='$nombre', Apellidos='$apellidos', Privilegios='$privilegios',
                                  FechaUltAcceso='$fecha' WHERE Id='$id'";
      if($conexionbd->query($query))
      {
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateNombre($id,$nombre)//Devuelve 0 si va todo bien y /=0 si no
    {

      global $conexionbd;

      $query="UPDATE Usuario SET Nombre='$nombre' WHERE Id='$id'";
      if($conexionbd->query($query))
      {
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateApellidos($id,$apellidos)//Devuelve 0 si va todo bien y /=0 si no
    {

      global $conexionbd;

      $query="UPDATE Usuario SET Apellidos='$apellidos' WHERE Id='$id'";
      if($conexionbd->query($query))
      {
        return 0;
      }
      else{
        return -1;
      }
    }


    function updatePassword($id,$password)//Devuelve 0 si va todo bien y /=0 si no
    {

      global $conexionbd;

      $query="UPDATE Usuario SET Password='$password' WHERE Id='$id'";
      if($conexionbd->query($query))
      {
        return 0;
      }
      else{
        return -1;
      }
    }


    function updateFechaUltAcceso($id,$fecha)//Devuelve 0 si va todo bien y /=0 si no
    {

      global $conexionbd;

      $query="UPDATE Usuario SET FechaUltAcceso='$fecha' WHERE Id='$id'";
      if($conexionbd->query($query))
      {
        return 0;
      }
      else{
        return -1;
      }
    }


    function updatePrivilegios($id,$privilegios)//Devuelve 0 si va todo bien y /=0 si no
    {

      global $conexionbd;

      $query="UPDATE Usuario SET Privilegios='$privilegios' WHERE Id='$id'";
      if($conexionbd->query($query))
      {
        return 0;
      }
      else{
        return -1;
      }
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
