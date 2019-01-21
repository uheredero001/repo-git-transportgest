<?php
    $fichero_credenciales ="credencialesbd.php";
    include $fichero_credenciales;

    /////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE CONSULTA//////////////////////////////////////////////////////////

    function existLugarDescarga ($nombre,$direccion) //Devuelve 0 si no existe y /=0 si existe
    {
      global $conexionbd;

      $query = "SELECT Nombre FROM LugarDescarga WHERE Nombre='$nombre' AND Direccion='$direccion'";
      $resultado=$conexionbd->query($query);
      return mysqli_num_rows($resultado);
    }


    function getLugaresDescarga()//Devuelve todos los nombres de los lugares de descarga.
    {
      global $conexionbd;

      $query= "SELECT Nombre FROM LugarDescarga";
      $resultado=$conexionbd->query($query);
      return $resultado;
    }


    function getLugarDescargaInfo($nombre)//Devuelve un array con todos los datos
    {
      global $conexionbd;

      $query = "SELECT * FROM LugarDescarga WHERE Nombre='$nombre'";
      $resultado=$conexionbd->query($query);
      $fila=mysqli_fetch_row($resultado);
      return $fila;
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    /////////////////////////////////FUNCIONES DE ACTUALIZACION/////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
