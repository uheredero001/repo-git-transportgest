<?php
    $fichero_credenciales ="credencialesbd.php";
    include $fichero_credenciales;

    /////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE CONSULTA//////////////////////////////////////////////////////////


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

    function getWorkersDni()//Devuelve todos los dnis en un array
    {
      global $conexionbd;

      $query = "SELECT Dni FROM Trabajador ";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }



    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
