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

    function getUserinfo($nick)//Devuelve un array con todos los datos
    {
      global $conexionbd;

      $query = "SELECT * FROM Usuario WHERE Nick='$nick'";
      $resultado=$conexionbd->query($query);
      $fila=mysqli_fetch_row($resultado);
      return $fila;
    }


    function existVehicle ($matricula) //Devuelve 0 si no existe y /=0 si existe
    {
      global $conexionbd;

      $query = "SELECT Matricula FROM Vehiculo WHERE Matricula='$matricula'";
      $resultado=$conexionbd->query($query);
      return mysqli_num_rows($resultado);
    }


    function getVehicleInfo($matricula)//Devuelve un array con todos los datos
    {
      global $conexionbd;

      $query = "SELECT * FROM Vehiculo WHERE Matricula='$matricula'";
      $resultado=$conexionbd->query($query);
      $fila=mysqli_fetch_row($resultado);
      return $fila;
    }


    function existWorker ($dni) //Devuelve 0 si no existe y /=0 si existe
    {
      global $conexionbd;

      $query = "SELECT Dni FROM Trabajador WHERE Dni='$dni'";
      $resultado=$conexionbd->query($query);
      return mysqli_num_rows($resultado);
    }


    function getWorkerInfo($dni)//Devuelve un array con todos los datos
    {
      global $conexionbd;

      $query = "SELECT * FROM Trabajador WHERE Dni='$dni'";
      $resultado=$conexionbd->query($query);
      $fila=mysqli_fetch_row($resultado);
      return $fila;
    }


    function existLugarDescarga ($nombre,$direccion) //Devuelve 0 si no existe y /=0 si existe
    {
      global $conexionbd;

      $query = "SELECT Nombre FROM LugarDescarga WHERE Nombre='$nombre' AND Direccion='$direccion'";
      $resultado=$conexionbd->query($query);
      return mysqli_num_rows($resultado);
    }


    function getLugarDescargaInfo($dni,$direccion)//Devuelve un array con todos los datos
    {
      global $conexionbd;

      $query = "SELECT * FROM LugarDescarga WHERE Nombre='$nombre' AND Direccion='$direccion'";
      $resultado=$conexionbd->query($query);
      $fila=mysqli_fetch_row($resultado);
      return $fila;
    }


    function existViajePredeterminado ($id) //Devuelve 0 si no existe y /=0 si existe
    {
      global $conexionbd;

      $query = "SELECT * FROM ViajePredeterminado WHERE Id='$id'";
      $resultado=$conexionbd->query($query);
      return mysqli_num_rows($resultado);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
