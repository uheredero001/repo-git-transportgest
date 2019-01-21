<?php
    $fichero_credenciales ="credencialesbd.php";
    include $fichero_credenciales;

    /////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE CONSULTA//////////////////////////////////////////////////////////


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

    function getVehicles()//Devuelve un array con la matricula de todos los Vehiculos
    {
      global $conexionbd;

      $query = "SELECT Matricula FROM Vehiculo";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
