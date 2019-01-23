<?php
    $fichero_credenciales ="credencialesbd.php";
    include $fichero_credenciales;

    /////////////////////////////////FUNCIONES DE INSERCION/////////////////////////////////////////////////////////

    function insertLugarDescarga($nombre,$direccion,$poblacion,$provincia,$hinicio,$hfin)//Devuelve 0 si todo va bien y /=0 si no
    {
      global $conexionbd;

      $query="INSERT INTO `LugarDescarga`(`Nombre`, `Direccion`, `Población`, `Provincia`, `HInicio`, `HFin`)
              VALUES ('$nombre','$direccion','$poblacion','$provincia','$hinicio','$hfin')";
      if($conexionbd->query($query)){
        return 0;
      }
      else{
        return -1;
      }
    }


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

    function updateAllLugarDescarga($id,$nombre,$direccion,$poblacion,$provincia,$hinicio,$hfin)
    {
      global $conexionbd;

      $query="UPDATE `LugarDescarga` SET `Nombre`='$nombre',`Direccion`='$direccion',`Población`='$poblacion',
                      `Provincia`='$provincia',`HInicio`='$hinicio',`HFin`='$hfin' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else
      {
        return -1;
      }

    }


    function updateHInicio($id,$hinicio)
    {
      global $conexionbd;

      $query="UPDATE `LugarDescarga` SET `HInicio`='$hinicio' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else
      {
        return -1;
      }

    }


    function updateHFin($id,$hfin)
    {
      global $conexionbd;

      $query="UPDATE `LugarDescarga` SET `HFin`='$hfin' WHERE `Id`='$id'";

      if($conexionbd->query($query)){
        return 0;
      }
      else
      {
        return -1;
      }

    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
